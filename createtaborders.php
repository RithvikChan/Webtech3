<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE mylpssorders (
name VARCHAR(10),
length FLOAT,
waist FLOAT,
inseam FLOAT,
chest FLOAT,
shoulder FLOAT,
sleeve FLOAT,
price FLOAT,
date DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table theusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>