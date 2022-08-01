<!-- Fourth page database php code -->
<?php
    $conn=mysqli_connect('localhost','root','','web_tech_project');
     if(!$conn){
         die("Connection failed. Please try again.".mysqli_connect_error());
     }

     $sql="INSERT INTO `course_details`(`sr.no`, `Admission year in current course`, `Institute state`, `Institute district`, `Instituate taluka`, `Qualification level`, `Stream`, `College Name`, `Course Name`, `Admission Type`, `CET/Merit percentage/Clat score`, `Application Id/Cap id`, `Year Of study`, `Complete or Continue`, `Is professional`, `Is Admission through open or Rserved Category`, `Gap Years`, `Mode`) VALUES ('','$_POST[addyyear]','$_POST[insstate]','$_POST[insdistrict]','$_POST[instaluka]','$_POST[quallevel]','$_POST[stream]','$_POST[colname]','$_POST[coursename]','$_POST[addtype]','$_POST[cetper]','$_POST[appid]','$_POST[yearofstdy]','$_POST[comorcon]','$_POST[professional]','$_POST[category]','$_POST[gapyears]','$_POST[mode]')";

     $result=mysqli_query($conn,$sql);
     if($result){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Your information saved successfully. Go to next page.');
        window.location.href='fifth.html';
        </script>");
     }   
     else{
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Error while saving the information.');
      window.location.href='fourth.html';
      </script>");
    }
    mysqli_close($conn);

 ?>


