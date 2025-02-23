<?php 
 session_start();
require('cons.php');
if(isset($_POST['loginsubmit'])){
    $username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM pharmacist WHERE email = '$username' AND password = $password ";
	$result = mysqli_query($conn,$sql);
	//$final = mysqli_num_rows($result);

	if($result == true){
		while ($row=mysqli_fetch_array($result)) {
     	 $_SESSION['name'] =  $row['fullname'];
     	 $_SESSION['email'] =  $row['email'];
         header("Location:pharmacistpanel.php");
     }
 }else{
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('pharmacylogin.php','_self')</script>";
		
	}
}


?>