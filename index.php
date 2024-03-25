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
    <h3>Signup</h3>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="pwd" placeholder="Enter Password">
        <input type="text" name="email" placeholder="Enter Email">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>
</html>