<?php
    // Parameters: host, username, password, database name
    $connect = mysqli_connect("localhost", "root", "", "learnwithomar");

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    session_start();
    
    // Set charset to avoid emoji/special character issues
    mysqli_set_charset($connect, "utf8mb4");
?>