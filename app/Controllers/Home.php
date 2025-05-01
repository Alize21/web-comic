<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $client = \config\Services::curlrequest();
        $response = $client->get('https://weeb-scraper.onrender.com/api/komikcast');
        $data = json_decode($response->getBody(), true);
            
        return view('templates/header')
            .view('home/index', $data)
            .view('templates/footer');
    }
}
