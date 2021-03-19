
<?php
$con = mysqli_connect("localhost","root","","technokraftdb");
$id = $_POST['id'];
$sql = "DELETE FROM techno_user WHERE id='$id'";


if($runAQL = mysqli_query($con,$sql)){
    echo "Success";
}else{
    echo "Error";
}
?>
