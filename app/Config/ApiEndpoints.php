<?php 
namespace Config;

use CodeIgniter\Config\BaseConfig;

class ApiEndpoints extends BaseConfig {
    public $komicast = [
       "main" => 'http://localhost:3000/api/komikcast/',
       "page" => 'http://localhost:3000/api/komikcast?page=',
    ];
    public $komiku = [
       "main" => 'http://localhost:3000/api/komiku/',
    ];
}