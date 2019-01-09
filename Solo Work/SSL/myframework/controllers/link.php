<?php

class link extends AppController {
    public function __construct(){
        
    }

    public function index(){
        $this->getView("header");
        $this->getView("link");
        $this->getView("footer");
    }

}

?>
