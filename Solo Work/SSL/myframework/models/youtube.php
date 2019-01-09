<?php 
include('google-api-php-client/src/Google/autoload.php');

class youtube {
    public function __construct($parent) {
        $this->db = $parent->db;
    }

    public function youtubeVideos($term='') {
        $client = new Google_Client();
        $client->setApplicationName("sslapi");
        $client->setDeveloperKey("AIzaSyBSsGYMN7yQ2q3kz82wUlvj_3FftmYcoQY");

        $youtube = new Google_Service_YouTube($client);
        $result = $youtube->search->listSearch('id,snippet', array(
            'q' => $term,
            'maxResults' => 15,
          ));

        return $result;
    }
}

?>

