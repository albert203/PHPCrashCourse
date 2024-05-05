<?php 
    // DATA SOURCE NAME
    $host = 'localhost';
    $dbname = 'myfirstdatabase';
    $dbusername= 'root';
    $dbpassword= 'password';

    // error handling
    try{ 
        // PHP data objects (PDO) is a database access layer 
        // providing a uniform method of access to multiple databases.
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection Failed" . $e->getMessage());
    }
