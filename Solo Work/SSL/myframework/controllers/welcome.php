<?php

class welcome extends AppController {
    public function __construct(){
        //$this->getView("welcome");
    }

    public function index(){
        $this->getview("header", array("pagename"=>"welcome"));
        $this->getView("welcome");
        $this->getView("footer");
    }

    public function contact(){
        $this->getView("header", array("pagename"=>"contact"));
        $random = substr( md5(rand()), 0, 7);
        $_SESSION["cap"]=$random;
        $this->getView("contact",array("cap"=>$random)); 
        $this->getView("footer");
    }

    public function contactRecv(){
        $this->getview("header", array("pagename"=>"contact"));
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
            $this->getView("contactInvalid");
            $this->getView("footer");
        } else if (strlen($_POST["password"]) <= '9') {
            $_POST["password"] = ''; 
            $this->getView("contactInvalid");
            $this->getView("footer");
        } else if ($_POST['selection'] == ''){ 
            $this->getView("contactInvalid");
            $this->getView("footer");
        } else if (!isset($_POST['radios'])) { 
            $this->getView("contactInvalid");
            $this->getView("footer");
        } else if (!isset($_POST['checkbox1'])) { 
            $this->getView("contactInvalid");
            $this->getView("footer");
        } else if ($_POST['textarea'] == '') { 
            $this->getView("contactInvalid");
            $this->getView("footer");
        } else if ($_POST['captcha'] != $_SESSION["cap"]) {
            echo "<div class='container' style='margin-top:80px'>";
            echo "Invalid captcha, try again"; 
            echo "<br><a href='/welcome/contact'>Click here to go back</a>";
            echo "</div>";
            $this->getView("footer");
        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Your form has been submitted.");'; 
            echo 'window.location.href = "/";';
            echo '</script>';
        }
    }

    public function ajax(){
        if (@$_REQUEST["email"]=="ssl@ssl.com") {
            echo "welcome";
        } else {
            echo "invalid information";
        }
        
    }


}

?>