<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<header>
    <center><h1>Registration form</h1></center>
</header>
<body>
    <form action="" method="post">
    Enter name:<input type="text" name="name"><br>
    <br>
    Enter mobile number: <input type="number" name="num"><br>
    <br>
    Enter your age:<input type="number" name="age"><br>
    <br>
    Enter your address: <input type="text" name="add"><br>
    <br>
    College name:<input type="text" name="col"><br>
    <br>
    <center><input type="submit"></center>
    </form>
</body>
</html>

<?php
$conn=mysqli_connect('localhost','root','','formdb');
if(!$conn){
    die("Error");
}
else{
    echo "Connected";
}
$sql="INSERT INTO `form`(`Name`, `mobile number`, `Age`, `Address`, `College name`) VALUES ('$_POST[name]','$_POST[num]','$_POST[age]','$_POST[add]','$_POST[col]')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Success";
}
else{
    echo "Error";
}

?>