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

// sql to delete a record
$sql = "DELETE FROM mylpssorders where name='suhail'";

if ($conn->query($sql) === TRUE) {
    echo "Records deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
