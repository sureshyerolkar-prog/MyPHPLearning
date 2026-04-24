<?php
    // Method 1: Using define()
   
  echo "<br>";


    define("SITE_NAME", "Karanataka");
    define("MAX_USERS", 100);

    // Method 2: Using const (used inside classes later)
    const VERSION = "1.0";

    echo SITE_NAME;    // Prints: MyLearningApp
    echo "<br>";
    echo MAX_USERS;    // Prints: 100
    echo "<br>";
    echo VERSION;      // Prints: 1.0
?>