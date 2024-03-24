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
    $name = "John Doe";
        define('PI', 3.14);
        define('PI', 4.14); // gives error becuse untrue
        echo PI;
    ?>
</body>
</html>