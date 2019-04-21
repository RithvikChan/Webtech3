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
$sql = "CREATE TABLE `yukbauser`.`theyukbauser` ( `ORDER NO` INT NOT NULL AUTO_INCREMENT , `CUSTOMER NAME` VARCHAR NOT NULL , `PHONE NUMBER` INT(10) NOT NULL , `TOTAL AMOUNT` FLOAT NOT NULL , `ADVANCE` FLOAT NOT NULL , `FINAL TOTAL` FLOAT NOT NULL , `ORDER STATUS` VARCHAR NOT NULL , `AMOUNT PAID` FLOAT NOT NULL , `ORDER DATE` DATE NOT NULL , `DELIVERY DATE` DATE NOT NULL , `ACTUAL DELIVERY DATE` DATE NOT NULL , `PAYMENT TYPE` VARCHAR NOT NULL , `EMPLOYEE` VARCHAR NOT NULL , `COMMENTS` VARCHAR NOT NULL , PRIMARY KEY (`ORDER NO`), UNIQUE (`PHONE NUMBER`(10))) ENGINE = InnoDB";

if ($conn->query($sql) === TRUE) {
    echo "Table theusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>