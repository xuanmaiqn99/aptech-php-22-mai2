<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "aptech_php_22_08";
    // Create connection
    $connect = mysqli_connect($serverName, $userName, $password, $databaseName);
    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //create table
    $sql = "CREATE TABLE aptech_php_22_08.users(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255),
        email VARCHAR(255) NOT NULL
    )";
    if(mysqli_query($connect, $sql)){
        echo "Table created successfully";
    }else {
        echo "Error creating table: ". mysqli_error($connect);
    }
    mysqli_close($connect);
?>