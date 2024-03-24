<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <input type="number" name="num1" placeholder="Number 1" required>  <select name="operator">
    <option value="add">Add</option>
    <option value="subtract">Subtract</option>
    <option value="multiply">Multiply</option>
    <option value="divide">Divide</option>
  </select>
  <input type="number" name="num2" placeholder="Number 2" required>  <button type="submit" name="submit">Calculate</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $result = 0;
  $errors = false;

  // Sanitize and validate input (combined and improved)
  $num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_FLOAT); // Sanitize and prevent type juggling
  $num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_FLOAT);
  $operator = htmlspecialchars($_POST['operator']);

  if (empty($num1) || empty($num2) || empty($operator)) {
    echo "<p style='color: red;'>Please fill in all fields.</p>";
    $errors = true;
  } else if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "<p style='color: red;'>Please enter valid numbers.</p>";
    $errors = true;
  } else if ($operator === 'divide' && $num2 === 0) {
    echo "<p style='color: red;'>Division by zero is not allowed.</p>";
    $errors = true;
  } 

  if (!$errors) {
    switch ($operator) {
      case 'add':
        $result = $num1 + $num2;
        break;
      case 'subtract':
        $result = $num1 - $num2;
        break;
      case 'multiply':
        $result = $num1 * $num2;
        break;
      case 'divide':
        $result = $num1 / $num2;
        break;
      default:
        $result = "Invalid operator";
        break;
    }
    echo "<p style='color: green;'>The result is: $result</p>";
  }
}
?>

</body>
</html>