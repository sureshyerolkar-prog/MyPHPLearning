<?php
    
    //echo Most common, prints text
    echo "This is the example of ECHO";           // Prints: Hello, World!
    echo "<br>";                    // HTML line break

    //print Like echo, but slower (rarely used)
    print "This is the example of PRINT";      // Also prints text
    echo "<br>";
    
    //print_r Shows arrays in readable format

    $data = ['a', 'b', 'c'];
    print_r($data). "Example of print_r";          // Prints: Array ( [0] => a [1] => b [2] => c )
    echo "<br>";
 
    //var_dump Shows value + data type (great for debugging)

    $name = "Arjun";
    var_dump($name. "Example of var_dump");                // Prints: string(5) "Arjun"
    echo "<br>";

    $age = 25;
    var_dump($age. "Example of var_dump");                 // Prints: int(25)
?>