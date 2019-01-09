<?php

class registration extends AppController {
    public function __construct($parent){
        $this->parent = $parent;
        $this->showRegistrationForm();
    }
    
    public function showRegistrationForm(){
        $this->getview("header", array("pagename"=>"about"));
        $this->getView("registration");
        $this->getView("footer");
    }

    public function addRegistrationAction(){
        $this->parent->getModel("users")->add(
            "insert into users (email, password)
                values(?, ?)",
            array($_REQUEST["email"], sha1($_REQUEST["password"])));

        header("Location:/");
    }

}

?>
