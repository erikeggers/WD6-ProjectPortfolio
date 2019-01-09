<?
    /*
    echo "Hello from PHP!!!!";

    for ($i=0; $i<10; $i++) {
        echo "HELLLLLOOOOO<br>";
    }

    $myvar = ["num"=>1, "age"=>"27", "another"=>["1",2]];
    var_dump($myvar);

    foreach($myvar as $item) {
        var_dump($item);
        echo "---------<br>";
    }
    */

    class myclass {
        public function __construct($name="") {
            echo "Hello, my name is ".$name;
        }
        public function myMethod($number=0) {
            //var_dump($_REQUEST);
            echo " and my phone number is ".$number;
            echo ", I really like ".$_REQUEST["like"];
        }
    }

    $mynewclass = new myClass("Erik Eggers"); 
    $mynewclass->myMethod(8643543263);
?>