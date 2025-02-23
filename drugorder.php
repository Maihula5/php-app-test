<?php 

require('cons.php');
require('patientvalidate.php'); 
      
if(isset($_POST['orderdrug'])){
	$var1 ='';
      $var1 = $_SESSION['id'] ;
    $name = $_POST['name'];
	$quantity= $_POST['qty'];
	$address = $_POST['address'];
	$todayDate = date("Y-m-d H:i:s");

	
	
$sql = "INSERT INTO `orders` (`id`, `drug_name`, `quantity`, `address`, `patient`, `date`) VALUES (NULL, '$name', '$quantity', '$address', '$var1', '$todayDate')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('Drug Ordered Successfully')</script>";
	echo "<script>window.open('patientpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
    //ader("Location:adminpanel.php");
    
}
}

?>

<!DOCTYPE html>
<html>
<head>

    <!--making page response

	--><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body style="background:url('images/rak.jpg'); no-repeat background-size:cover; opacity: 2 ; ">

<div class="container" style="width: 400px; margin-top:30px";>
	<div class="card">
       <img src="images/pm3.jpg" class="card-img-top" height="200px" >
		<div class="card-body">
<center><h3> RAK Pharmacy Drug Order</h3></center><br>
	<form class="form-group"  method="POST">
		<label>Drug Name</label>
		<input type="text" name="name" class="form-control" placeholder="Enter drug name" required="">

		<label>Quantity</label>
		<input type="number" name="qty" class="form-control" placeholder="Enter Order Quantity" required="" max="100">

		<label>Delivery Address</label>
		<input type="text" name="address" class="form-control" placeholder="Enter your Address" required=""><BR>
		
		<center>
		<input type="submit" name="orderdrug"  class="btn btn-primary" value="Order Drug">	
		</center>
		
	</form>
</div>
</div>
</div>
 <footer id="footer" class="midnight-blue">
        <div class="container" style="width: 500px; margin-top: 150px  ">
            <div class="row">
                <div class="col-sm-12">
                    <center> Medical Appointment System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>