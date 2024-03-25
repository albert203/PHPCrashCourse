<?php
declare(strict_types=1);

// Include the database connection file only once
require_once 'dbh.inc.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['username'];
  $pwd = $_POST['pwd']; // Assuming password is stored securely
  $email = $_POST['email'];

  try {
    // Prepare the SQL statement with placeholders
    //manually update the user with id 2 for practical purposes, in a real world scenario, you would use a WHERE clause to update a specific user
    $sql = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 2;";
    $stmt = $pdo->prepare($sql);

    // Bind actual values to prevent SQL injection
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':pwd', $pwd, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    

    // Success message or further actions
    echo "User updated successfully!";

  } catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
  }

  exit(); // No need for additional exit inside catch block

} else {
  exit();
}

