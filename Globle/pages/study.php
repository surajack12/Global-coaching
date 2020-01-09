
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
  <meta charset="UTF-8">
  <meta name="description " content="Best coaching classes">
  <meta name="keywords" content="coaching , bhopal ,globle , 10th,11th,12th,commerce,suraj sahu">
  <meta name="author" content="suraj sahu">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Globle coaching classes</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat&display=swap" rel="stylesheet">
  
 
  <style>

 h1,h2,h3,h4,h5{
  font-family: 'merriweather',serif;
 }
 body{
  font-family: 'montserrat', sans-serif;
  background-color: #f3f3f3 !important;
  

 }
 </style>
<body>
    <div>
        <img src="../webImg/logo.png" alt="globle coaching logo" class="w3-image w3-margin " style="width:10%">
        <span class="w3-xlarge">Globle coaching classes</span>
    </div>
    <div class="w3-bar w3-green">
        <button class="btn btn-primary w3-right">Back</button>
    </div>
    <div class="  w3-center">
    <div class="  w3-white w3-padding">
        <h2>Study material</h2>
        <div class="w3-container w3-center">
            <table class="w3-col s11 l12 m12 w3-center w3-table-all ">
                <thead>
                    <tr style="background-color:rgba(118, 160, 79, 0.2)">
                        <th>Sno.</th>
                        <th>Document</th>
                        <th>Download</th>
                        <th>Date of upload</th>
                    </tr>
                </thead>
                <tfoot>
                    <?php 
                        include 'connect.php';
                        $quer="SELECT * FROM std_docx";
                        $run=mysqli_query($conn,$quer);
                        $u=0;
                        if (mysqli_num_rows($run)>0) 
                        {
                        
                            while ( $row=mysqli_fetch_array($run)) 
                            { 
                               $u++; 
                         ?>
                        <tr>
                        <td><?php echo $u; ?></td>
                        <td><?php echo $row['dname']; ?></td>
                        <td><a href="../documents/<?php echo  $row['docs']; ?>">Download </a></td>
                        <td><?php echo $row['date']; ?></td>
                    </tr>
                    <?php
                    }
                }else
                { echo "data not inserted";
                    
                }
                    ?>
                </tfoot>
            </table>
        </div>
    </div>
  </div>
</body>
</html>