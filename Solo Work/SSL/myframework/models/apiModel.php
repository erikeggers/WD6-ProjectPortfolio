<?php 
include('google-api-php-client/src/Google/autoload.php');

class apiModel {
    public function __construct($parent) {
        $this->db = $parent->db;
    }

    public function googleBooks($term='') {
        $client = new Google_Client();
        $client->setApplicationName("sslapi");
        $client->setDeveloperKey("AIzaSyBSsGYMN7yQ2q3kz82wUlvj_3FftmYcoQY");

        $service = new Google_Service_Books($client);

        $optParams = array("filter"=>"free-ebooks");
        $result = $service->volumes->listVolumes($term,$optParams);

        return $result;
    }
}

?>