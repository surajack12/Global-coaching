<?php

//$id=$_GET['id'];
//echo $id;
include 'connect.php';


 $query1="UPDATE  `student_data_g` SET 
  `Name`='$_POST[Name]',
  `school`= '$_POST[school]',
  `phone1`='$_POST[phone1]',
  `phone2`='$_POST[phone2]',
  `class` ='$_POST[clas]',
  `medium` ='$_POST[medium]',
  `board`='$_POST[board]'
   WHERE id = '$_POST[id]'";

if (mysqli_query($conn,$query1)==TRUE)
 {
    $out="<div class='w3-center w3-text-yellow w3-margin w3-border w3-round'style='solid #156700 4px' >
    <p >Data Updated successfully</p>
  </div>";
}else
{
    $out="<div class='w3-center w3-text-yellow w3-margin w3-border w3-round'style='solid #156700 4px' >
    <p >Found some error</p>
  </div>";
}
echo $out;


?>