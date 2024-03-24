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
        function sayHello($text){
            echo $text;
        }
        sayHello("Hello World!");
        echo "<br>";

        $test = sayHello("test");
        echo $test;
        echo "<br>";

        // can assign default value to the parameter
        function sayhi($text = "Hi"){
            return $text;
        }

        echo sayhi();
        echo "<br>";

        // To enable strict variable type checking, declare the strict_types 
        // directive at the top of the file
        function add(int $a, int $b){
            $result = ($a + $b);
            return print_r($result);
        }
        add(1, 2);

    ?>
</body>
</html>