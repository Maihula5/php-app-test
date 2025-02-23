<?php

require_once('cons.php');
function get_doc_details(){
	global $conn;
     $sql = "SELECT * FROM doctors";
     $result = mysqli_query($conn, $sql);
     while ($row=mysqli_fetch_array($result)) {
     	 $name =  $row['fullname'];
	     $phone = $row['phone_number'];
	     $email = $row['email'];
	     $speciality = $row['speciality'];
       $image =   $row['image']; 
	     echo "<tr>
      
      <td> <img height=100px; width=100px;  src= '$image'></td>
      <td>$name</td>
      <td>$speciality</td>
      <td>$email</td>
      <td>$phone</td>  
        
    </tr>";
     }
}
   function search_doc_details(){
    global $conn;
    if(isset($_POST['search'])){

    $mail = $_POST['search'];
    $sql = "SELECT * FROM doctors WHERE email = '$mail'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
       while ($row=mysqli_fetch_array($result)) {
      $name=$row['fullname'];
      $speciality=$row['speciality'];
      $email=$row['email'];
      $phone=$row['phone_number'];
      $image=$row['image'];

      echo "<tr>
      <td>$name</td>
      <td>$speciality</td>
      <td>$email</td>
      <td>$phone</td>
      <td> <img height=100px; width=100px;  src= '$image'></td>
       </tr>";
    }
   
    }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctor_details.php', '_self')</script>";
    }
      
    }
      
    }

    function search_patient_details(){
    global $conn;
    if(isset($_POST['search'])){

    $id = $_POST['search'];
    $sql = "SELECT * FROM report WHERE patient_no = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
       while ($row=mysqli_fetch_array($result)) {
       $pn =  $row['patient_no'];
       $date = $row['date'];
       $doc = $row['doctor_name'];
       $diagnosis = $row['diagnosis'];
       $psyc_status = $row['psyc_status'];
       $chronic_disease = $row['chronic_disease'];
       $medications = $row['medications'];
       $advice = $row['advice'];
      

       echo "<tr>
      
      <td>$pn</td>
      <td>$doc</td>
      <td>$diagnosis</td>
      <td>$psyc_status</td>
      <td>$chronic_disease</td>
      <td>$medications</td>
      <td>$advice</td>
      <td>$date</td>  
    </tr>";
    }
   
    }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctor_details.php', '_self')</script>";
    }
      
    }
      
    }

    function view_appointment(){
  global $conn;
  require('doctorvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['name'];
     $sql = "SELECT * FROM appointment WHERE doctor_name  like '%$var1%'";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0){
     while ($row=mysqli_fetch_array($result)) {
       $pn =  $row['patient_no'];
       $date = $row['appdate'];
       $doc = $row['doctor_name'];
       $time = $row['apptime'];
       $symp = $row['symptoms'];
       echo "<tr>
      
      <td>$pn</td>
      <td>$doc</td>
      <td>$date</td>  
      <td>$time</td>
      <td>$symp</td> 
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctorpanel.php', '_self')</script>";
    }
  }

   function view_all_appointment(){
  global $conn;
  //require('doctorvalidate.php');
    // $var1 ='';
     //$var1 = $_SESSION['name'];
     $sql = "SELECT * FROM appointment ";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0){
     while ($row=mysqli_fetch_array($result)) {
       $pn =  $row['patient_no'];
       $date = $row['appdate'];
       $doc = $row['doctor_name'];
       $time = $row['apptime'];
       $symp = $row['symptoms'];
       echo "<tr>
      
      <td>$pn</td>
      <td>$doc</td>
      <td>$date</td>  
      <td>$time</td>
      <td>$symp</td> 
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctorpanel.php', '_self')</script>";
    }
  }

function patient_appointment(){
  global $conn;
  require('patientvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['id'];
     $sql = "SELECT * FROM appointment WHERE patient_no = '$var1' ";
     $result = mysqli_query($conn, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $pn =  $row['patient_no'];
       $date = $row['appdate'];
       $doc = $row['doctor_name'];
       $time = $row['apptime'];
       $symp = $row['symptoms'];
       echo "<tr>
       
      <form method='post'>
       <td><input type='hidden' name='id'  class='form-control' value='$id' readonly>  </td> 
      <td>$pn</td>
      <td>$doc</td>
      <td>$date</td>  
      <td>$time</td>
      <td>$symp</td>
      <td><input type='submit' name='delete'  class='btn btn-danger' value='Cancel'>  </td> 
     </form>
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }

  function patient_report(){
  global $conn;
  require('patientvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['id'];
     $sql = "SELECT * FROM report WHERE patient_no = '$var1' ";
     $result = mysqli_query($conn, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       $pn =  $row['patient_no'];
       $date = $row['date'];
       $doc = $row['doctor_name'];
       $diagnosis = $row['diagnosis'];
       $psyc_status = $row['psyc_status'];
       $chronic_disease = $row['chronic_disease'];
       $medications = $row['medications'];
       $advice = $row['advice'];
      

       echo "<tr>
      
      <td>$pn</td>
      <td>$doc</td>
      <td>$diagnosis</td>
      <td>$psyc_status</td>
      <td>$chronic_disease</td>
      <td>$medications</td>
      <td>$advice</td>
      <td>$date</td>  
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }
     
  function view_drug(){
  global $conn;
     $sql = "SELECT * FROM drug ";
     $result = mysqli_query($conn, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $name = $row['name'];
       $barcode = $row['barcode'];
       $insured = $row['insured'];
       $status = $row['status'];
       $price = $row['price'];
       
             
       echo "<tr>
      <form method='post' action='drugupdate.php'>
       <td><input type='text' name='id' value='$id' size='3' readonly >  </td>
      <td><input type='text' name='name' value='$name'  size='7'>  </td>
      <td><input type='number' name='barcode' value='$barcode'  size='5'>  </td>
      <td><input type='text' name='insured' value='$insured'  size='3'>  </td>
      <td><input type='text' name='status' value='$status'  size='8'>  </td>
      <td><input type='number' name='price' value='$price'  size='5'>  </td>
       <td><input type='submit' name='update'  class='btn btn-danger' value='Update'>  </td> 
     </form>
             
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }
   

   function view_order(){
     global $conn;
     $sql = "SELECT * FROM orders ";
     $result = mysqli_query($conn, $sql);
    // $final = mysqli_num_rows($result);
     if($result){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $name = $row['drug_name'];
       $quantity = $row['quantity'];
       $address = $row['address'];
       $patient = $row['patient'];
       $date = $row['date'];
             
       echo "<tr>
       
      <td>$id</td>
      <td>$patient</td>
      <td>$name</td>
      <td>$quantity</td>
      <td>$address</td>
      <td>$date</td>   
      
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }  

function view_my_order(){
     global $conn;
     require('patientvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['id'];
     $sql = "SELECT * FROM orders WHERE patient = '$var1' ";
     $result = mysqli_query($conn, $sql);
    // $final = mysqli_num_rows($result);
     if($result){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $name = $row['drug_name'];
       $quantity = $row['quantity'];
       $address = $row['address'];
       $patient = $row['patient'];
       $date = $row['date'];
             
       echo "<tr>
       
      <td>$id</td>
      <td>$patient</td>
      <td>$name</td>
      <td>$quantity</td>
      <td>$address</td>
      <td>$date</td>   
      
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }




    function drug_search(){
  global $conn;
    if(isset($_POST['searchdrug'])){
    $id = $_POST['name'];
    $sql = "SELECT * FROM drug WHERE name LIKE  '%$id%'";
    $result = mysqli_query($conn, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       
       $name = $row['name'];
       $barcode = $row['barcode'];
       $insured = $row['insured'];
       $status = $row['status'];
       $price = $row['price'];
       
             
       echo "<tr>
     
      <td>$name</td>
      <td>$barcode</td>
      <td>$insured</td>
      <td>$status</td>
      <td>$price</td>
      <td><a href='drugorder.php' >Order</a></td>
             
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }
      
}

?>
