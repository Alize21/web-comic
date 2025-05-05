<?php

namespace App\Controllers;

use App\Services\APIService;
use Exception;

class Home extends BaseController
{
    public function index()
    {     
        $api = new APIService();
        
        try {
            $comic = $api->get('http://localhost:3000/api/komikcast/');

            $data = [
                'next_page' => $comic["next_page"],
                'prev_page' => $comic["prev_page"],
                'comics' => $comic["data"],
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

