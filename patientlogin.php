<!DOCTYPE html>
<html>
<head>

    <!--making page response

	--><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body style="background:url('images/rak.jpg'); no-repeat background-size:cover; opacity: 2 ; ">

<div class="container" style="width: 400px; margin-top:100px";>
	<div class="card">
       <img src="images/pt.jpg" class="card-img-top" width="100px" height="150px">
		<div class="card-body">

	<form class="form-group" action="patientvalidate.php" method="post">
		<label>Patient Number</label>
		<input type="text" name="username" class="form-control" placeholder="Enter your RAK Number" required=""><br>
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Enter your password" required=""><br>
		<center>
		<input type="submit" name="loginsubmit"  class="btn btn-primary" value="Login">	
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