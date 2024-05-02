<?php 
    session_start();

    // unsets the global session variable
    // unset($_SESSION['name']);

    // purges all session data
    // session_unset();

   
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
        echo $_SESSION['name'];
    ?>
</body>
</html>