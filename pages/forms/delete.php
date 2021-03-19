
<?php
$con = mysqli_connect("localhost","root","","technokraftdb");
$id = $_GET['id'];
$sql = "DELETE FROM techno_blogs WHERE id='$id'";

$runAQL = mysqli_query($con,$sql);
header("Location: blogg.php");
?>
<!-- 
// $statement = $connection->prepare($sql);
// if ($statement->execute([':id' => $id])) {
//   header("Location: /crud");
// } -->