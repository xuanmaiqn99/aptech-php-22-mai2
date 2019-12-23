<?php
echo "<a href=\"./\">BACK</a>";
/* 3. --- CREATE TABLE ---
 *
 * Using MySQLi
 *
 */
echo "<h1>3. CREATE TABLE</h1>";
/*
 * EXERCISE 1 : Create table User.
 *
 */
/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();
$sql = "CREATE TABLE namnh_news.nnUser (
uId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
uLastName varchar(255),
uFirstName varchar(255),
uEmail varchar(255) NOT NULL UNIQUE,
uRole int NOT NULL DEFAULT 2,
uState int NOT NULL DEFAULT 1,
uCreatedDate datetime NOT NULL DEFAULT NOW(),
uModifiedDate datetime
)";
if ($conn->query($sql) === true) {
echo "Table nnUser created successfully";
} else {
echo "Error creating table : " . $conn->error;
}
$conn->close();
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "myproject";
// Create connection
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
//create table
$sql = "CREATE TABLE myproject.users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(30) NOT NULL
)";
if(mysqli_query($connect, $sql)){
    echo "Table created successfully";
}else {
    echo "Error creating table: ". mysqli_error($connect);
}
mysqli_close($connect);
?>