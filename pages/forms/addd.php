<?php
$con = mysqli_connect("localhost","root","","technokraftdb");


if(isset($_POST['submit'])){
$btitle = $_POST['btitle'];
$bdetail = $_POST['bdetail'];
 
$image = $_FILES['image']['name'];
$tmp_image = $_FILES['image']['tmp_name'];

 $sql = "insert into techno_blogs(btitle,bdesc,bimage) values('$btitle','$bdetail','$image')";
$run = mysqli_query($con,$sql);



// if($run == TRUE){
//   echo "inserted";
//   move_uploaded_file($tmp_image,"images/".$_FILES["image"]["name"]);
//   echo "image uploaded";
// }else{
//   echo "not inserted";
// }
}

// if($con){
//   echo "success";
// }else{
//     echo"error";
// }


?>