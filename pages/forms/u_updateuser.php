<?php
$con = mysqli_connect("localhost","root","","technokraftdb");
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// die();
$uname = $_POST['uname'];
$uphone = $_POST['uphone'];
$uemail = $_POST['uemail'];
$uaddress =$_POST['uaddress'];

if(trim($uname)==""){
    echo "name";
}else if(trim($uphone)==""){
    echo "phone";
}else if(trim($uemail)==""){
    echo "email";
}elseif (trim($uaddress)=="") {
    echo "address";
}else if(!isset($_FILES['image1']['name'])){
    $sql = "UPDATE techno_user SET uname='$uname',uphone='$uphone', uemail='$uemail',uaddress ='$uaddress', uimage='$uimage' WHERE id ='".$_POST["id"]."'";
if($run = mysqli_query($con,$sql)){
    echo "Success";
}else{
    echo "Error";
}
}else { 
    if(isset($_FILES['image1']['name'])){
$uimage = $_FILES['image1']['name'];
$tmp_image = $_FILES['image1']['tmp_name'];
if (move_uploaded_file($tmp_image,"images/".$_FILES["image1"]["name"])) {
    # code...
    echo "Image uploaded successfully";
}else{
    echo "Image  not uploaded";
}
// die();
$sql = "UPDATE techno_user SET uname='$uname',uphone='$uphone',uemail='$uemail', uaddress ='$uaddress', uimage='$uimage' WHERE id ='".$_POST["id"]."'";

if($run = mysqli_query($con,$sql)){
    echo "Success";
}else{
    echo "Error";
}
}
}
?>