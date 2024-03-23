<?php
    var_dump($_SERVER['REQUEST_METHOD']);
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // sanitize the input, only allows text 
        $firstName = htmlspecialchars($_POST["firstname"]);
        $lastName = htmlspecialchars($_POST["lastname"]);
        $favoritePet = htmlspecialchars($_POST["favouritepet"]);

        if (empty($firstName) || empty($lastName) || empty($favoritePet)){
            header("Location: ../index.php?error=emptyfields&firstname=".$firstName."&lastname=".$lastName."&favouritepet=".$favoritePet);
            exit();
        }

        echo "<p>Thank you for your message, $firstName $lastName</p>";
        echo "<p>Your $favoritePet is in good hands at the clinic: </p>";
    }
    else {
        header("Location: ../index.php");
        echo "<br>";
        echo "<p>Sorry, something went wrong</p>";
    }