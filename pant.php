<html>
<head>
<link rel="stylesheet" type="text/css" href="vastr.css">
<title>Pant</title>
<nav>
<ul id="navul" class="s3">
  <li id="navli"><a  href="new-1.html" id="nava">Home</a></li>

  <li id="navli"><a href="about_us.html" id="nava">About</a></li>
	  <li id="navli"><a href="#contact" id="nava"><img style="height:5%" src="fb.png"></a></li>
	  <li id="navli"><a href="#contact" id="nava"><img style="height:5%" src="inst.png"></a></li>
	  </ul>

</nav>
</head>
<body  style="background-image:url('shirtpant.jpg')" class="s3">
<h1 class="s3" style="font-size:50px"><center>PANT</center></h1>
<style>

*{margin:0;box-sizing:border-box;}
html,body{height:100%;font:14px/1.4 sans-serif;}
input, textarea{font:14px/1.4 sans-serif;}
form {
    margin: 20px auto;
    width: 420px;
}
.form-row {
    padding: 5px 10px;
}
label {
    display: block;
    margin: 3px 0;
}
.form-row input {
    padding: 3px 1px;
    width: 100%;
}
.input-group{
  display: table;
  border-collapse: collapse;
  width:100%;
}
.input-group > div{
  display: table-cell;
  border: 1px solid #ddd;
  vertical-align: middle;  /* needed for Safari */
}
.input-group-icon{
  background:#eee;
  color: #777;
  padding: 5 10px;
}
.input-group-area{
  width:100%;
}
.input-group input{
  border: 0;
  display: block;
  width: 100%;
  padding: 8px;
}
</style>

      
    

	
<form  action="pantorders.php" method="POST" >
	<div class="form-row">
	Name
	</div>
	<select type="text"   name="name" class="s3" >
       <?php
	   $host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Users";
        $con = mysqli_init();
		mysqli_real_connect($con, $host, $username, $password, $dbname, 3306);

            if($con->connect_errno) {
                // error reporting here
            }
               
   
$sql = "SELECT id,name FROM theusers";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
       
               echo "<option class='s3'>".$row['name'].'</option>';
         
     }
}   
?>
</select>
<br>
	<div class="input-group" class="s3">
	Length
	</div>
	<input type="number" name ="length" class="s3" style="height:5%;width:60%">
	<span class="input-group-icon">cm</span>
	<br>
	<div class="input-group">
	Waist
	</div>
	<input type="number" name ="waist" class="s3" style="height:5%;width:60%">
<span class="input-group-icon">cm</span>
	<br>
	<div class="input-group">
	InSeam
	</div>
	<input type="number" name ="inseam" class="s3" style="height:5%;width:60%">
	<span class="input-group-icon">cm</span>
	<br>
	<div class="input-group">
	Delivery Date
	</div>
	<input type = "date" name="date" class="s3"style="height:5%;width:70%">
	<br>
	<div class="input-group">
	Price
	</div>
	<span class="input-group-icon">₹</span>
	<input type = "number" name="price" class="s3" style="height:5%;width:60%">
	<br>
	<center>
	<input type = "submit" value = "Submit Form" class="s3" onclick="window.location.href='new-1.html'" style="margin-left:-80px">
	</center>
	</form>
</body>
</html>