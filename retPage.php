<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" href="materialize/css/materialize.min.css">
	<style type="text/css">
		.abcd{
			padding-top: 10%;
			margin: 0px;
			width: 75%;
			color: black;
			font-size: 20px
		}
		body{
			background-image: url("wall1.jpg");
		}
		input{
			width: 25%;
		}
		span{
			color: black;
			font-size: 20px;
		}
		
	</style>
<nav>
<ul id="navul">
	<li id="navli"><a href="new-1.html" id="nava">Home</a></li>
	<li id="navli"><a href="viewdetails.php" id="nava">View Details</a></li>
	<li id="navli"><a href="retPage.php" id="nava">Search Order</a></li>
	<li id="navli"><a href="changestat.php" id="nava">Delivery Status</a></li>
	<li id="navli"><a href="price.php" id="nava">Sales</a></li>
</ul>
</nav>
</head>
<script type="text/javascript">
function func(){
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'yukbauser';

//post variables 

$o1 = $_POST['o1'];
$o2 = $_POST['o2'];
$od1 = $_POST['od1'];
$od2 = $_POST['od2'];
$dd1 = $_POST['dd1'];
$dd2 = $_POST['dd2'];
$cname = $_POST['cname'];
$cnum = $_POST['cnum'];
$mail = $_POST['mail'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3306);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if(!empty($_POST['o1']))
{
	$sql1 = "SELECT * FROM `theyukbauser` WHERE ORDERNO >= $o1 AND ORDERNO <=$o2";
}

if(!empty($_POST['od1']))
{
	$sql1 = "SELECT * FROM `theyukbauser` WHERE ORDERDATE >= $od1 AND ORDERDATE <=$od2";
}

if(!empty($_POST['dd1']))
{
	$sql1 = "SELECT * FROM `theyukbauser` WHERE DELIVERYDATE >= $dd1 AND DELIVERYDATE <=$dd2";
}

if(!empty($_POST['cname']))
{
	$sql1 = "SELECT * FROM `theyukbauser` WHERE CUSTOMERNAME IS $cname";
}

if(!empty($_POST['cnum']))
{
	$sql1 = "SELECT * FROM `theyukbauser` WHERE PHONENUMBER = $cnum";
}

if(!empty($_POST['mail']))
{
	$sql1 = "SELECT * FROM `theyukbauser` WHERE EMAIL IS $mail";
}


echo gettype($o1);
echo $sql1;
$sql = $sql1;



$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
				echo "<td>".$row['CUSTOMERNAME']."</td>";
				echo "<td>".$row['PHONENUMBER']."</td>";
				echo "<td>".$row['EMAIL']."</td>";
               echo "<td>".$row['ADDRESS']."</td>";
              echo "<td>".$row['TOTALAMOUNT']."</td>";
			   echo "<td>".$row['ADVANCE']."</td>";
			   echo "<td>".$row['FINALAMOUNT']."</td>";
			   echo "<td>".$row['ORDERDATE']."</td>";
			   echo "<td>".$row['DELIVERYDATE']."</td>";
			   echo "<td>".$row['ACTUALDELIVERYDATE']."</td>";
			   echo "<td>".$row['COMMENTS']."</td>";
			   echo "</tr>"; 
     }
}    
 else {
    echo "0 results";
}	

$conn->close();

?>
}
</script>
<body>
<div class="row" style="margin-top: 1.5%"> 
<div class="col s2">
</div>
<div class="col s8" style="background-color: #bdbdbd; border-radius: 2.5%" >
	<form action="taborders.php" method="POST" target="myframe">
		<center>
		<div class="abcd">
		OrderNo  <span id="from">FROM </span> <input type="number" class="validate" name="o1" min="1" style="width: 20%"> <span id="from">TO </span> <input type="number" name="o2" min="1" style="width: 20%">
		<br>
	
		OrderDate <span id="from">FROM </span> <input style="width: 20%" type="date" class="validate" name="od1" min="1"> <span id="from">TO </span> <input type="date" style="width: 20%" name="od2" min="1"><br>
		DeliveryDate <span id="from">FROM </span> <input style="width: 20%;" type="date" class="validate" name="dd1" min="1"> <span id="from">TO </span> <input type="date" name="dd2" min="1" style="width: 20%;"><br>
		CustomerName  <input style="width: 20%" type="text" class="validate" name="cname" placeholder="EnterName"><br>
		CustomerNumber  <input type="number" style="width: 20%;" class="validate" name="cnum" min="1000000000" max="9999999999"> <br>
		Email ID  <input type="email" style="width: 25%;" class="validate" name="mail"><br>
		<input onclick="func()" type="submit" class="btn waves-effect waves-light" name="submit" value="SUBMIT BUTTON" >
		
		</div>
		</center>
	</form>
	<br>
</div>
<div class="col s2">
</div>
</div>
	<br>
	<br>
<iframe name="myframe" style="height:1000px; width:1500px" id="fr1">
	<table width="400"  cellpadding="2" cellspacing='1'>

           <tr bgcolor="#2ECCFA">
					<th>Name</th>
                     <th>Phno</th>
                     <th>Email</th>
					 <th>Address</th>
					 <th>Total</th>
					 <th>Advance</th>
					 <th>To be Paid</th>
					 <th>Order Date</th>
					 <th>Actual Delivery Date</th>
					 <th>Delivery Date</th>
					 <th>Comments</th>
           </tr>
     </table>
</frame>
</body>
</html>