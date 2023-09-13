<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wraper">
<h1>Task 4: Even or Odd Checker</h1>

<form method="post">
    <label for=""> Enter a number: </label><input type="text" name="number" required>
    <input type="submit" value="Check">
</form>
<div class="footer">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if ($number % 2 == 0) {
        echo "<p>{$number} is even.</p>";
    } else {
        echo "<p>{$number} is odd.</p>";
    }
}
?>
</div>
</div>
</body>
</html>
