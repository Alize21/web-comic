<?php

namespace App\Controllers;

use App\Services\APIService;
use Exception;

class Home extends BaseController
{
    protected $api;
    protected $apiConfig;
    
    public function __construct()
    {
        $this->api = new APIService();
        $this->apiConfig = new \Config\ApiEndpoints();
    }

    public function index()
    {     
                
        try {
            $comics = $this->api->get($this->apiConfig->komicast["main"]);
            $popularComics = [];
            
            // Filter comics with rating > 7.90
            for ($page = 2; $page <= 2; $page++) {
                $comicsFilter = $this->api->get($this->apiConfig->komicast["page"] . $page)['data'];

                foreach ($comicsFilter as $comic) {

                    if (floatval($comic["rating"]) > 7.90) {
                        $popularComics[] = [
                            'title' => $comic["title"],
                            'thumbnail' => $comic["thumbnail"],
                            'param' => $comic["param"],     
                        ];
                    }

                }              
            }

            $data = [
                'next_page' => $comics["next_page"],
                'prev_page' => $comics["prev_page"],
                'comics' => $comics["data"],
                'popular_comics' => $popularComics,
            ];

            return view('templates/header')
            .view('home/index', $data)
            .view('templates/footer');
            
        } catch (\Exception $e) {
            return view('templates/header')
            .view('errors/error_404', ['message' => 'Failed to fetch data from server'.$e->getMessage()])
            .view('templates/footer');
        }
    }

}

