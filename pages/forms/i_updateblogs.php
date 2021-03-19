<?php
$con = mysqli_connect("localhost","root","","technokraftdb");

$btitle = $_POST['btitle'];
$bdetail = $_POST['bdesc'];

if(trim($btitle)==""){
    echo "btitle";
}else if(trim($bdetail)==""){
    echo "bdesc";
}else if(!isset($_FILES['image']['name'])){
    $sql = "UPDATE techno_user SET name='$name',phone='$phone', email='$email', address ='$address', image='$image' WHERE id ='".$_POST["id"]."'";
    if($run = mysqli_query($con,$sql)){
        echo "Success";
    }else{
        echo "Error";
    }
}else { 
    if(isset($_FILES['image']['name'])){
$image = $_FILES['image']['name'];
$tmp_image = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp_image,"images/".$_FILES["image"]["name"]);
$sql = "UPDATE techno_user SET name='$name',phone='$phone', email='$email', address ='$address', image='$image' WHERE id ='".$_POST["id"]."'";
if($run = mysqli_query($con,$sql)){
    echo "Success";
}else{
    echo "Error";
}
}
}

?>