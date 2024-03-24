<?php 
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $test = "Daniel";

        function testFunction() {
            // global var
            global $test;
            return $test;
        }

        // if it wasnt static it would return 1
        function testFunction2() {
            // static var
            static $num = 0;
            $num++;

            return $num;
        }
        echo testFunction2(); // 1
        echo testFunction2(); // 2

        class MyClass{
            public $name = "Daniel";
            public $age = 25;

            public function __construct($name, $age){
                $this->name = $name;
                $this->age = $age;
            }

            public function getName(){
                return $this->name;
            }

            public function getAge(){
                return $this->age;
            }
        }


        
    ?>
</body>
</html>