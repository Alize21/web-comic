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
            $comic = $this->api->get($this->apiConfig->komicast["main"] . $param)["data"];

            $data = [
                'title' => $comic['title'],
                'thumbnail' => $comic['thumbnail'],
                'synopsis' => $comic['synopsis'],
                'meta_info' => $comic['meta_info'],
                'genres' => $comic['genre'],
                'chapters' => $comic['chapters'],
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

    public function chapter($chapterSlug)
    {
        $endPoints = 'chapter/' . $chapterSlug;
        try {
            $comicChapter = $this->api->get($this->apiConfig->komicast["main"] . $endPoints)['data'];

            $data = [
                'images' => $comicChapter
            ];

            return view('komik/chapter', $data);
            
            
        } catch (\Exception $e) {
            return view('errors/error_404', ['message' => 'Failed to fetch data from server']);
            
        }
    }
}
