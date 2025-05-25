<?php 
namespace Config;

use CodeIgniter\Config\BaseConfig;

class ApiEndpoints extends BaseConfig {
    public $komicast = [
      //  "main" => 'http://localhost:3000/api/komikcast/',
      //  "page" => 'http://localhost:3000/api/komikcast?page=',
      //  "search" => 'http://localhost:3000/api/komikcast/?s=',
       "main" => 'https://weebsscraper-production.up.railway.app/api/komikcast/',
       "page" => 'https://weebsscraper-production.up.railway.app/api/komikcast?page=',
       "search" => 'https://weebsscraper-production.up.railway.app/api/komikcast/?s=',
    ];
    public $komiku = [
      //  "main" => 'http://localhost:3000/api/komiku/',
       "main" => 'https://weebsscraper-production.up.railway.app/api/komikcast/komiku/',
    ];
}