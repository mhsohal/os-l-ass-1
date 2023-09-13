<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wraper">
<h1>Task 6: Comparison Tool</h1>

<form method="post">
    Number 1: <input type="text" name="number1" required>
    <br><br>
    Number 2: <input type="text" name="number2" required>
    <br><br>
    <input type="submit" value="Compare">
</form>

<div class="footer">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $larger_number = ($number1 > $number2) ? $number1 : $number2;

    
    echo "<p>The larger number is: {$larger_number}</p>";
}
    ?>
</div>
</div>
</body>
</html>
