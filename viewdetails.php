<html>
<head>
	<title>View</title>
	<link rel="stylesheet" href="materialize/css/materialize.min.css">
	<style type="text/css">
		.abcd{
			padding-top: 10%;
			margin: 0px;
		}
body{
			background-image: url("wall1.jpg");
		}
	<style type="text/css">
			ul li {list-style: none; margin-bottom: 15px;}
			ul li img {display: block;}
			ul li span {display: block;}
	</style>

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
<body>
	

	<form action="viewdet.php" method="POST" target="myframe">
		<div class="abcd">
		<center>
		OrderNo  <span id="from">FROM </span> <input type="number" class="validate" name="o1" min="1" style="width: 10%"> 
		<input  type="submit" class="btn waves-effect waves-light" name="submit" value="SUBMIT BUTTON" >

	</center>
	</div>
	</form>
<iframe name="myframe" style="height:1000px; width:1500px" >
</frame>
</form>
</body>
</html>