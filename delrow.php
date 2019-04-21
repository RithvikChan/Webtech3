<html>
<head>
<link rel="stylesheet" type="text/css" href="vastr.css">
<nav>
<ul id="navul" class="s3">
  <li id="navli"><a href="new-1.html" id="nava">Home</a></li>

  <li id="navli"><a href="about_us.html" id="nava">About</a></li>
	  <li id="navli"><a href="#contact" id="nava"><img style="height:5%" src="fb.png"></a></li>
	  <li id="navli"><a href="#contact" id="nava"><img style="height:5%" src="inst.png"></a></li>
	  </ul>
<br>
<br>
<br>

</nav>
</head>

    <body style="background-image:url('http://static1.squarespace.com/static/59c2e50732601e851ccdaf2c/59c3bb2d49fc2bba91f64c83/59c53e2cf14aa10585d2edd6/1534359256225/Tailor.jpg?format=1000w');background-repeat: repeat;">
<center>


<?php
    $conn = new mysqli("localhost","root","", "Users") 
    or die ('Cannot connect to db');
    $result = $conn->query("SELECT * from mylpssorders where completed=0 ORDER BY DATE");
?>
    <table border='1px solid black'>
        <tr bgcolor="#2ECCFA">
					<th>Name</th>
                     <th>Length</th>
                     <th>Waist</th>
					 <th>InSeam</th>
					 <th>Chest</th>
					 <th>Shoulder</th>
					 <th>Sleeve</th>
					 <th>Date</th>
					 <th>Price</th>
					 <th>Status</th>
           </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['length']; ?>
                </td>
                <td>
                    <?php echo $row['waist']; ?>
                </td>
                <td>
                    <?php echo $row['inseam']; ?>
                </td>
				<td>
                    <?php echo $row['chest']; ?>
                </td>
				<td>
                    <?php echo $row['shoulder']; ?>
                </td>
				<td>
                    <?php echo $row['sleeve']; ?>
                </td>
				<td>
                    <?php echo $row['date']; ?>
                </td>
				<td>
                    <?php echo $row['price']; ?>
                </td>
				
                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' style="display: inline;">
                        <input type='hidden' id='quoteid' name='quoteid' value="<?php echo $row['name']; ?>" />
						<input type='hidden' id='delquoteid' name='delquoteid' value="<?php echo $row['name']; ?>" />
                        <input type='submit' name='formDelete' id='formDelete' value='Completed' class="s3"/>
						<input type='submit' name='formDeleteat' id='formDeleteat' value='Delete' class="s3"/>
                    </form>
                </td>
		
            </tr>
            <?php
        }
        ?>
		
		
	
    </table>
	
	
		<?php
		if(isset($_POST['formDelete'])){
		if(isset($_POST['quoteid']) && !empty($_POST['quoteid'])){
    $conn = new mysqli("localhost","root","", "Users") 
    or die ('Cannot connect to db');
    $quoteid = $_POST['quoteid'];
	$delquoteid=$_POST['delquoteid'];
	$sql = "UPDATE mylpssorders SET completed = 1 WHERE name='$quoteid'";

if(mysqli_query($conn, $sql)){
    echo "<h1>Records were deleted successfully.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}
		}
		if(isset($_POST['formDeleteat'])){
if(isset($_POST['delquoteid']) && !empty($_POST['quoteid']))
{
	$conn = new mysqli("localhost","root","", "Users") 
    or die ('Cannot connect to db');
    $quoteid = $_POST['quoteid'];
	$delquoteid=$_POST['delquoteid'];
	$sql = "DELETE FROM mylpssorders WHERE name='$quoteid'";

if(mysqli_query($conn, $sql)){
    echo "<h1>Records were deleted successfully.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
		}
}
?>
</body>
</html>