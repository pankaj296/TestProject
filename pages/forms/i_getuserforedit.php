<?php
	$con = mysqli_connect("localhost","root","","technokraftdb");
	

	$qrt="select * from techno_blogs where ID='".$_POST["id"]."'";
	$runt=mysqli_query($con,$qrt);
	$rowt=mysqli_fetch_array($runt);
	echo(json_encode($rowt));
	
?>	