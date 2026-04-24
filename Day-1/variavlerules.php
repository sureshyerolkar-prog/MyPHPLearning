
<?php
echo "Rules for naming variables in PHP:<br>";

echo "Always starts with $ sign<br>";
echo "Can contain letters, numbers, underscores<br>";
echo "Cannot start with a number<br>";
echo "Case-sensitive (\$Name ≠ \$name) <br>";


    $name    = "Riya";         // String (text)
    $age     = 22;             // Integer (whole number)
    $marks   = 89.5;           // Float (decimal number)
    $isPassed = true;          // Boolean (true or false)

    echo $name;                // Prints: Riya
    echo "<br>";
    echo "Age is: " . $age;    // . joins two strings together


?>