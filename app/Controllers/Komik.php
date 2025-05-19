<?php 
namespace App\Controllers;

use App\Services\APIService;

class Komik extends BaseController {

    protected $api;
    protected $apiConfig;
    
    public function __construct()
    {
        $this->api = new APIService();
        $this->apiConfig = new \Config\ApiEndpoints();
    }

    public function index($param) 
    {
        try {
            $comic = $this->api->get($this->apiConfig->komicast["main"] . $param);
            
            $data = [
                'title' => $comic["data"]['title'],
                'thumbnail' => $comic["data"]['thumbnail'],
                'synopsis' => $comic["data"]['synopsis'],
                'meta_info' => $comic["data"]['meta_info'],
                'genres' => $comic["data"]['genre'],
                'chapters' => $comic["data"]['chapters'],
                'param' => $param
            ];
            
            return view('templates/header')
            .view('komik/index', $data)
            .view('templates/footer');
            
        } catch (\Exception $e) {
            return view('templates/header')
            .view('errors/error_404', ['message' => 'Failed to fetch data from server'])
            .view('templates/footer');
        }
    }

    public function chapter($param, $chapterSlug)
    {
        $endPoints = 'chapter/' . $chapterSlug;

        try {
            $comicImages = $this->api->get($this->apiConfig->komicast["main"] . $endPoints)["data"];
            $allChapters = $this->api->get($this->apiConfig->komicast["main"] . $param)["data"]["chapters"];
                        
            // get current index
            $i = 0;
            foreach ($allChapters as $slug) {
                if ($slug["slug"] === $chapterSlug) {
                    $chapterIndex = $i;
                }
                $i++;
            }
            
            $previousChLinkIndex = $chapterIndex + 1;
            if ($previousChLinkIndex < count($allChapters)) {
                $previousChLink = base_url('komik/chapter/' . $param . '/' . $allChapters[$previousChLinkIndex]["slug"]);
            } else {$previousChLink = null;}

            $nextChLinkIndex = $chapterIndex - 1;
            if ($nextChLinkIndex >= 0) {
                $nextChLink = base_url('komik/chapter/' . $param . '/' . $allChapters[$nextChLinkIndex]["slug"]);
            } else {$nextChLink = null;}

            $data = [
                'param' => $param,
                'images' => $comicImages,
                'chapterName' => implode(' ', explode('-', $chapterSlug)),
                'previousChLink' => $previousChLink,
                'nextChLink' => $nextChLink,
                'allChapters' => $allChapters,
            ];

            return view('templates/header')
                .view('komik/chapter', $data);
            
            
        } catch (\Exception $e) {
            return view('errors/error_404', ['message' => 'Failed to fetch data from server']);
        }
    }
}

