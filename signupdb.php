<!-- Signup page database php code -->
<?php
    $conn=mysqli_connect('localhost','root','','web_tech_project');
     if(!$conn){
         die("Connection failed. Please try again.".mysqli_connect_error());
     }

     $sql="INSERT INTO `login`(`Username`, `Password`, `Mobile number`) VALUES ('$_POST[unam]','$_POST[pann]','$_POST[num]')";

     $result=mysqli_query($conn,$sql);
     if($result){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Your registration done successfully. Please login.');
        window.location.href='login.html';
        </script>");
     }   
     else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registration failed.Please register again.');
        window.location.href='signup.html';
        </script>");echo "failed".mysqli_error($conn);
 }
 mysqli_close($conn);

 ?>


