<?php
include 'action.php';


$query12="INSERT INTO  student_query_g(`email`, `name`, `query`) VALUES ('$_POST[email]','$_POST[name]','$_POST[query]')";
if(mysqli_query($conn,$query12))
{
  
  
   $out="
    <div class='w3-center w3-text-yellow w3-margin w3-border w3-round'style='solid #156700 4px' >
    <p onload='lo.style.display= none'>Massage is sended successfully</p>
  </div>
    ";
  
}else
{
    $out="
    <div class='w3-center w3-text-red w3-margin w3-border w3-round'style='solid red 4px' >
    <p onload=lo.style.display= none'>Massage is not send sended</p>
  </div>
    ";
}


echo $out;

?>