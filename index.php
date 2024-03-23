<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello World!";
    ?>

    <!-- good syntax for incorperating html elements into php code -->
    <?php if (true) { ?>
        <h1>True</h1>
    <?php } ?>
  
    <!-- Camel Case -->
    <?php 
        $fullName = "John Doe";
        echo $fullName;
    ?>

    <!-- Scalar types - one variable to it -->
    <?php 
        $string = "Hello World";
        $int = 1000;
        $float = 10.10;
        $bool = true;
    ?>

    <!-- Array type -->
    <?php 
        $names = ["John", "Doe", "Jane"];
        echo $names[2];
    ?>

    <!-- object type -->
    <?php
        // $object = new Car();
    ?>

    <p>My name is <?php echo $fullName; ?></p>

    <!-- superglobal -->
    <?php
        echo $_SERVER['DOCUMENT_ROOT'];
        echo "<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['REQUEST_METHOD'];
    ?>

    <?php 
    // get a label 
    // works with url: http://localhost/PHPCrashCourse/index.php?name=Jordan&eyecolour=blue
        echo "<br>";
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["eyecolour"];
    ?>

    <!-- request method looks for GET, POST, COOKIE.. -->
    <?php 
        echo "<br>";
        echo $_REQUEST["name"];
    ?>

    <!-- submitting -->
    <?php 
        echo "<br>";
        echo $_FILES["name"];
        echo "<br>";
        echo $_COOKIE["name"];
        echo "<br>";
        echo $_SESSION["name"];
        echo "<br>";
        echo $_ENV["name"];
    ?>

</body>
</html>