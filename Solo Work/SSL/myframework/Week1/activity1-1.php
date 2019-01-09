<?

    class myclass {
        public function __construct() {
            echo "Hello, ";
        }
        public function myMethod() {
            echo "World!<br>";
            $name = "Erik";
            $age = 29;
            $person = ["name"=>"Erik", "age"=>29];
            $personindex = array("Erik", 29);
            echo "My name is $name and age is $age.<br>";
            echo 'My name is $name and age is $age.<br>';
            echo "My name is $personindex[0] and age is $personindex[1].<br>"; //Not sure if this is what you were asking us to do. Since Index can't be used on key/value array.
            echo "My name is ".$person["name"], " and age is ".$person["age"];
            $age = null;
            echo "<br>$age"; //Value will not be displayed
            unset($name);
            echo $name; // Variable becomes undefined

            
        }
        public function grades($grade=0) {
            if ($grade >= 90):
                echo "The grade of $grade is an A.";
            elseif ($grade >= 80 && $grade <= 89):
                echo "The grade of $grade is a B.";
            elseif ($grade >= 70 && $grade <= 79):
                echo "The grade of $grade is a C.";
            elseif ($grade >=60 && $grade <= 69):
                echo "The grade of $grade is a D.";
            else:
                echo "The grade of $grade is a F.";
            endif;
        }
    }

    $mynewclass = new myClass(); 
    $mynewclass->myMethod();
    $mynewclass->grades(75.5);

    echo "<br>---------<br>";

    $colors = [0=>"Red", 1=>"Maroon", 2=>"Blue", 3=>"Navy", 4=>"Green", 5=>"Lime", 6=>"Yellow", 7=>"Olive", 8=>"Purple", 9=>"Fuchsia"];
    
    foreach($colors as $key => $value) {
        echo "<span style='color:$value; background:lightgray'>$key : $value</span><br>";
    }
?>