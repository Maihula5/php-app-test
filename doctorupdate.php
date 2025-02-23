   <?php
                    require('cons.php');
				    require('doctorvalidate.php');	
				    $var1 ='';
				    $var1 = $_SESSION['name'];
				    $sql = "SELECT * FROM doctors WHERE fullname = '$var1'";
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				       while ($row=mysqli_fetch_array($result)) {
				       $name =  $row['fullname'];
				       $phone = $row['phone_number'];
				       $email = $row['email'];
				       $designation = $row['speciality'];
				       //$department = $row['department'];
				       $profile = $row['profile'];
				     
				       $password =   $row['password'];

				       }
				   }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('staffpanel.php', '_self')</script>";
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

	<div class="col-md-3">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.html"><img src="images/rt.jpg"  alt="" align="left"></a>
                      
					
					
					</div>

</div>
		<div class="container-fluid">
                   


           <h1>WELLCOME <?php echo $var1 ?> </h1>


<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #FF00FF; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="doctorappointment.php" class="list-group-item">My Appointments</a>
					<a href="drugsearch.php" class="list-group-item">Search Drug</a>

                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #FF00FF; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
						<a href="staffcomp.php" class="list-group-item action">View Patient Record</a>
					<a href="" class="list-group-item action">View My Appointments</a>

				</div>
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #FF00FF; color: white; text-align: center;";>
				
                      

				<h5>Update My Profile </h5></div>
				<div class="card-body" >
					<form class="form-group" action="doctorupdate_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Fullname</label>
						<input type="text" name="fullname"  class="form-control" value="<?php echo $name; ?>" required><br>

					<label>Phone Number</label>
						<input type="text" name="number"  class="form-control" value="<?php echo $phone; ?>" required><br>
					<label>Email</label>
						<input type="text" name="email"  class="form-control" value="<?php echo $email; ?>" required><br>
					<label>Profile</label>
						<input type="text" name="profile"  class="form-control" value="<?php echo $profile; ?>" required><br>
					<label>Password</label>
						<input type="text" name="password"  class="form-control" value="<?php echo $password; ?>" required><br>
					
                     
					
						<center> <input type="submit" name="update" value="Update Details" class="btn btn-warning"></center>

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