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


    public function index($param) {
        try {
            $comic = $this->api->get($this->apiConfig->komicast . $param);

            $data = [
                'title' => $comic['data']['title'],
                'thumbnail' => $comic['data']['thumbnail'],
                'synopsis' => $comic['data']['synopsis'],
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
}
