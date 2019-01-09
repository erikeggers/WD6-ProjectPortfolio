<?php
class api extends AppController {
    public function __construct($parent){
        $this->parent = $parent;
    }
    public function showApi() {
        $this->getView("header",array("pagename"=>"api"));
        $data = $this->parent->getModel("youtube")->youtubeVideos("Cats");
        $this->getView("youtube",$data);
        $this->getView("footer");
    }
}
?>