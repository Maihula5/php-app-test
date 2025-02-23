<?php

include'cons.php';
$output = '';
//$cn = $_POST['CountryID'];
$sql = "SELECT * FROM tb_state WHERE country_id = '".$_POST["CountryID"]."' ORDER BY state_name";
$result = mysqli_query($conn, $sql);
$output = '<option value="">Select Stateeeeeeee</option>';
while ($row = mysqli_fetch_array($result)) {
	$output .= '<option value="'.$row["state_id"].'">'.$row["state_name"].'</option>';
}
 echo  $output;

?>