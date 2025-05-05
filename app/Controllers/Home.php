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
            $comics = $this->api->get($this->apiConfig->komicast);

            $data = [
                'next_page' => $comics["next_page"],
                'prev_page' => $comics["prev_page"],
                'comics' => $comics["data"],
            ];

            return view('templates/header')
            .view('home/index', $data)
            .view('templates/footer');
            
        } catch (\Exception $e) {
            return view('templates/header')
            .view('errors/error_404', ['message' => 'Failed to fetch data from server'])
            .view('templates/footer');
        }
    }

}

