<?php
// =============================
// 1. Show all data types using var_dump
// =============================
echo "<h2>PHP Data Types</h2>";

$intVar = 10;
$floatVar = 10.5;
$stringVar = "Hello, PHP!";
$boolVar = true;
$arrayVar = array("Apple", "Banana", "Cherry");
$nullVar = null;

echo "<pre>";
var_dump($intVar);
var_dump($floatVar);
var_dump($stringVar);
var_dump($boolVar);
var_dump($arrayVar);
var_dump($nullVar);
echo "</pre>";

// =============================
// 2. Define 2 constants
// =============================
define("MY_NAME", "Suresh Yerolkar");
define("VERSION", "1.0");

// =============================
// 4 & 5. Date & Time Formatting + Conversion
// =============================
$currentDateTime = date("Y-m-d H:i:s"); // formatted date time
$formattedDate = date("m/d/Y"); // mm/dd/yyyy format
$convertedDate = date("Y-m-d", strtotime($formattedDate)); // convert format
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Demo</title>
</head>
<body>

    <!-- =============================
         3. Mixing PHP inside HTML
    ============================== -->
    <h1>Welcome to <?php echo MY_NAME; ?></h1>
    <p>Version: <?php echo VERSION; ?></p>

    <h2>Date & Time</h2>
    <p>Current Date & Time: <?php echo $currentDateTime; ?></p>
    <p>Formatted Date (MM/DD/YYYY): <?php echo $formattedDate; ?></p>
    <p>Converted Date (YYYY-MM-DD): <?php echo $convertedDate; ?></p>

</body>
</html>