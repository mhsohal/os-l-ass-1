<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wraper">
<h1 class="title">Task 5: Weather Report</h1>

<form method="post">
    <label for="">Enter temperature:</label>
    <input type="text" name="temperature" required>
    <input type="submit" value="Check Weather">
</form>

<div class="footer">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];

    if ($temperature <= 0) {
        $message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        $message = "It's cool.";
    } elseif ($temperature > 15) {
        $message = "It's warm.";
    } else {
        $message = "Invalid temperature.";
    }

    
    echo "<p>{$message}</p>";
}
    ?>
</div>
</div>

</body>
</html>
