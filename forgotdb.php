<!---------------------------------------------- Forgot password database php code ------------------------------------->
<?php
    $conn=mysqli_connect('localhost','root','','web_tech_project');
     if(!$conn){
         die("Connection failed. Please try again.".mysqli_connect_error());
     }

     $sql="UPDATE login
        SET Password = '$_POST[newpass]'
        WHERE Username ='$_POST[username]'";

     $result=mysqli_query($conn,$sql);
     if($result){
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Your password changed successfully. Go to login page.');
      window.location.href='login.html';
      </script>"); 
    }   
      else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Failed to change password.Please try again.');
        window.location.href='forgot.html';
        </script>");  
      }
 mysqli_close($conn);

 ?>