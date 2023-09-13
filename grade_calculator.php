<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wraper">
<h1>Task 3: Grade Calculator</h1>

<form method="post">
    <label for=""> Test 1</label> <input type="text" name="test1" required>
    <label for=""> Test 2</label> <input type="text" name="test2" required>
    <label for=""> Test 3</label> <input type="text" name="test3" required>
    <input type="submit" value="Calculate Grade">
</form>
<div class="footer">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test1 = $_POST["test1"];
    $test2 = $_POST["test2"];
    $test3 = $_POST["test3"];

    // Calculate average
    $average = ($test1 + $test2 + $test3) / 3;

    // Determine letter grade
    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    echo "<p>Letter Grade: {$grade}</p>";
}
?>
</div>
</div>
</body>
</html>
