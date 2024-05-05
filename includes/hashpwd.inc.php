<!-- FOR GENERAL HASHING, NOT PASSWORD SPECIFIC -->

<?php 
    $userPassword = "Kittens1234";
    // randomises 16 bytes of data then converts it to hexadecimal
    $salt = bin2hex(random_bytes(16));
    $pepper = "ASecretPepperString";
    $dataToHash = $userPassword . $salt . $pepper;
    $hashedPassword = hash("sha256", $dataToHash);
    
    echo "<br>";
    echo "Salt: $salt";
    echo "<br>";
    echo "hash: $hashedPassword";


    // TO GET THE DATA FROM THE DATABASE
    $userPassword = "Kittens1234";
    $storedSalt = $salt;
    $storedHash = $hashedPassword;
    $pepper = "ASecretPepperString";
    $dataToHash = $userPassword . $storedSalt . $pepper;

    $verificationData = hash("sha256", $dataToHash);

    if ($verificationData === $storedHash) {
        echo "data is correct";
    } else {
        echo "data is incorrect";
    }

    // FOR HASHING PASSWORDS
    $pwd = "cats1234";
    password_hash($pwd, PASSWORD_BCRYPT, ["cost" => 12]);

    $pwdLogin = "cats1234";
   if (password_verify($pwdLogin, $storedHash)){
         echo "password is THE SAME";
    } else {
         echo "password is NOT THE SAME";
   } // returns true or false

