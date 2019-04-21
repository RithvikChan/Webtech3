<!DOCTYPE html>
<html>
<body>

<div>
    <Select type="text"  style="width:220px; height: 30px;">
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
       
               echo '<option>'.$row['name'].'</option>';
         
     }
}    
 else {
    echo "0 results";
}


       ?>
    </select>
</div>

</body>
</html>
