<?php

//for admin account create
include("connect.php");
if(isset($_POST['cret_ac']))
{

$pass=sha1($_POST['password']);
$sql="INSERT INTO `admin_g`( `Name`, `Phone`, `pass`,`type`) VALUES ('$_POST[uName]','$_POST[Phone]', '$pass','$_POST[type]')";
$query=mysqli_query($conn,$sql);
if($query==true)
{
    echo"<script>
    alert('Account created successfully!                                                            _REQUIRED PERMISSION FROM MASTER TO BE AN ADMIN _');
    window.open('../pages','_self');
    </script>";


}else{
    echo"<script>
    alert('ERROR_time out');
    </script>";
}
}
if(isset($_POST['ad_log']))
{
    $a=0;
    $pas=sha1($_POST['user_l_pass']);

    $query=" SELECT * from admin_g where `Name` like '%$_POST[user_l_name]%'";
    $run = mysqli_query($conn,$query);
     $row = mysqli_fetch_assoc($run);  // get data from database
          
          
    
        if( $row['pass'] == $pas)
        {
            if($row['status']== 'active')
            {
            echo"<script>alert('Login Successfully')</script>";
            $id=$row['id'];                    //For dispay the id 
	        session_start();
            $_SESSION['uid']=$id;
            $TY=md5($row['type']);
            header("location:dashboard.php?ty=$TY");
            }else
            {
                echo"<script>alert('SORRY ! Your account is not been activated!!'); window.open('../pages/','_self')</script>";
            }   
        }else{
             echo"<script>alert('You entered wrong Password/Username.     PLESE TRY AGAIN');
             window.open('../pages/','_self')</script>";
        }
  }

?>