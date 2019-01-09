<?php

class auth extends AppController {
    public function __construct($parent){
        $this->parent = $parent;
    }

    public function login(){
        if ($_REQUEST["username"] && $_REQUEST["password"]) {
            $data = $this->parent->getModel("users")->select(
                'select * from users where email = ? and password = ?',
                array($_REQUEST["username"], sha1($_REQUEST["password"])));
            if ($data) {
                $_SESSION["loggedin"]=1;
                header("Location:/welcome");

            } else {
            
                header("Location:/welcome?msg=Bad Login");
            }
        
        }
    }

    public function logout(){
        session_destroy();
        header("Location:/welcome");
    }

}

?>