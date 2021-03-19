
// echo "<pre>";
// print_r($getFetchData);
// echo "</pre>";
// die();
// $statement = $connection->prepare($sql);
// $statement->execute([':id' => $id ]);
// $person = $statement->fetch(PDO::FETCH_OBJ);
// if (isset ($_POST['name'])  && isset($_POST['email']) ) {
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $sql = 'UPDATE users SET name=:name, email=:email WHERE id=:id';
//   $statement = $connection->prepare($sql);
//   if ($statement->execute([':name' => $name, ':email' => $email, ':id' => $id])) {
//     header("Location: /crud");
//   }
// }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Blog </title>

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
    
  </nav>
  <!-- /.navbar -->
 

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
                    <textarea class="form-control" name="btitle" rows="2"  placeholder="Enter ..."><?php echo $getFetchData['btitle']?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blogs Details </label>
                    <textarea class="form-control" name="bdetail"  rows="3" placeholder="Enter ..."><?php echo $getFetchData['bdesc']?></textarea>
               
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Blogs Images </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="id" value="<?php echo $getFetchData['ID']?>" >
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                      </div>
                    
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary" herf="">Update Data</button>
                </div>
              </form>
            </div>


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
<script src="CRUD.js"></script> 
</body>
</html>



