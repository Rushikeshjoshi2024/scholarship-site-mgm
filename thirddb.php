<!-- Third page database php code -->
<?php

$conn=mysqli_connect('localhost','root','','web_tech_project');

if(!$conn){
    die("Connection failed. Please try again.".mysqli_connect_error());
}
$sql="INSERT INTO `other_info`(`sr.no`, `Is father alive`, `Father name`, `Father occupation`, `Is father salaried`, `Is mother alive`, `Mother name`, `Mother occupation`, `Is mother salaried`) VALUES ('','$_POST[abc]','$_POST[fname]','$_POST[occupation]','$_POST[salaried]','$_POST[xyz]','$_POST[mname]','$_POST[occ]','$_POST[salary]')";
$result=mysqli_query($conn,$sql);
if($result){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your information saved successfully. Go to next page.');
    window.location.href='fourth.html';
    </script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Error while saving the information.');
            window.location.href='third.html';
            </script>");
}
mysqli_close($conn);
?>