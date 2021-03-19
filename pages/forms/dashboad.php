<?php

$con = mysqli_connect("localhost","root","","technokraftdb");



// if(isset($_POST['submit'])){
//   $gemail = $_POST['gemail'];
//   $gpass = $_POST['gpass'];
  
 
// $image = $_FILES['image']['name'];
// $tmp_image = $_FILES['image']['tmp_name'];

//  $sql = "insert into techno_general(gemail,gpass,gimage) values('$gemail','$gpass','$image')";
// $run = mysqli_query($con,$sql);

// header("Location:http://127.0.0.1//AdminLTE-master/pages/forms/blogg.php"); 



// if($run == TRUE){
//   echo "inserted";
//   move_uploaded_file($tmp_image,"images/".$_FILES["image"]["name"]);
//  // echo "image uploaded";
// }else{
//   echo "not inserted";
// }
// }
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// if($con){
//   echo "success";
// }else{
//     echo"error";
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      <!-- </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>
        
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  
<?php include('asideheader.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

         <!-- Main content -->
    <!-- <section class="content">
      <div class="container-fluid">
        <div class="row"> -->
          <!-- left column -->
          <!-- <div class="col-md-6"> -->
            <!-- general form elements -->
            <!-- <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
<!-- 
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="gemail" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="gpass" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div> -->
                    
                      <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div> -->    
                    <!-- </div>
                    </div> -->
                  

                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                <!-- </div> -->
                <!-- /.card-body -->
<!-- 
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>        
                </div> -->

         
    
             <!-- Horizontal Form -->
            <!-- <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div> -->

              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> Number </label>
                    <div class="col-sm-10">
                      <input type="int" class="form-control" id="inputPassword3" placeholder="number">
                    </div>
                  </div> -->
                  <!-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div> -->
                  <!-- </div>
                </div> -->
                <!-- /.card-body -->
                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button> -->

                  <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
                <!-- </div> -->
                <!-- /.card-footer -->
              <!-- </form>
            </div> 
            

          </div> -->
          <!--/.col (left) -->
          <!-- right column -->
          <!-- <div class="col-md-6"> -->



<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

</body>
</html>
