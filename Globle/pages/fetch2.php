<?php
include 'connect.php';


 $query1="INSERT INTO `student_data_g`( `Name`, `school`, `phone1`, `phone2`, `class`, `medium`, `board`) VALUES ('$_POST[Name]','$_POST[school]','$_POST[phone1]','$_POST[phone2]','$_POST[clas]','$_POST[medium]','$_POST[board]')";

       
  if(mysqli_query($conn,$query1))
  {
    $out="<div class='w3-center w3-text-yellow w3-margin w3-border w3-round'style='solid #156700 4px' >
    <p onload='lo.style.display= none'>Data inserted</p>
  </div>";
  } 
    else
  {
    $out="<div class='w3-center w3-text-yellow w3-margin w3-border w3-round'style='solid #156700 4px' >
    <p onload='lo.style.display= none'>Data not inserted</p>
  </div>";
    }
echo $out;

?>