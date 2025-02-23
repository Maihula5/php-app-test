<?php 

require('cons.php');
require('patientvalidate.php'); 
      
if(isset($_POST['makeapp'])){
	$var1 ='';
    $var1 = $_SESSION['id'] ;
    $speciality = $_POST['speciality'];
	$doctor= $_POST['doctor'];
	$date= $_POST['date'];
	$time= $_POST['time'];
	$symptoms = $_POST['symptoms'];
	$todayDate = date("Y-m-d H:i:s");

	$tt = "SELECT * FROM `appointment`  WHERE doctor_name = '$doctor'  AND appdate = '$date' ";
	$result1 = mysqli_query($conn, $tt);
   if (mysqli_num_rows($result1) > 0) {
       echo "<script>alert('Sorry the Doctor Isnt Free this time, Please Reappoint')</script>"; 
       echo "<script>window.open('patappoint.php','_self')</script>";  	
}else{

   $sql = "INSERT INTO `appointment` (`id`, `patient_no`, `doctor_speciality`, `doctor_name`, `appdate`, `apptime`, `symptoms`, `date_registered`) VALUES (NULL, '$var1', '$speciality', '$doctor', '$date', '$time', '$symptoms', '$todayDate')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Appointment Registered Succesfully')</script>";
	echo "<script>window.open('patappoint.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
    //ader("Location:adminpanel.php");
    }
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
       <img src="images/app.jpg" class="card-img-top" height="100px" width="200" >
		<div class="card-body">

	<form class="form-group"  method="POST">
		<label>Doctor Speciality</label>
		<select name="speciality" class="form-control">
			<option>Select Department</option>

         <?php

	         
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "medical_appointment";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

          $sql = "SELECT Distinct(speciality) From doctors";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['speciality'] ."'>" .$row['speciality'] ."</option>" ;
          }
           ?>
</select>

		<label>Doctor Name</label>
		<select name="doctor" class="form-control">
			<option>Select Doctor</option>

         <?php

	         
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "medical_appointment";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

          $sql = "SELECT * From doctors";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result)){
          echo "<option value='". $row['fullname'] ."'>" .$row['fullname'] ."</option>" ;
          }
           ?>
</select>

		<label>Appointment Date</label>
		<input type="date" name="date" class="form-control" placeholder="Select Date" required="">

		<label>Appointment Time</label>
		<input type="time" name="time" class="form-control" placeholder="Select time" required="">

        <label>Symptoms</label>
		<input type="text" name="symptoms" class="form-control" placeholder="Specify how you feel" required=""><BR>
		
		<center>
		<input type="submit" name="makeapp"  class="btn btn-primary" value="Submit Appointment">	
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