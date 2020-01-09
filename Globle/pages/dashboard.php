<?php
include 'connect.php';
session_start();
$ty=$_GET['ty'];
if(isset($_SESSION['uid']))
{
    echo '';
}else
{
    header('location:index.html');
}

?>
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
  .atho{
      display:inline;
  }
  body{
  font-family: 'montserrat', sans-serif;
  background-color: #f3f3f3 !important;
  font-size: 16px;

 }
 h1,h2,h3,h4,h5{
  font-family: 'merriweather',serif;
  
 }
 
     
 @media screen and (max-width:600px) {
 .spac{
    margin-top: 576px!important;
 }
     
 }
  </style>
</head>
<body>
    <div class="w3-center w3-hide-large">
                <img src="../webImg/logo.png" alt="globle coaching logo" class="w3-image w3-margin " style="width:20%"><br>
                <span class="w3-xlarge">Globle coaching classes</span>
            </div>
            <div class=" w3-hide-small w3-hide-medium">
                <img src="../webImg/logo.png" alt="globle coaching logo" class="w3-image w3-margin " style="width:7%">
                <span class="w3-xxlarge">Globle coaching classes</span>
            </div>
    <div class="w3-bar w3-green  w3-hide-large w3-hide-medium " id="bar" onclick="this.style.display='none'">
        <button class="w3-bar-item w3-button" onclick="sidebar.style.display='block';" > <i class="w3-large fa fa-bars"></i> </button>
        <a href="../pages"><button class="w3-right w3-button"> Back</button></a>
    </div>
    <div class="w3-bar w3-green w3-hide-small  ">
        
        <button class="w3-bar-item w3-button" onclick="hideBox();searStu.style.display='block'">Student</button>
        <button class="w3-bar-item w3-button w3-bar"  onclick="hideBox();formp.style.display='block'">Add Student</button>
        <button class="w3-bar-item w3-button w3-bar" onclick="hideBox();updocs.style.display='block'">Upload docs</button>
        <button class="w3-bar-item w3-button">Gallary</button>
        <button class="w3-bar-item w3-button">Comments/Quary</button>
        <button class="w3-bar-item w3-button w3-bar atho"  onclick="hideBox();thorit.style.display='block'">Athority</button>
        <button class="w3-bar-item w3-button w3-blue w3-right"><a href="logout.php"> LOG OUT </a></button>
        <a href="../pages"><button class="w3-right  w3-bar-item w3-button">Home</button></a>
        
    </div>
<div class="w3-row">
        <!--------SIDEBAR------>
        <div class="col w3-overlay s3 w3-sidebar w3-hide-large w3-hide-medium w3-left  w3-green w3-round w3-animate-left" style="display: none" id="sidebar"  onclick="this.style.display='none';bar.style.display='block'"  >
            <div class="w3-center">
                <img src="../webImg/logo.png" alt="globle coaching logo" class="w3-image w3-margin " style="width:20%"><br>
                <span class="w3-xlarge">Globle coaching classes</span>
            </div>
            <span class="w3-button w3-hover-blue w3-right w3-xxlarge"> &times; </span>

            <button class="w3-bar-item w3-button w3-bar" onclick="hideBox();searStu.style.display='block'">Student</button>
            <button class="w3-bar-item w3-button w3-bar" onclick="hideBox();formp.style.display='block'">Add Student</button>
            <button class="w3-bar-item w3-button w3-bar" onclick="hideBox();updocs.style.display='block'">Upload docs</button>
            <button class="w3-bar-item w3-button w3-bar">Gallary</button>
            <button class="w3-bar-item w3-button w3-bar">Comments/Quary</button>
            <button class="w3-bar-item w3-button w3-bar atho" onclick="hideBox();thorit.style.display='block'" >Athority</button>
            <button class="w3-bar-item w3-button w3-blue w3-bar"><a href="logout.php"> LOG OUT </a></button>
        </div>
<!-----search  box for students--------------------->
        <div class="container" id="searStu" >
         <br />

             <div class="w3-bar  w3-margin w3-round" >
                 <span class="w3-button w3-large w3-right w3-margin w3-red" >Delete</span>
                 <span class="w3-button w3-large w3-right w3-margin w3-green" onclick="modal01.style.display='block'">Update</span>
      
             </div>

         <h2 align="center">Student Details</h2><br />
         <p id="iddtaa"></p>

         <div class="form-group">
          <div class="input-group">
              
          <label class="input-group-addon w3-button w3-blue w3-round" for="search_text">Search</label>
           <input type="text" name="search_text" id="search_text" placeholder="Search by Student Details" class="form-control" />
           
          </div>
          <div class="w3-border w3-padding w3-border-green w3-round" id="result"></div>   
        </div>
                 <br />
            
            <!------Popup box----->
            <div id="modal01" class="w3-modal  w3-display-container" style="display: none;">
                    
                      <div class="w3-modal-content w3-animate-zoom  w3-transparent " >
                          <div class="w3-col l5 m8 s11  w3-display-middle" id="box1" style="display: block;top: 6%;" >                                                                                        
                            <div class="w3-container  w3-white w3-border  w3-padding w3-round spac" style="filter: drop-shadow(2px 4px 6px black);margin-top: 469px;">      
                                <?php
                                $quer="SELECT * FROM student_data_g where id =3";
                                $rn=mysqli_query($conn,$quer);
                                $data=mysqli_fetch_array($rn);
                                
                                
                                ?>
                                <div class="w3-bar w3-green w3-padding w3-center "><h2>Update</h2></div>
                                <form action="update.php" method="post" id="insertform">
                                                            
                                <span class="w3-text-red w3-small">Name </span>
                                <input type="text" value="<?php echo $data['Name']?>" name="Name" title="Name" class="w3-input w3-padding  w3-border">
                                <span class="w3-text-red w3-small">School </span>
                                <input type="text" value="<?php echo $data['school']?>" name="school" title="School name" class="w3-input w3-padding  w3-border">
                                <span class="w3-text-red w3-small">Phone Number </span>
                                <input type="text" value="<?php echo $data['phone1']?>" name="phone1" title="Phone Number" class="w3-input w3-padding w3-border">
                                <span class="w3-text-red w3-small">Phone Number 2 </span>
                                <input type="text" value="<?php echo $data['phone2']?>"  name="phone2" title="Phone Number"  class="w3-input w3-padding  w3-border">
                                <span class="w3-text-red w3-small">Class </span>
                                <input type="text" value="<?php echo $data['class']?>"  name="clas" title="Class" class="w3-input w3-padding  w3-border">
                                <span class="w3-text-red w3-small">Medium</span>
                                <input type="text" value="<?php echo $data['medium']?>" name="medium" title="Medium" class="w3-input w3-padding w3-border">
                                <span class="w3-text-red w3-small">BOARD  </span>
                                <input type="text" value="<?php echo $data['board']?>" name="board" title="Board" class="w3-input w3-padding  w3-border"><br>
                                <input type="hidden" value="<?php echo $data['id']?>" name="id">                               
                                <button  class="w3-btn w3-green" id="subq">UPDATE </button>
                                <span  class="w3-button w3-large w3-red w3-right w3-large w3-margin-bottom" title="Close Modal Image" onclick="modal01.style.display='none';showpage()" >Close</span>
                                <span id="resul"></span>


                                </form>
                                <script>
                                        $('#insertform').submit(function(){
                                          return false;
                                        });
                                        $('#subq').click(function(){  //$.post(location of sql query, input data to send into databases , status which is in if_else condition );
                                          $.post($('#insertform').attr('action'),	$('#insertform :input').serializeArray(),	function(resul){$('#resul').html(resul);});
                                          $('insertform:input:text').val(''); 
                                         
                                        });
                                        
                                        
                                        </script>

                            </div>
                       
                        </div>
                     </div>
            </div>
            <!--------End of popup box-->
        </div>
            
<!---------->
    <!----------Insert student detail form------------>
        <div class="w3-margin w3-margin-bottom" style="display: none;margin-bottom: 400px!important " id="formp" >
                <div class="w3-container w3-white w3-card w3-padding w3-round ">
                                                         
                  <form  method="post" class="w3-form" id="formval">
                        <h2 class="w3-bol">Enter the student datails</h2>
                    <br><input type="text"    required="required" placeholder="Name" id="Name" name="Name" class="form-control was-validated  ">
                    <br><input type="text"   required="required" placeholder="School name" id="school" name="school" class="form-control was-validated  ">
                    <br><input type="text"  minlength="10" maxlength="13"   required="required" placeholder="Contact Number" id='phone1'  name="phone1" class="form-control was-validated  ">
                    <br><input type="text" minlength="10" maxlength="13"  required="required" placeholder="Other contact Number" id="phone2"  name="phone2" class="form-control was-validated  ">
                    <br><input type="number" max="12"  pattern="0-9"  required="required" placeholder="Class"  name="class" id="class" class="form-control was-validated  ">
                    <br><input type="text"   required="required" placeholder="Medium" id="medium" name="medium" class="form-control was-validated  ">
                    <br><input type="text"   required="required" placeholder="CBSE/MP board/ICSE/NCERT" id="board" name="board" class="form-control was-validated  ">
                    <br><button  class="btn btn-outline-info" name="stuData"  id="stuData" >Submit</button>
                    <button type="reset" class="btn btn-outline-warning"  >Reset data</button>
                    <div id="live"></div>
                  </form>
                 

                </div>
         </div>
         

         <!----UPLOAD docs------------->
         <div class="w3-margin w3-container w3-white w3-round" id="updocs" style="display: none;margin-bottom: 400px!important">
             <form action="#" enctype="multipart/form-data" method="post">
                <h3> Upload document</h3><br>
                <div class="custom-file">
                <input type="file" name="docx"  id="validcost" class="custom-file-input" title="document size should be less then 2MB" required/>
                <label class="custom-file-label"for="validcost">Select Document..</label>
                <div class="invalid-feedback ">Brows..</div>
                </div><br><br>
                <input type="text" name="docxname" class="form-control was-validated" placeholder="Document name" required><br>
               
                <button type="submit" class="btn btn-info" name="upfile">UPLOAD</button>
             </form>
         </div>
         <?php
         if(isset($_POST['upfile']))
         {
           if($_FILES['docx']['error']>0)
           {
               echo"Error:".$_FILES['docx']['error']."<br>";
               echo "<script>alert('Image sige is too larger')   </script>";

           }else
           {
               $validext = array('.docs','.pdf','.docx','.dox');
               $fileext =strrchr($_FILES['docx']['name'],".");
               if(in_array($fileext,$validext))
               {
                   $docname=$_FILES['docx']['name'];
                   $tmpdname=$_FILES['docx']['tmp_name'];
                   $date = date("j - n - 20y ");
                    $qury="INSERT INTO std_docx (`docs`,`dname`,`date`) VALUES ('$docname','$_POST[docxname]', '$date')";
                    
                    if(mysqli_query($conn,$qury))
                    {
                        move_uploaded_file($tmpdname ,"../documents/$docname");
                        echo "<script>alert('File successfully inserted')   </script>";
                    }else{
                        echo "<script>alert('db problem! :-(')   </script>";
                    }
               }else{
                echo "<script>alert('File is invalid! :-(')   </script>";
               }

           }


         }
         
         ?>
         <!-------->
         
         <div class="w3-margin w3-container w3-white" id="thorit" style="display: none;margin-bottom: 400px!important">
            <div class="table-responsive">
                <h2>For master admin</h2>
                <table class="table w3-table-hover">
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>User Name</th>
                            <th>Phone</th>
                            <th>Type</th>
                            <th>Status</th>

                           </tr>
                    </thead>
                    <tfoot>

                        <?php 
                        include 'connect.php';
                        $quer="SELECT * FROM admin_g";
                        $run=mysqli_query($conn,$quer);
                        $u=0;
                        if (mysqli_num_rows($run)>0) {
                        {
                            while ( $row=mysqli_fetch_array($run)) 
                            {
                                $u++;                   
                                ?>
                                <tr>
                                    <td><?php echo $u?></td>
                                    <td><?php echo $row['Name']?></td>
                                    <td><?php echo $row['Phone']?></td>
                                    <td><?php echo $row['type']?></td>
                                    <form action="#" method="POST">
                                        <input type="hide"  name="actde" value="<?php echo $row['status'];?>" >
                                    <td><button class="w3-btn w3-blue"  name="change" title="Click to convert Deactive to active"><?php echo $row['status'];?></button></td>
                                     </form>   
                                <?php
                                //Hear the active is convert into deactive and vice verse
                                if (isset($_POST['change'])) 
                                {
                                    if($_POST['actde']=='active')
                                   {
                                        $qry="UPDATE admin_g set status='deactive' where Name = '$row[Name]'";
                                
                                   }else if($_POST['actde']=='deactive')
                                   {
                                    $qry="UPDATE admin_g set status='active' where Name = '$row[Name]'";
                                   }
                                   mysqli_query($conn,$qry);
                                }   
                            }
                            
                        }

                        }

                        ?>
                    </tfoot>
                </table>
            </div> 

         </div>

</div>


    
</body>
</html>
<script>
    var a='<?php echo $ty ?>';
    $(document).ready(function()
    { if(a =='958153f1b8b96ec4c4eb2147429105d9')
        {$('.atho').hide();}
        
       
        });
        $(document).ready(function(){

load_data();

function load_data(query)
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{query:query},
  success:function(data)
  {
   $('#result').html(data);
  }
 });
}
$('#search_text').keyup(function(){
 var search = $(this).val();
 if(search != '')
 {
  load_data(search);
 }
 else
 {
  load_data();
 }
});

$('#stuData').on('click',function(){
                    var Name=$('#Name').val();
                    var school=$('#school').val();
                    var phone1=$('#phone1').val();
                    var phone2=$('#phone2').val();
                    var clas = $('#class').val();
                    var medium=$('#medium').val();
                    var board=$('#board').val();
                   
                    $.ajax({
                            url:"fetch2.php",
                            method:"POST",
                            data:{
                                Name:Name,
                                school:school,
                                phone1:phone1,
                                phone2:phone2,
                                clas:clas,
                                medium:medium,
                                board:board
                                },
                            cache:false,

                            success:function(data)
                            {
                                var data =JSON.parse(data);
                                if(data.statusCode==200)
                                {
                                    
                                    $('#formval').find('input:text').val('');

                                }else if(data.statusCode==201){
                                    alert("Error found");
                                }            
                            }
                        });
                   });
                   
                   
                  
});

function hideBox()
{
    document.getElementById('formp').style.display='none';
    document.getElementById('searStu').style.display='none';
    document.getElementById('updocs').style.display='none';    
    document.getElementById('thorit').style.display='none';    
    
}
</script>








