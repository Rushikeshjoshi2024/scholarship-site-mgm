<!-- First page database php code -->
<?php
    $conn=mysqli_connect('localhost','root','','web_tech_project');
     if(!$conn){
         die("Connection failed. Please try again.".mysqli_connect_error());
     }
     $sql="INSERT INTO `personal_info`(`sr.no`, `Aadhar Number`, `Name`, `Email ID`, `Mobile Number`, `Date of Birth`, `Age`, `Gender`, `Applicant Full Name`, `Parent's/Guardian Mobile No.`, `Marital status`, `Religion`, `Caste`, `Family Annual Income`, `Do you have Income Certificate`, `Is your income certificate have barcode`, `Income Certificate No.`, `Issuing Authority`,`Are you Domicile of Maharashtra`, `Do you have Domicile Certificate`, `Relation Type`, `Is yur domicile certificate have barcode`, `Domicile certificate no.`, `Domicile applicant name`, `Issuing authoritie`,`Are you salaried`, `Disability of any type`, `Is your bank account have a limit on Withdrawl or Deposit`, `Bank Account No.`, `IFSC Code`, `Branch Name`) VALUES ('','$_POST[aadhar_number]','$_POST[name]','$_POST[email]','$_POST[mobile_number]','$_POST[date_of_birth]','$_POST[age]','$_POST[gender]','$_POST[applicant_full_name]','$_POST[parents_mobile_number]','$_POST[marital_status]','$_POST[religion]','$_POST[caste]','$_POST[family_annual_income]','$_POST[having_income_certificate]','$_POST[certificate]','$_POST[income_certificate_number]','$_POST[issuing_authority]','$_POST[domicile]','$_POST[have_domicile_certificate]','$_POST[relation_type]','$_POST[domicile_certificate_received]','$_POST[domicile_certificate_no]','$_POST[domicile_applicant_name]','$_POST[domicile_issuing_authority]','$_POST[salaried]','$_POST[disability]','$_POST[aadhar_bank_linked]','$_POST[bank_account_no]','$_POST[ifsc_code]','$_POST[branch_name]')";

     $result=mysqli_query($conn,$sql);
     if($result){
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Your information saved successfully. Go to next page.');
            window.location.href='second.html';
            </script>");
        }   
        else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Error while saving the information.');
        window.location.href='first.html';
        </script>");
        }
 mysqli_close($conn);
 ?>