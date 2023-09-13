<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="wraper">

<h1>Task 7: Simple Calculator</h1>

<form method="post">
    <label for="">Number 1:</label> <input type="number" name="number1" required>
    <label for="">Number 2:</label> <input type="number" name="number2" required>
    <label for="">Operation:</label>
    <select name="operation" required>
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select>
    <br><br>
    <input type="submit" value="Calculate">
</form>
<div class="footer">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case 'addition':
            $result = $number1 + $number2;
            break;
        case 'subtraction':
            $result = $number1 - $number2;
            break;
        case 'multiplication':
            $result = $number1 * $number2;
            break;
        case 'division':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    
    echo "<p>The result is: {$result}</p>";
}
    ?>
</div>
</div>
</body>
</html>