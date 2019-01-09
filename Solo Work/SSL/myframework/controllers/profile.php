<?php

class profile extends AppController {
    public function __construct(){
        if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {
            
        } else {
            header("Location:/welcome");
        }
    }

    public function index(){
        $this->getview("header", array("pagename"=>"profile"));
        $this->getview("profile", array("pagename"=>"profile"));
    }

    public function update() {
        if($_FILES["img"]["name"] != "") {
            $imageFileType = pathinfo("asset/".$_FILES["img"]["name"],PATHINFO_EXTENSION);
            if (file_exists("assets/".$_FILES["img"]["name"])) {
                echo "Sorry, file exists";
            } else {
                if($imageFileType != "jpg" && $imageFileType != "png") {
                    echo "Sorry, this file type is not allowed";
                } else {
                    if(move_uploaded_file($_FILES["img"]["tmp_name"],"assets/".$_FILES["img"]["name"])) {
                       echo "file uploaded"; 
                    } else {
                        echo "error uploading";
                    }
                }
            }
            header("Location:/profile?msg=File Uploaded");
        }
    }
}

?>