<!-- Fifth page database php code -->
<?php
    $conn=mysqli_connect('localhost','root','','web_tech_project');
     if(!$conn){
         die("Connection failed. Please try again.".mysqli_connect_error());
     }

     $sql="INSERT INTO `past_qualification`(`sr.no`, `Qualification Level`, `Stream`, `Completed`, `Instituate State`, `Instituate district`, `Instituate Taluka`, `College Name /School Name`, `Course`, `Board/University`, `Mode`, `Admission year`, `Passing Year`, `Result`, `Percentage`, `Attempts`, `Was Any Gap In This Qualification`) VALUES ('','$_POST[qual_level]','$_POST[stre]','$_POST[comp]','$_POST[ins_stat]','$_POST[ins_dist]','$_POST[ins_taluka]','$_POST[coll_name]','$_POST[cour]','$_POST[university]','$_POST[mod]','$_POST[adyear]','$_POST[passyear]','$_POST[result]','$_POST[percen]','$_POST[attempt]','$_POST[any_gap]')";


     $result=mysqli_query($conn,$sql);
     if($result){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Your information saved successfully. Go to next page.');
        window.location.href='sixth.html';
        </script>"); }   
        else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Error while saving the information.');
            window.location.href='fifth.html';
            </script>");
         }
mysqli_close($conn);

 ?>


