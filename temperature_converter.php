<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wraper">
<h1>Task 2: Temperature Converter</h1>

<form method="post">
      <label for="temp">Temperature:</label> <input type="text" id="temp" name="temperature" required />
      <label for="">Convert to:</label>
      <div class="d-flex justify-content-center align-items-center g-10">
        <div class="d-flex align-items-center g-5">
            <input id="fahrenheit" type="radio" name="conversion" value="celsius_to_fahrenheit" required /> <label for="fahrenheit">Fahrenheit</label></div>
        <div class="d-flex align-items-center g-5">
            <input id="celsius" type="radio" name="conversion" value="fahrenheit_to_celsius" required /> <label for="celsius">Celsius</label></div>
      </div>
      <input type="submit" value="Convert" />
    </form>
<div class="footer">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $conversion = $_POST["conversion"];

    if ($conversion == "celsius_to_fahrenheit") {
        $converted_temperature = ($temperature * 9/5) + 32;
        echo "<p>{$temperature}°C is {$converted_temperature}°F</p>";
    } elseif ($conversion == "fahrenheit_to_celsius") {
        $converted_temperature = ($temperature - 32) * 5/9;
        echo "<p>{$temperature}°F is {$converted_temperature}°C</p>";
    }
}
?>
</div>
</div>
</body>
</html>
