<!DOCTYPE html>
<html>

<head  >
	<title>create table</title>

	
<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "Users";
// Create connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $dbname, 3306);

$myname = $_POST['name'];
$length = $_POST['length'];
$chest = $_POST['chest'];
$shoulder =$_POST['shoulder'];
$sleeve = $_POST['sleeve'];
$price=$_POST['price'];
$date=$_POST['date'];

if($stmt = mysqli_prepare($conn, "INSERT INTO mylpssorders(name,length,chest,shoulder,sleeve,date,price) VALUES (?, ?, ?,?,?,?,?)")) {
mysqli_stmt_bind_param($stmt, 'sddddsd',$myname,$length,$chest,$shoulder,$sleeve,$date,$price);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
}

$conn->close();
?>
	
</head>
<body onload="window.location.href='new-1.html'" >
</html>