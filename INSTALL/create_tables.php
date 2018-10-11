<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clines";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$tbl = "users";
$sql = "CREATE TABLE $tbl (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
user VARCHAR(10) NOT NULL,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table " . $tbl .  "created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
