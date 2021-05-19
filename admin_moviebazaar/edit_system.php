<?php
include 'db_connect.php';

$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact']; 
$address=$_REQUEST['address'];
 $sql = "UPDATE system_settings SET name = '".$name."',email = '".$email."',contact ='".$contact."',address='".$address."' WHERE id = 1;" ;
            
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               echo "<script>alert('Record not updated');</script>";
            }
            else{
            	echo "<script>alert('Record updated');</script>";
            }
            header("location:./index.php?page=site");
            mysqli_close($conn);
         

						
?>