<?php
include 'db_connect.php';

$id=$_REQUEST['id'];

 $sql = "DELETE FROM more where mid = $id " ;
            
            $retval = mysqli_query($conn1,$sql);
            
            if(! $retval ) {
               echo "<script>alert('Record not updated');window.location.href='./index.php?page=cast';</script>";
            }
            else{
            	echo "<script>alert('Record updated');window.location.href='./index.php?page=cast';</script>";
            }
           mysqli_close($conn);
         

						
?>