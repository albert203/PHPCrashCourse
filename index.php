<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fruits= [
            "Apple",
            "Banana", 
            "Orange", 
            "Mango", 
            "Grapes"
        ];
        echo $fruits[0]; // echos Apple
        echo "<br>";
        $fruits[] = "Pineapple";
        echo $fruits[5]; // echos Pineapple


        
        // unset($fruits[1]); // removes Banana
        // echo $fruits[1]; // echos Orange

        // array_spice($fruits, 0); // removes Apple
        // echo $fruits[0]; // echos Orange

        // Associative Arrays
        $tasks = [
            "laundry" => "Daniel",
            "dishes" => "John",
            "cleaning" => "Jane",
            "vacuuming" => "Alice"
        ];
        echo "<br>";
        echo $tasks['laundry']; // echos Daniel

        print_r($tasks); // prints the entire array

        sort($fruits); // sorts the array in ascending order
        echo "<br>";
        sort($tasks); // sorts the array in ascending order as an indexed array
        print_r($fruits); // prints the entire array
        echo "<br>";
        print_r($tasks); // prints the entire array
        
        array_push($fruits, "Strawberry"); // adds Pineapple and Strawberry to the end of the array
        echo "<br>";
        print_r($fruits); // prints the entire array

        // push a new task to the tasks associative array
        $tasks["gardening"] = "Bob";
        echo "<br>";
        print_r($tasks); // prints the entire array

        array_splice($fruits, 1, 0, "mango"); // adds mango to the 2nd index of the array
        echo "<br>";
        print_r($fruits); // prints the entire array

        // nested arrays
        $food = [
            "meats" => ["beef", "chicken", "pork"],
            "vegetables" => ["carrot", "cabbage", "onion"]
        ];
        echo "<br>";
        echo $food['meats'][0]; // echos beef
        echo "<br>";
        echo $food['vegetables'][0]; // echos cabbage

    ?>
</body>
</html>