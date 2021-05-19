<?php
include 'db_connect.php';

$id=$_REQUEST['email'];

 $sql = "DELETE FROM login where `email` = '".strval($_REQUEST['email'])."' " ;
            
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               echo "<script>alert('Record not updated');</script>";
            }
            else{
            	echo "<script>alert('Record updated');</script>";
            }
           mysqli_close($conn);
         

						
?>