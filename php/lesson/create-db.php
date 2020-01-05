<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    // Create connection
    $connect = mysqli_connect($serverName, $userName, $password);
    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "CREATE DATABASE aptech_php_22_08";
    if (mysqli_query($connect, $sql)){
        echo "Database created successfully";
    }else {
        echo "Error creating database: " .mysqli_error($connect);
    }
    mysqli_close($connect);
?>