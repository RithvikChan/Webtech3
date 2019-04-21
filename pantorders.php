<!DOCTYPE html>
<html>

<head >
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
$waist = $_POST['waist'];
$inseam =$_POST['inseam'];
$date = $_POST['date'];
$price=$_POST['price'];
if($stmt = mysqli_prepare($conn, "INSERT INTO mylpssorders(name,length,waist,inseam,date,price) VALUES (?, ?, ?,?,?,?)")) {
mysqli_stmt_bind_param($stmt, 'sdddsd',$myname,$length,$waist,$inseam,$date,$price);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
}

$conn->close();
?>
	
</head>
<body onload="window.location.href='new-1.html'" >
</body>
</html>