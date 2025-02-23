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
					<a href="" class="list-group-item action">Register Patient</a>
					<a href="" class="list-group-item action">Add drugs</a>
					<a href="appointment.php" class="list-group-item action">Make Appointment</a>
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #3498DB ; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
					<a href="doctor_details.php" class="list-group-item action">View Doctors Details</a>
					<a href="" class="list-group-item action">View Patients Details</a>
					<a href="" class="list-group-item action">View Appointment</a>
					<a href="" class="list-group-item action">View Drug Orders</a>
				</div>
			</div>
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #D35400; color: white; text-align: center;";>
				<div class="dropdown">
				<h5>Patient Registration </h5> </div></div>
				<div class="card-body" >
					<form class="form-group" action="newpatient_script.php" method="POST" >
						<label>	RAK Number</label>
						<input type="text" name="rak_number" class="form-control" required>
						<label> Full Name</label>
						<input type="text" name="fullname" class="form-control" required>
						<label>Phone Number</label>
						<input type="number" name="number" class="form-control" required>
						<label>Email</label>
						<input type="email" name="email" class="form-control" required="number"><br>
						<label>Address</label>
						<input type="text" name="address" class="form-control" required>
						<label>Gender</label>
						<select class="form-control" name="gender">
							<option>Select...</option>
							<option>Male</option>
							<option>Female</option>							
						</select><br>
                        <center> <input type="submit" name="patientreg" value="Register Patient" class="btn btn-danger"></center>


					</form>
				</div>
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