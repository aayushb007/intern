<?php
include 'db_connect.php';

$id=strval($_REQUEST['id']);

 $sql = "DELETE FROM registration where email = '$id' " ;
            
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               echo "<script>alert('Record not updated');window.location.href='./index.php?page=reg_list';</script>";
            }
            else{
            	echo "<script>alert('Record updated');window.location.href='./index.php?page=reg_list';</script>";
            }
           mysqli_close($conn);
         

						
?>