<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

<!-- 
 

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