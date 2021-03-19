
<?php
$con = mysqli_connect("localhost","root","","technokraftdb");
$id = $_GET['id'];
$sql = "SELECT * FROM techno_blogs WHERE id=:'$id'";

$runAQL = mysqli_query($con,$sql);
$fetchData = "SELECT * FROM techno_blogs WHERE ID='$id'";
$runFetch = mysqli_query($con,$fetchData);
$getFetchData = mysqli_fetch_assoc($runFetch);


if(isset($_POST['update'])){
  $btitle = $_POST['btitle'];
  $bdetail = $_POST['bdetail'];

  
$image = $_FILES['image']['name'];
$tmp_image = $_FILES[ 'image']['tmp_name'];

 $update = "UPDATE techno_blogs SET btitle='$btitle',bdesc='$bdetail', bimage='$image' WHERE ID='$id'";


  $runupdate = mysqli_query($con,$update);
  $fetchQ = "SELECT * FROM techno_blogs";
  $run = mysqli_query($con,$update);
  header("Location:blogg.php");
}
?>





















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Form Edit</title>

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
            <h1>Blogs Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Bloggs Form</li>
            </ol>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admin Blocgs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blogs Title </label>
                    <textarea class="form-control" name="btitle" rows="2" placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blogs Details </label>
                    <textarea class="form-control" name="bdetail" rows="3" placeholder="Enter ..."></textarea>
               
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Blogs Images </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                      </div>
                    
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary" onclick="submit();">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

              
                <!-- /.card-body                -->
                
    
    </div>
  </div>
</div>

                <!-- /.card-footer                -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->


   





          <!-- right column -->
          <div class="col-md-6">


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