

<!DOCTYPE html>

<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
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
                    require('patientvalidate.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['id'] ;
                    ?>


           <marquee><h1 align="right">WELCOME <?php echo $var1 ?> </h1></marquee>
					
					</div>


</div>
</div>
		<div class="container-fluid">
                  


<div class="row">
				<div class="col-md-4">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #FF00FF; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="patappoint.php" class="list-group-item">Make Appointment</a>
					<a href="drugorder.php" class="list-group-item">Order Drugs</a>
					<a href="drugsearch.php" class="list-group-item">Search Drug</a>
					
					
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #FF00FF; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
					<a href="patientappointment.php" class="list-group-item">View My Appointment</a>
					<a href="patorder.php" class="list-group-item action">View My Orders</a>
					<a href="patientreport.php" class="list-group-item action">View My Medical Report</a>
					<a href="doctor_details.php" class="list-group-item action">View Doctors Details</a>


				</div>

			</div>
		
		<div class="col-md-7">
			<div class="card">
				<div class="card-body" ;>
				
				<img src="images/pt.jpg" height="100" width="600">
			</div>
				<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/rakhospital.png" alt="rak-hospital" title="rak-hospital" id="wows1_0"/></li>
		<li><img src="data1/images/img_8122018.jpg" alt="img_8122018" title="img_8122018" id="wows1_1"/></li>
		<li><img src="data1/images/pi_image1_180.png" alt="pi_image1_180" title="pi_image1_180" id="wows1_2"/></li>
		<li><img src="data1/images/pi_image1_276.png" alt="pi_image1_276" title="pi_image1_276" id="wows1_3"/></li>
		<li><img src="data1/images/story_20.jpg" alt="story_20" title="story_20" id="wows1_4"/></li>
		<li><img src="data1/images/story_21.jpg" alt="story_21" title="story_21" id="wows1_5"/></li>
		<li><img src="data1/images/bg_2.jpg" alt="bg_2" title="bg_2" id="wows1_6"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/dept2.jpg" alt="image carousel" title="dept-2" id="wows1_7"/></a></li>
		<li><img src="data1/images/image_2.jpg" alt="image_2" title="image_2" id="wows1_8"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="rak-hospital"><span><img src="data1/tooltips/rakhospital.png" alt="rak-hospital"/>1</span></a>
		<a href="#" title="img_8122018"><span><img src="data1/tooltips/img_8122018.jpg" alt="img_8122018"/>2</span></a>
		<a href="#" title="pi_image1_180"><span><img src="data1/tooltips/pi_image1_180.png" alt="pi_image1_180"/>3</span></a>
		<a href="#" title="pi_image1_276"><span><img src="data1/tooltips/pi_image1_276.png" alt="pi_image1_276"/>4</span></a>
		<a href="#" title="story_20"><span><img src="data1/tooltips/story_20.jpg" alt="story_20"/>5</span></a>
		<a href="#" title="story_21"><span><img src="data1/tooltips/story_21.jpg" alt="story_21"/>6</span></a>
		<a href="#" title="bg_2"><span><img src="data1/tooltips/bg_2.jpg" alt="bg_2"/>7</span></a>
		<a href="#" title="dept-2"><span><img src="data1/tooltips/dept2.jpg" alt="dept-2"/>8</span></a>
		<a href="#" title="image_2"><span><img src="data1/tooltips/image_2.jpg" alt="image_2"/>9</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">image slider</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
			</div>
		</div>

           
		
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>