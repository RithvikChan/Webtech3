<html>
<head>
<style>
body
{

	background-color: white;
	background-image: url("wall1.jpg");
	background-size: 100% 100%;
	color:black;
	height: 100%
}
input{
	
	font-size:15px;
	color:black;
	
}
label id="blacker"{
	color:black;
}
#blacker{
	color: black;
	font-size:  20px;
}

.clear
{
	width : 35%;
	color:black;
}
.clear2
{
	width: 70%;
}

.contain
{
	color:black;
	margin-left: 15%;
	margin-right: 15%;
	border-radius: 3%;



}

</style>
	
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="uploadscript.js"></script>
<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
<title>User</title>
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
<body >
<div class="row" style="margin-top: 1.5%"> 
<div class="col s2">
</div>
<div class="col s8" style="background-color: #bdbdbd; border-radius: 2%">
<center>
<form  enctype="multipart/form-data" name="order_form" action="yukbasql.php"  method="POST" >


							 
<div class="clear">
	<br>
	<label id="blacker">Order No : </label id="blacker">
		<div class="form-text">
		<input type="text" name="order_number" id="order_number"  style="color: green" value="<?php 
												
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

		$sql = "SELECT ORDERNO FROM `theyukbauser`";
		$result = $conn->query($sql);
		$len=$result->num_rows;
		$highest_id=$result->num_rows +1;
		echo("$highest_id");
		?>  " >
		</div>
		</div>						
	
		<div class="clear">	
			<label id="blacker">Phone number : </label id="blacker">
				<input type="text" name="phone_number" class='validate' >
				<span class="error"></span>
		</div> 
	 
		<div class="clear">
			<label id="blacker" >Full name : </label id="blacker">
			<div class="form-text">
				<input type="text" name="name" >
			</div> 
		</div>

		<div class="clear">
			<label id="blacker">Email address : </label id="blacker">
				<input type="email" name="email" placeholder="myname@example.com" >
		</div>
		

		<div class="clear">
				<label id="blacker">Date of Order : </label id="blacker">  
						<input type="date" name="date_of_order" value="<?php echo date('Y-m-d'); ?>">
								
		</div>

		
		<div class="clear">
			<label id="blacker">Address : </label id="blacker">
				<textarea name="address"></textarea>
		</div> 

<!-- //Items list -->	

	<label id="blacker">Items: </label id="blacker">

	<div class="clear2">	
	<table class="order-list">
		<thead>
			<tr><td>Item</td><td>Price</td><td>Quantity</td><td>Amount</td></tr>
		</thead>
		
		<tbody>
			<tr>
				<div class="clear">
				<td><input type="text" class="validate" name="item_name" /></td>
				</div>
				<div class="clear">
				<td><input type="text" name="item_rate" class="validate" /></td>
				</div>
				<td><input type="text" name="item_quantity" class="validate"/></td>
				<td><input type="text" name="item_amount" readonly="readonly" class="validate"/></td>
				<td><a class="deleteRow"> x </a></td>
				
			</tr>
		</tbody>
		
		<tfoot>
			<tr>
				<td colspan="5" style="text-align: center;">
					<input type="button" id="addrow" value="Add Product" class=" btn waves-effect waves-light"/>
				</td>
			</tr>
			
			 
		</tfoot>
	</table>
	</div>



		<div class="clear">
			<label id="blacker">Total Amount : </label id="blacker">
			<div class="form-text">
				<input type="text" id="total_amount" name="sub_total" class="validate" oninput="calculate()">
			</div> 
		</div>
		<div class="clear"></div>

		<!--changed from "discount" to "advance paid" -->
		<div class="clear">
			<label id="blacker">Advance Paid : </label id="blacker">
			<div class="form-text">
				<input type="text" id="advance_paid" name="discount" class="validate" oninput="calculate()">
			</div> 
		</div>



		<div class="clear">
			<label id="blacker">Total Amount to be paid : </label id="blacker">
			<div class="form-text">
				<input type="text" id="amount_to_be_paid" class="validate" name="total_amount_to_be_paid">
			</div> 
		</div>
		
		<div class="clear"></div>
		
		<div class="clear">
				<label id="blacker">Date of Delivery : </label id="blacker"> 
				<div class="form-text"> 
						<input type="date" name="date_of_delivery" class="validate">		
				</div>					
		</div>
		
		<div class="clear"></div>

		 

		<div class="clear"></div>
		
		<div class="clear text-area-wthree">
			<label id="blacker">Comments : </label id="blacker">
			<div class="form-text">
				<textarea name="comments" placeholder="Add Your Comments Here !" class="validate" ></textarea>
			</div> 
		</div> 

		<div class="clear"></div>
	
		<br>
		<div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>
           
        <input type="button" id="add_more" class="upload" value="Add More Files"/>
 
		<br>
					

		<input class="btn waves-effect waves-light" type = "submit" value = "Submit"  style=" width:15%;">
		<input type="reset" name="clear" value="Clear" onClick="clearField();" class="btn waves-effect waves-light" style="width:15%;">
		
		<br>
		<br>
		<div class="link" align="center">
		<button class="btn waves-effect waves-light red lighten-2">
		<a href="print.php" target="_blank" class="link" autofocus style="color: white;">Print Bill</a>
		</button>
		</div>
			
</form>
		
</center>
</div>
<div class="col s2">
</div>
</div>
</body>
<script>
function myFunction() {
	var phone1 = document.getElementById("phone123").value;
	//alert(phone1);
	
   window.open("https://www.newlookboutique.com/web/measurement.php?phone="+phone1, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=500,height=800");
	    //window.open("http://localhost/YUKBA/web/measurement.php?phone="+phone1, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=500,height=800");

}

function calculate() {
	var x = document.getElementById('total_amount').value;	
	var y = document.getElementById('advance_paid').value;
	var amount_to_be_paid = document.getElementById('amount_to_be_paid');	
	var myResult = x - y;
	amount_to_be_paid.value = myResult;
}


$(document).ready(function () {
    var counter = 1;
    
    $('#addrow').on("click", function () {
        counter++;
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td><input type="text" name="item_name' + counter + '"/></td>';
        cols += '<td><input type="text" name="item_rate' + counter + '"/></td>';
        cols += '<td><input type="text" name="item_quantity' + counter + '"/></td>';
        cols += '<td><input type="text" name="item_amount' + counter + '" readonly="readonly"/></td>';
        cols += '<td><a class="deleteRow"> x </a></td>';
        newRow.append(cols);
        
        $("table.order-list").append(newRow);
    });
    
    $("table.order-list").on("change", 'input[name^="item_rate"], input[name^="item_quantity"]', function (event) {
        calculateRow($(this).closest("tr"));
        calculateGrandTotal();
    });
    
    $("table.order-list").on("click", "a.deleteRow", function (event) {
        $(this).closest("tr").remove();
        calculateGrandTotal();
    });


  $('#save').click(function(){
		
  var item_name = [];  
  var item_rate = [];
  var item_quantity = [];
  var item_amount = [];
  
  var order_num = ($('input[name^="order_number"]').val());

  
  $('input[name^="item_name"]').each(function(){
   item_name.push($(this).val());
  });
  
  $('input[name^="item_rate"]').each(function(){
   item_rate.push($(this).val());
  });
  $('input[name^="item_quantity"]').each(function(){
   item_quantity.push($(this).val());
  });
  $('input[name^="item_amount"]').each(function(){
   item_amount.push($(this).val());
  });
  
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:{order_num:order_num, item_name:item_name, item_rate:item_rate, item_quantity:item_quantity, item_amount:item_amount},
   success:function(data){
    alert(data);
   }
  });
 });

function calculateRow(row) {
    var price = +row.find('input[name^="item_rate"]').val();
    var qty = +row.find('input[name^="item_quantity"]').val();
    row.find('input[name^="item_amount"]').val((price * qty).toFixed(2));
}
    
function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="item_amount"]').each(function () {
        grandTotal += +$(this).val();
    });
	$(document).find('input[name^="sub_total"]').val(grandTotal.toFixed(2));
    //$("#total_amount").text(grandTotal.toFixed(2));
}
});























function clearForm() {
if(document.getElementById) {
document.myForm.reset();
}
}
</script>

</html>