<?php 
    // DATA SOURCE NAME
    $dsn = "mysql:host=localhost;dbname=myfirstdatabase";
    $dbusername= "root";
    $dbpassword= "password";

    // error handling
    try{ 
        // PHP data objects (PDO) is a database access layer 
        // providing a uniform method of access to multiple databases.
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo " PDO Conection Failed" . $e->getMessage();
    }
?>
    <?php
        require_once 'dbh.inc.php';

        try {
            echo "Connected successfully!";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    ?>