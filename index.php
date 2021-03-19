<?php
session_start();
include("db_connect.php");

	$db=new DB_Connect();

	$con=$db->connect();
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page  </title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

h3,a,label{
    color: black;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #cc1a0d;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 50%;
  }
}


/* body {
  background-image: url('picc.jpg');
 
  background-position: center;
  background-repeat: no-repeat;
  background-size:contain, cover ;
  position: relative;
  
  
} */
</style>
</head>
<body>
    

  <div class="container ">
    <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"> 
        </div> 
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            
            
<h3> Login Form </h3>

      
    <label for="uname" ><b>Username</b></label>
    
    <input type="text" placeholder="Enter Username" name="uname" id="txtname">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="txtpass">
        
    <button type="submit" name="login" onclick="submit();">Login</button>
    <label>

<!--               
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    
<p class="mb-1">
<a href="forgot-password.html">I forgot my password</a>
</p>
<p class="mb-0">
<a href="register.html" class="text-center">Register a new membership</a>
</p>  -->

</div> 
<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"> 
</div>         

  </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- <-- to check the email n passw  view not null n show-->
<script>
  function submit(){
  if($.trim($("#txtname").val())==""){
      alert("Enter Name");
        } else if ($.trim($("#txtpass").val())==""){
          alert("Enter Password");
        }else {
          var username = $('#txtname').val();
          var password = $('#txtpass').val();
          // TO VALIDATE THE EMAIL N PASSWORD
          
         $.ajax({
            url:'i_checklogin.php',
            type:'POST',
            data:{username:username,password:password},
            success: function(data){
              alert(data);
              if($.trim(data)=="Fail"){
                  alert("Invalid Login");
              }else{
                $(location).attr('href','dashboad.php');
              }
            }
          });         
        }
}
</script>

<script src="CRUD.js"></script>


</body>
</html>
