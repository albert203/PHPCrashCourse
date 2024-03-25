<?php
declare(strict_types=1);

// Include the database connection file only once
require_once 'dbh.inc.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['username'];
  $pwd = $_POST['pwd']; // Assuming password is stored securely

  try {
    // Prepare the SQL statement with placeholders
    $sql = "DELETE FROM users WHERE username = :username AND pwd = :pwd";
    $stmt = $pdo->prepare($sql);

    // Bind actual values to prevent SQL injection
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':pwd', $pwd, PDO::PARAM_STR);
    $stmt->execute();
    

    // Success message or further actions
    echo "User deleted successfully!";

  } catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
  }

  exit(); // No need for additional exit inside catch block

} else {
  exit();
}

