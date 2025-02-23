<?php
//session_start();
require("doctorvalidate.php");
if (!isset($_SESSION['loggedin'])){ 
	//echo "logged out";
	header('Location: doctorlogin.php');
	exit();
} 
?>
<?php 

require('cons.php');
//require('doctorvalidate.php'); 
      $var1 ='';
      $var1 = $_SESSION['name'] ;
if(isset($_POST['subreport'])){
    $pat_num = $_POST['pat_num'];
    $diag = $_POST['diagnosis'];
	$psychological = $_POST['psychological'];
	$chronic = $_POST['chronic'];
	$drugs= $_POST['drugs'];
	$advice = $_POST['advice'];
	$todayDate = date("Y-m-d H:i:s");

	
	
$sql = "INSERT INTO report VALUES(null, '$pat_num', '$var1', '$diag', '$psychological', '$chronic', '$drugs', '$advice', '$todayDate')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Record Registered Succesfully')</script>";
	echo "<script>window.open('doctorpanel.php','_self')</script>";
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="container-fluid">

<div class="row">
	<div class="col-md-3">
	
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.html"><img src="images/rt.jpg" alt="" align="left"></a>
                      
					</div>
					

					<div class="col-md-5">
						 <?php
                    //session_start();
                    //quire('doctorvalidate.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['name'] ;
                    ?>


           <marquee><h1 align="right">WELCOME <?php echo $var1 ?> </h1></marquee>
					
					</div>


</div>
</div>
		<div class="container-fluid">
                  


<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #FF00FF; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="doctorappointment.php" class="list-group-item">View My Appointments</a>
					<a href="drugsearch.php" class="list-group-item">Search Drug</a>
					<a href="patappoint.php" class="list-group-item">Create Appointments</a>
					<a href="patientreport.php" class="list-group-item">View Patient Report</a>


					
					
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #FF00FF; color: white; border-color: #06F2F8;"><h3 align="center">Profile</h3>
					<a href="doctorupdate.php" class="list-group-item">Update My Profile</a>
					<a href="logout.php" class="list-group-item action">Log Out</a>

				</div>
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #FF00FF; color: white; text-align: center;";>
				
				<h5>Patient Consultation </h5></div>
				<div class="card-body" >
					<form class="form-group"  method="POST" enctype="multipart/form-data">	
					
					 <label>Patient No</label>
						<input type="text" name="pat_num"  class="form-control" required><br>
                    
                    <label>Diagonosis</label>
						<input type="text" name="diagnosis"  class="form-control" required><br>

					<label>Psychological Status</label>
						<input type="text" name="psychological"  class="form-control" required><br>

					<label>Chronic Disease Note</label>
						<input type="text" name="chronic"  class="form-control" required><br>

					<label>Prescribed Medications</label>
						<input type="text" name="drugs"  class="form-control" required><br>
                        
					<label>Medical Advice</label>
					    <input type="text" name="advice"  class="form-control" required><br>
						
						<center> <input type="submit" name="subreport" value="Submit Report" class="btn btn-secondary"></center>

					</form>
				</div>
			</div>
		</div>

           
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(function(){
    $('#time').combodate({
        firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
        minuteStep: 1
    });  
});
</script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
				  Swal.fire({
				  title: 'Welcome Admin',
				  text: 'Enjoy your operations',
				  imageUrl: 'images/logo.jpg',
				  imageWidth: 200,
				  imageHeight: 100,
				  imageAlt: 'Custom image',
				  animation: false
				})
	});

</script> > -->
</body>
</html>