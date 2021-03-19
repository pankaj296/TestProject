


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Form</title>

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
                        <label for="exampleInputEmail1">NAME :  </label>
                        <textarea class="form-control" name="name" id="name" rows="1" placeholder="Enter NAME ..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number : </label>
                        <textarea class="form-control" name="phone" id="phone" rows="1" placeholder="Enter Phone Number..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Id : </label>
                        <textarea class="form-control" name="email" id="email" rows="1" placeholder="Enter Email Id..."></textarea>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">ADDRESS : </label>
                    <textarea class="form-control" name="address" id="address" rows="2" placeholder="Enter ADDRESS..."></textarea>
               
                  </div>
                      <div class="form-group">
                        <label for="exampleInputFile"> Image </label>
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
                  <button type="submit" name="submit" class="btn btn-primary" onclick="submitrec();" id="btnSubmit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

              
                <!-- /.card-body                -->
                
                
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Blogs Data </h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered" id="tabledetails">
      
      </table>
    </div>
  </div>
</div>
                <!-- /.card-footer                -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->s
<input type="hidden" id="hdnid">

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<!-- Page specific script -->
<script>
$(function () {
 getdetails();
});

function getdetails(){
  $.ajax({
		type:"POST",
		url:"i_getblogdetails.php",
		data:{},
		success:function(response){
			$("#tabledetails").html(response);
    }
});
}
function deleterec(id){
  $.ajax({
		type:"POST",
		url:"i_deleteblogdetail.php",
		data:{id:id},
		success:function(response){
        if($.trim(response)=="Success"){
          alert("Record Deleted");
          getdetails();
        }else{
          alert("Record Not Deleted");
        }
    }
});
}

function submitrec(){
  if(	$("#btnSubmit").html()=="Submit"){
    $('form').ajaxForm({
		type:"POST",
		url:"u_adduser.php",
		data:{name:$("#name").val(),phone:$("#phone").val(),email:$("#email").val(),address:$("#address").val()},
		    success:function(response){
					},
					complete:function(response){
					var response=response.responseText;
		console.log(response);
		if($.trim(response)=="name"){
			alert("Enter name");
		}else if($.trim(response)=="phone"){
			alert("Enter phone");
    }else if($.trim(response)=="email"){
			alert("Enter email");
    }else if($.trim(response)=="address"){
			alert("Enter address");
		}else if($.trim(response)=="image"){
			alert("Upload image");
		}else if($.trim(response)=="Success"){
			
		alert("Your details successfully saved");
		getdetails();
		$("#name").val("");
		$("#phone").val("");
    $("#email").val("");
    $("#addres").val("");
	

      developer@technokraft.co
      developer@343



	
		}else if($.trim(response)=="Exsits"){
			alert("Details Exsits");
		}else{
			alert("Something Went Wrong");
		}
	}
			});
      }else{
    $('form').ajaxForm({
		type:"POST",
		url:"i_updateblogs.php",
		data:{id:$("#hdnid").val(),btitle:$("#btitle").val(),bdesc:$("#bdetail").val()},
		    success:function(response){
					},
					complete:function(response){
					var response=response.responseText;
		console.log(response);
		if($.trim(response)=="btitle"){
			alert("Enter titles");
		}else if($.trim(response)=="bdesc"){
			alert("Enter desc");
		}else if($.trim(response)=="bimage"){
			alert("Upload image");
		}else if($.trim(response)=="Success"){
			
		alert("Your details successfully saved");
		getdetails();
		$("#btitle").val("");
		$("#bdetail").val("");
    $("#btnSubmit").html("Submit");
	
		}else{
			alert("Something Went Wrong");
		}
	}
			});
  }
}

function modifyrec(id){
  $.ajax({
		type:"POST",
		url:"i_getblogforedit.php",
		dataType:"json",
		data:{id:id},
		success:function(response){
			$("#btitle").val(response["btitle"]);
      $("#bdetail").val(response["bdesc"]);
		}
});
	$("#btnSubmit").html("Update");
	$("#hdnid").val(id);
}
</script>
<script src="CRUD.js"></script> 
</body>
</html>

