
<!-- // echo "<pre>";
// print_r($_POST);
// echo "</pre>";


// if($con){
//   echo "success";
// }else{
//     echo"error";
// }

//<h3> Login Form <?php echo  $_SESSION['user'];?> </h3>

// if(isset($_POST['login']))
// {
//   $username= $_POST['uname'];
//   $password= $_POST['psw'];
//   $sql = "insert into techno_login(username,password) values('$username','$password')";
//   $run = mysqli_query($con,$sql);
//   if($run == TRUE){
//     echo "inserted"; 

//   }
// }
 
<script>
function submit(){
  if($.trim($("#txtname").val())==""){
      alert("Enter Name");
        } else if ($.trim($("#txtpass").val())==""){
          alert("Enter Password");
        }else{
          var username = $('#txtname').val();
          var password = $('#txtpass').val();
           
            // to validate the email n apsss 

          $.ajax({
            url:'i_checklogin.php',
            type:'POST',
            data:{username:username,password:password},
            success: function(data){
             // console.log(data);
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
 -->


 
<!-- 
 
<h3> Login Form <?php echo  $_SESSION['user']; ?></h3>
<script>
function submit(){
  if($.trim($("#txtname").val())==""){
      alert("Enter Name");
        } else if ($.trim($("#txtpass").val())==""){
          alert("Enter Password");
        }else if{
          var username = $('#txtname').val();
          var password = $('#txtpass').val();
           
            to validate the email n apsss 

          $.ajax({
            url:'i_checklogin.php',
            type:'POST',
            data:{username:username,password:password},
            success: function(data){
              alert(data);
            }
          });         
        }
}
  </script> -->