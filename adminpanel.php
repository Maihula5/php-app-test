<?php
session_start();
//require("staffvalidate.php");
if (!isset($_SESSION['loggedin'])){ 
	//echo "logged out";
	header('Location: adminlogin.php');
	exit();
} 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class ="jumbotron" id="cs1"> </div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #3498DB ; color: white; border-color: #06F2F8;"><h3 align="center">Registrations</h3>
					<a href="" class="list-group-item action">Register Doctor</a>
					<a href="patient.php" class="list-group-item action">Register Patient</a>
					<a href="pharmacistreg.php" class="list-group-item action">Register Pharmacist</a>
					<a href="patappoint.php" class="list-group-item action">Make Appointment</a>
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #3498DB ; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
					<a href="doctor_details.php" class="list-group-item action">View Doctors Details</a>
					<a href="" class="list-group-item action">View Patients Details</a>
					<a href="all_appointment.php" class="list-group-item action">View Appointment</a>
					<a href="viewdrug.php" class="list-group-item action">View Drug Orders</a>
				</div>
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB; color: white; text-align: center;";>
				<div class="dropdown">
				<h5>Doctor Registration </h5> </div></div>
				<div class="card-body" >
					<form class="form-group" action="doctorreg.php" method="POST" enctype="multipart/form-data">
						<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" required>
						<label>Phone Number</label>
						<input type="text" name="number" class="form-control" required>
						<label>Email</label>
						<input type="text" name="email" class="form-control" required="number"><br>
						<label>Speciality</label>
						<select class="form-control" name="speciality">
							<option>Select...</option>
							<option>Accidents</option>
							<option>Cardiology</option>
							<option>Dentist</option>
							<option>Dermatology</option>
							<option>Surgery</option>
						</select>
                        <label>Profile</label>
						<input type="text" name="profile"  class="form-control" required><br>

						<label>Password</label>
						<input type="password" name="password" id="pass" class="form-control" required><br>

						<label>Image</label>
						<input type="file" name="image" class="form-control" required><br>
						<center> <input type="submit" name="doctorreg" value="Register Doctor" class="btn btn-primary"></center>

					</form>
				</div>
			</div>
		</div>
            
            <div class="col-md-3">
				
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #3498DB ; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
					
					<a href="logout.php" class="list-group-item action">Log Out</a>
					<a href="" class="list-group-item action">View Appointment</a>
					<a href="" class="list-group-item action">View Drug Orders</a>
				</div>
			</div>

		<div class="col-md-1">
	

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