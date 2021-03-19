<?php

//$con = mysqli_connect("localhost","root","","technokraftdb");
include("db_connect.php");

	$db=new DB_Connect();

	$con=$db->connect();
	
// if(isset($_POST['login']))
// {
//   $username= $_POST['uname'];
//   $password= $_POST['psw'];
//   $sql = "insert into techno_login(username,password) values('$username','$password')";
//   $run = mysqli_query($con,$sql);
//   if($run == TRUE){
//     echo "inserted"; 

//   }
// }

$username= $_POST['username'];
$password= $_POST['password'];

$sql = "SELECT * FROM uh_bloglogin WHERE Username='".$username."' AND Password='".$password."'";
$run = mysqli_query($con,$sql);

if(mysqli_num_rows($run) > 0){
    $_SESSION['user'] = $username;
    
    echo "Login Success";
}else{
    echo "Fail";
}
?>


