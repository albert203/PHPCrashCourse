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
        // for loop
        for ($i = 0; $i <= 10; $i++) {
            echo $i . " ";
        }

        echo "<br>";

        // while loop
        $value = 5;
        while ($value < 10) {
            $value++;
            echo $value . " ";
        }

        // do while loop
        // do while loop will execute at least once 
        $value = 5;
        do {
            $value++;
            echo $value . " ";
        } while ($value < 10);

        echo "<br>";

        // foreach loop
        $fruits = ["apple", "banana", "orange"];
        foreach ($fruits as $fruit) {
            echo $fruit . " ";
        }

        echo "<br>";

        // foreach loop with key
        $fruits = ["apple", "banana", "orange"];
        foreach ($fruits as $key => $fruit) {
            echo $key . " " . $fruit . " ";
        }

        echo "<br>";

        // associative array with foreach loop
        $people = [
            "john" => 20,
            "doe" => 30,
            "smith" => 40,
        ];

        foreach ($people as $person => $age) {
            echo $person . " is " . $age . " years old. ";
        }

        echo "<br>";

        $person = [
            "name" => "john",
            "age" => 20,
            "job" => "developer",
            "hobbies" => ["reading", "coding", "gaming"]
        ];

        foreach ($person as $key => $value) {
            print_r($value);
            echo "<br>";
            if ($key === "hobbies") {
                foreach ($value as $hobby) {
                    echo $hobby . " ";
                }
            }
        }


    ?>
</body>
</html>