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