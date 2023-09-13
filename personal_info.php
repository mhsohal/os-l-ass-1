<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wraper">
<h1>Task 1: Personal Information Page</h1>
<div class="footer">
<?php
// Variables for personal information
$name = "Mahmudul Hasan Sohel";
$age = 26;
$country = "Bangladesh";
$introduction = "Hello, I'm $name. I'm $age years old and I'm from $country.";

// Show personal information
echo "<h5>Name: " . $name . "</h5>";
echo "<h5>Age: " . $age . "</h5>";
echo "<h5>Country: " . $country . "</h5>";
echo "<h5>Introduction: " . $introduction."</h5>";
?>
</div>
</div>
</body>
</html>
