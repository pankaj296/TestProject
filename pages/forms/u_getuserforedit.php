<?php
	$con = mysqli_connect("localhost","root","","technokraftdb");
	
	// if ($con) {
	// 	echo "succes ";
	// }else {
	// 	echo "fail";
	// 	}
	

	$qrt="select * from techno_user where id ='".$_POST["id"]."'";
	$runt=mysqli_query($con,$qrt);
	$rowt=mysqli_fetch_array($runt);

	echo json_encode($rowt);
	

?>	