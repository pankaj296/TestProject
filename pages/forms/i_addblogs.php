<?php
$con = mysqli_connect("localhost","root","","technokraftdb");

$btitle = $_POST['btitle'];
$bdetail = $_POST['bdesc'];
if(trim($btitle)==""){
    echo "btitle";
}else if(trim($bdetail)==""){
    echo "bdesc";
}else if(!isset($_FILES['image']['name'])){
    echo "bimage";
}else{
$image = $_FILES['image']['name'];
$tmp_image = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp_image,"images/".$_FILES["image"]["name"]);

$sql = "insert into techno_blogs(btitle,bdesc,bimage) values('$btitle','$bdetail','$image')";
if($run = mysqli_query($con,$sql)){
    echo "Success";
}else{
    echo "Error";
}
}

?>

