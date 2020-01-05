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
$sql = "INSERT INTO aptech_php_22_08.users (name, email)
VALUES ('mai','xuanmai@gmail.com'),
('hong','hong@gmail.com'), ('nam','nam@gmail.com'), 
('nu','nu@gmail.com'), ('be','bede@gmail.com')";
if(mysqli_query($connect, $sql)){
    echo "Table created successfully";
}else {
    echo "Error creating table: ". mysqli_error($connect);
}
mysqli_close($connect);
?>