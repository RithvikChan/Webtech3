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
$sql = "CREATE TABLE pantorders (
id INT(250) UNSIGNED  PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
length FLOAT,
waist FLOAT,
inseam FLOAT,
date DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table theusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>