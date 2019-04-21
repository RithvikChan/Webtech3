
<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="vastr.css">

        <title> Fetching data </title>
<nav  class="s3" >
<ul id="navul" class="s3" style="height:66px">
  <li id="navli"><a href="new-1.html" id="nava">Home</a></li>
  <li id="navli"><a href="about_us.html" id="nava">About</a></li>
	  <li id="navli"><a href="#contact" id="nava"><img style="height:40px" src="fb.png"></a></li>
	  <li id="navli"><a href="#contact" id="nava"><img style="height:40px" src="inst.png"></a></li>
</ul>

</nav>
    </head>

    <body style="background-image:url('http://static1.squarespace.com/static/59c2e50732601e851ccdaf2c/59c3bb2d49fc2bba91f64c83/59c53e2cf14aa10585d2edd6/1534359256225/Tailor.jpg?format=1000w');background-repeat: repeat;">
	<h1 class="s3" style="font-size:50px"> <center>EXISTING USERS</center></h1>
        <table width="400" border="2" cellpadding="2" cellspacing='1' align="center">

           <tr bgcolor="#2ECCFA">
					<th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phno</th>
           </tr>

<!-- We use while loop to fetch data and display rows of date on html table -->
<script>
function store(cnt)
{
	
	var x= document.getElementsByTagName('a')[cnt].innerHTML;
	localStorage.setItem('clickedname',JSON.stringify(x));
	var y= document.getElementsByTagName('div')[cnt].innerHTML;
	localStorage.setItem('clickedid',JSON.stringify(y));

	//var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "Users"
});
alert("done");
con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO pssorders (name, id) VALUES (x,y)";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});
}
function storeid(cnt)
{
	
	var x= document.getElementsByTagName('div')[cnt].innerHTML;
	alert(x);
	localStorage.setItem('clickedid',JSON.stringify(x));
}
</script>
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

$sql = "SELECT id,name,email,phno FROM theusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$cnt=0;
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
		 $id=$row['id'];
				echo "<td>"."<div>".$row['id']."</div>"."</td>";
               echo "<td>"."<a  onclick='store($cnt)' href='orders.html'>".$row['name']."</a>"."</td>";
               echo "<td>".$row['email']."</td>";
               echo "<td>".$row['phno']."</td>";
           echo "</tr>";
		   $cnt+=1;
     }
}    
 else {
    echo "0 results";
}

$conn->close();
?>

           

        </table>

   </body>

</html>