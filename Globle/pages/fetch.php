<?php
//fetch.php
session_start();
include 'connect.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM  student_data_g
  WHERE Name LIKE '%".$search."%'
  OR school LIKE '%".$search."%' 
  OR phone1 LIKE '%".$search."%' 
  OR phone2 LIKE '%".$search."%' 
  OR medium LIKE '%".$search."%'
  OR board LIKE '%".$search."%'
  OR class LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM student_data_g ORDER BY id
 ";
}
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name</th>
     <th>School</th>
     <th>Class</th>
     <th>BOARD</th>
     <th>Medium</th>
     <th>Phone No.</th>
     <th>Contact </th>
     <th> Update </th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  
  $output .= '
   <tr >
    <td>'.$row["Name"].'</td>
    <td>'.$row["school"].'</td>
    <td>'.$row["class"].'</td>
    <td>'.$row["board"].'</td>
    <td>'.$row["medium"].'</td>
    <td>'.$row["phone1"].'</td>
    <td>'.$row["phone2"].'</td>
    <td><a href="update.php?id='.$row["id"].'" class="w3-button w3-green"> Update</a></td>
    </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
