<?php 
   session_start();
   $_SESSION['name'] = 'John';

    // unsets the global session variable but only in other pages
    // session_destroy();

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
        echo "<p>Test<p>";
        echo $_SESSION['name'];
    ?>
</body>
</html>