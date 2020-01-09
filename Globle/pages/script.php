<?php
                                //Hear  active is convert into deactive and vice verse
                               include 'connect.php';
                                    if($_POST['actde']=='active')
                                   {
                                        $qry="UPDATE admin_g set status='deactive' where Name = '$row[Name]'";
                                
                                   }else if($_POST['actde']=='deactive')
                                   {
                                    $qry="UPDATE admin_g set status='active' where Name = '$row[Name]'";
                                   }
                                   mysqli_query($conn,$qry);
                                   
                                ?>