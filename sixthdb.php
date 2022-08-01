<!-- Sixth page database php code -->
<?php

$conn=mysqli_connect('localhost','root','','web_tech_project');

if(!$conn){
    die("Connection failed. Please try again.".mysqli_connect_error());
}

$sql="INSERT INTO `hostel_details`(`sr.no`, `Beneficiary Category`) VALUES ('','$_POST[hostel]')";
$result=mysqli_query($conn,$sql);
if($result){
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Your form submitted successfully. Go to Home page.');
            window.location.href='first.html';
            </script>");

}else{
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Error while saving the information.');
            window.location.href='sixth.html';
            </script>");
}
mysqli_close($conn);

?>