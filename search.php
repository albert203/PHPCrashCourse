<?php
declare(strict_types=1);

// Include the database connection file only once
require_once 'includes/dbh.inc.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $usersearch = trim($_POST['usersearch']); //trim() removes whitespace from the beginning and end of the string

  try {
    // Prepare the SQL statement with placeholders
    $sql = "SELECT * FROM comments WHERE username = :usersearch;";
    $stmt = $pdo->prepare($sql);

    // Bind actual values to prevent SQL injection
    $stmt->bindParam(':usersearch', $usersearch, PDO::PARAM_STR);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
  }
} else {
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Search Results:</h3>
<?php
  if (empty($results)) {
    echo "<p>No results found!</p>";
  } else {  // Corrected placement of closing curly brace
?>
<table>
  <tr>
    <th>Username</th>
    <th>Comment</th>
  </tr>
  <?php foreach ($results as $result): ?>
    <tr>
      <td><?php echo htmlspecialchars($result['username']); ?></td>
      <td><?php echo htmlspecialchars($result['comment_text']); ?></td>
    </tr>
  <?php endforeach; ?>
</table>
<?php  // Closing tag for the else block
} ?>

   
    
</body>
</html>
<?php
