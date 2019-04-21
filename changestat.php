
<html>
<head>
<title>Change Order Status</title>
<link rel="stylesheet" href="materialize/css/materialize.min.css">

<nav>
<ul id="navul">
	<li id="navli"><a href="new-1.html" id="nava">Home</a></li>
	<li id="navli"><a href="viewdetails.php" id="nava">Track Order</a></li>
	<li id="navli"><a href="retPage.php" id="nava">View Details</a></li>
	<li id="navli"><a href="changestat.php" id="nava">Delivery Status</a></li>
	<li id="navli"><a href="price.php" id="nava">Sales</a></li>
</ul>
</nav>
<style>
.myclass{
			padding-top: 10%;
			margin: 0px;
			width: 75%;
			color: black;
			font-size: 20px	}
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
</head>
<body>

<div class="row" style="margin-top: 1.5%"> 
<div  style="background-color: #bdbdbd; border-radius: 2.5%" >
<div class="col s2">
</div>
<div class="col s8" style="background-color: #bdbdbd; border-radius: 2.5%" >	
		<center>
		<div class="myclass">
		
		<form name="chnstat" action="change_status.php" method="POST" >
			
			<span class="span"><b>Change Order Status</b><span>
			<br>
			<span>Enter Order No:</span>
			<input type="number" id="ono" name="c_order_no" style="width:20%">
		</input> 

		<script type="text/javascript">
	document.getElementById("ono").value = localStorage.getItem("orderNo");
	document.cookie="orderno="+localStorage.getItem("orderNo");
	</script>
     <br>
	 <label>
        <input name="group1" type="radio" value="inprogress" checked />
        <span>IN PROGRESS</span>
      </label>
	  &nbsp |
      <label>
        <input name="group1" type="radio"value="cutting" />
        <span>CUTTING</span>
      </label>
      &nbsp |
	  <label>
       <input  name="group1" type="radio"  value="embroidery"/>
        <span>EMBROIDERY</span>
      </label>
      &nbsp |
	  <label>
        <input name="group1" type="radio" value="stitching" />
        <span>STITCHING  </span>
      </label>
      &nbsp |
	  <label>
        <input name="group1" type="radio" value="ready" />
        <span>READY  </span>
      </label>
	  &nbsp |
	  <label>
        <input name="group1" type="radio" value="delivered" />
        <span>DELIVERED  </span>
      </label>
	  <br>
	  <br>
  		<input type="submit" value="Change Status" class="btn waves-effect waves-light" name="changestat" >
			
			<br>
			</center>
		</form>	
		<form name="updstat" action="update_status.php" method="POST" >
			<center>
			<span class="span"><b>Update Order Delivery Details</b></span>
			<br>
			<span>Enter Order No:</span>
			<input type="number" name="d_order_no" style="width: 20%" id="ono1"> <span><font color="red" >*</font></span>
			<script type="text/javascript">
	document.getElementById("ono1").value = localStorage.getItem("orderNo");
	</script>
			<br>
			<span>Enter Actual Delivery Date:</span> <input type="date" name="adelivery_date" style="width: 20%">
			<span><font color="red">*</font></span>
			<br>
			<span>Select Payment Mode:</span>			 
			<label>
        <input name="group2" type="radio" value="cash" checked />
        <span>CASH</span>
      </label>
	  &nbsp |
      <label>
        <input name="group2" type="radio"value="card" />
        <span>CARD</span>
      </label>
      &nbsp |
	  <label>
       <input  name="group2" type="radio"  value="cheque"/>
        <span>CHEQUE</span>
      </label><span><font color="red">&nbsp*</font></span></p>			
			
			<span>Enter Amount Paid:</span> <input type="text" name="amount_paid"  style="width: 20%" value="<?php 
												
		//$sql = "SELECT MAX(ORDERNO) FROM theyukbauser";
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "yukbauser";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
	$ord=$_COOKIE["orderno"];
		$sql = "SELECT FINALAMOUNT FROM `theyukbauser` WHERE ORDERNO=$ord";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		echo $row['FINALAMOUNT'];
		?>  "> <span><font color="red">*</font></span>
			<br>
			<input type="submit" class="btn waves-effect waves-light" value="Update Details" name="update">
			<br>
			<br>			
		
	</center>
	</div>
	</form>		
</div>
<div class="col s2">
</div>
</body>
</html>

