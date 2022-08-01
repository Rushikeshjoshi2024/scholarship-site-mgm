<!-- Login page database php code -->
<?php     
$conn = mysqli_connect('localhost', 'root', '', 'web_tech_project');  
if(!$conn) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}     
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Welcome.');
            window.location.href='first.html';
            </script>");

        }  
        else{  echo ("<script LANGUAGE='JavaScript'>
            window.alert('Invalid Username or Password.');
            window.location.href='login.html';
            </script>");
        }  
        mysqli_close($conn);
   
?>
