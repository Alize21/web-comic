<?php 
namespace App\Controllers;

use App\Services\APIService;

class Komik extends BaseController {

    public function index($title) {
        $data = [
            'title' => $title
        ];
        return view('templates/header')
            .view('komik/index', $data)
            .view('templates/footer');
    }
}