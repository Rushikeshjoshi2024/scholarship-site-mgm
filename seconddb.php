<!-- Second page database php code -->
<?php

$conn=mysqli_connect('localhost','root','','web_tech_project');

if(!$conn){
    die("Connection failed. Please try again.".mysqli_connect_error());
}
$sql="INSERT INTO `address_info`(`sr.no`, `Address`, `State`, `District`, `Taluka`, `Village`, `Pin code`, `Is Correspondence Address same as Permanent`) VALUES ('','$_POST[address]','$_POST[state]','$_POST[dist]','$_POST[taluka]','$_POST[village]','$_POST[pin]','$_POST[add]')";
$result=mysqli_query($conn,$sql);
if($result){
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Your information saved successfully. Go to next page.');
            window.location.href='third.html';
            </script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Error while saving the information.');
    window.location.href='second.html';
    </script>");
}
mysqli_close($conn);

?>