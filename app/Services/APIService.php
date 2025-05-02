<?php 

namespace App\Services;

use Exception;

class APIService {
    
    protected $client;

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest();
    }

    public function get($url, $maxRetries = 3, $delaySeconds = 2)
    {
        $attempt = 0;

        while ($attempt < $maxRetries) {
            try {
                $attempt++;

                $response = $this->client->get($url);
                $data = json_decode($response->getBody(), true);

                if (!$data) {
                    throw new \Exception('Failed to create response');
                }

                return $data;
            } catch (\Exception $e) {
                log_message("error", "attempt -{$attempt} failed: " . $e->getMessage());

                if ($attempt < $maxRetries) {
                    sleep($delaySeconds);
                } else {
                    throw new \Exception("Failed to fetch data from API after {$maxRetries} attempts.");
                }
            }    
        }       
    }
}
