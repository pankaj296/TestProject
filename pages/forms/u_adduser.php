<?php
$con = mysqli_connect("localhost","root","","technokraftdb");

// if($con){
//   echo "success";
// }else{
//     echo"error";
// }
// die();

$uname = $_POST['uname'];
$uphone = $_POST['uphone'];
$uemail = $_POST['uemail'];
$uaddress =$_POST['uaddress'];

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

if(trim($uname)==""){
    echo "name";
}elseif(trim($uphone)==""){
    echo "phone";
}elseif(trim($uemail)==""){
    echo "email";
}elseif(trim($uaddress)=="") {
    echo "address";
}elseif(!isset($_FILES['image1']['name'])){
    echo "image";
}else{
  
$sql = "insert into techno_user(uname,uphone,uemail,uaddress,uimage) 
values('".$uname."','".$uphone."','".$uemail."','".$uaddress."','".$_FILES['image1']['name']."')";

if($run = mysqli_query($con,$sql)){
    echo "Success";
}else{
    echo "Error";
}
}

?>

