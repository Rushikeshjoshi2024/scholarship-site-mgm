<!-- ?php
$num=4;
$conn=mysqli_connect('localhost','root','','web_tech_project');
 if(!$conn){
     die("Connection failed. Please try again.".mysqli_connect_error());
 }
 else{
    echo "Connected.";
 } -/  $sql="SELECT `sr.no`, `Username`, `Password` FROM `login` WHERE 1";
//  $sql="SELECT * FROM `personal_info` WHERE 1";
//     $result = mysqli_query($conn,$sql) or die (mysql_error());
//     $count = mysqli_num_rows($result);
//     echo $count;
//     while ($row = $result->fetch_assoc()) {
//         echo "<table>";
//     echo "<tr><td>".$row["Aadhar Number"]." ".$row["Name"].$row["Email ID"]." ".$row["Date of Birth"].$row["Age"]." ".$row["Applicant Full Name"]."<br>".$row["Parent's/Guardian Mobile No."]." ".$row["Marital status"]."<br>".$row["Religion"]." ".$row["Caste"]."<br>".$row["Family Annual Income"]." ".$row["Do you have Income Certificate"].$row["Is your income certificate have barcode"]." ".$row["Income Certificate No."].$row["Issuing Authority"]." ".$row["uploded domicile certificate"].$row["Are you Domicile of Maharashtra"]." ".$row["Do you have Domicile Certificate"].$row["Relation Type"]." ".$row["Is yur domicile certificate have barcode"].$row["Domicile certificate no."]." ".$row["Domicile applicant name"].$row["Issuing authoritie"]." ".$row["Are you salaried"].$row["Disability of any type"]." ".$row["Is your bank account have a limit on Withdrawl or Deposit"].$row["Bank Account No."]." ".$row["IFSC Code"].$row["Branch Name"]. "</td></tr>";
//     echo "</table>";
//     }
    // SELECT `sr.no`, `Aadhar Number`, `Name`, `Email ID`, `Mobile Number`, `Date of Birth`, `Age`, `Gender`, `Applicant Full Name`, `Parent's/Guardian Mobile No.`, `Marital status`, `Religion`, `Caste`, `Family Annual Income`, `Do you have Income Certificate`, `Is your income certificate have barcode`, `Income Certificate No.`, `Issuing Authority`, `uploded domicile certificate`, `Are you Domicile of Maharashtra`, `Do you have Domicile Certificate`, `Relation Type`, `Is yur domicile certificate have barcode`, `Domicile certificate no.`, `Domicile applicant name`, `Issuing authoritie`, `Are you salaried`, `Disability of any type`, `Is your bank account have a limit on Withdrawl or Deposit`, `Bank Account No.`, `IFSC Code`, `Branch Name` FROM `personal_info` WHERE 
    // echo Username;
    // echo Password;

//     while($row = mysqli_fetch_array($result))
// {
//     echo 'sr.no';
// } 

    // $query=SELECT * FROM `course_details` WHERE id
    // $sql = "select *from `login` where 'sr.no' = 3"; 
    // $result = mysqli_query($conn, $sql);  
    // // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    // $count = mysqli_num_rows($result);
    // echo $count;
    // if($count!=0){
    //     echo "Records are available.";
    // }else{
    //     echo "Records are not available.";

    // }

 ?> -->