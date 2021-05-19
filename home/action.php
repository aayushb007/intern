<?php
if(isset($_REQUEST["gg"]))
{
$f=strval($_REQUEST["fname"]);
$email=strval($_REQUEST["email"]);
$sub=strval($_REQUEST["subject"]);
$msg=strval($_REQUEST["message"]);
include_once('../forms/db_connect.php');
if ($con)
{



$query="insert into contact (`fname`,`email`, `subject`, `message`) values ('$f','$email', '$sub', '$msg')";
$re=mysqli_query($con,$query);

if ($re) {
// header("location:index.php");
echo "<SCRIPT>
alert('Your Data is recorded we will contact you as soon as possible')
window.location.replace('./contact.php');
</SCRIPT>";

}
else{
 //header("location:index.php");
 echo "<SCRIPT>
 alert('Your Data is not recorded retry after some time!')
 window.location.replace('./contact.php');
 </SCRIPT>";
 
 } 
}

mysqli_close($con);
}
else
{
 //header("location:index.php");
echo "<script>alert('Invalid Capcha');</script>";
}
?>

