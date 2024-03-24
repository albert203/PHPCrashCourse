<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "Hello World";
        echo strlen($string); // 11
        echo "<br>";

        echo strpos($string, "World"); // 6
        echo "<br>";

        echo str_replace("World", "PHP", $string); // Hello PHP
        echo "<br>";

        echo strtoupper($string); // HELLO WORLD
        echo "<br>";

        echo strtolower($string); // hello world
        echo "<br>";

        echo substr($string, 6, -1); // Worl
        echo "<br>";

        print_r(explode(" ", $string)); // Array ( [0] => Hello [1] => World )
        echo "<br>";

        echo implode(" ", ["Hello", "World"]); // Hello World
        echo "<br>";

        $number = -5.5;
        echo abs($number); // 5.5
        echo "<br>";

        echo round($number); // -5
        echo "<br>";

        echo ceil($number); // -5
        echo "<br>";

        echo floor($number); // -6
        echo "<br>";

        echo max(1, 2, 3, 4, 5); // 5
        echo "<br>";

        echo min(1, 2, 3, 4, 5); // 1
        echo "<br>";

        echo rand(1, 10); // Random number between 1 and 10
        echo "<br>";

        echo sqrt(16); // 4
        echo "<br>";

        echo pow(2, 3); // 8
        echo "<br>";

        echo log(10); // 2.302585092994
        echo "<br>";

        echo log10(10); // 1
        echo "<br>";

        $array = [1, 2, 3, 4, 5];
        echo count($array); // 5
        echo "<br>";

        echo array_sum($array); // 15
        echo "<br>";

        print_r(array_reverse($array)); // Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
        echo "<br>";

        print_r(array_unique([1, 2, 2, 3, 3, 3])); // Array ( [0] => 1 [1] => 2 [3] => 3 )
        echo "<br>";

        print_r(array_merge([1, 2], [3, 4])); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
        echo "<br>";

        echo date("Y-m-d H:i:s"); // your current time  in time format
        echo "<br>";

        echo time(); // current time in seconds since 1970, unix time
        echo "<br>";

        $date = date("Y-m-d H:i:s", time()); // current time in time format
        echo strtotime($date); 

    ?>
</body>
</html>