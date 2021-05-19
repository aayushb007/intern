<?php session_start();  ?>
<?php

if(isset($_REQUEST["email"]) && isset($_REQUEST["pass"]))
{
$email=strval($_REQUEST["email"]);

$p=strval($_REQUEST["pass"]);
$con=mysqli_connect("localhost","root","");
//echo "$p","$email";
if ($con)
{
mysqli_select_db($con,"data");
$q="select * from writer where wemail='".$email."' and wpass='".$p."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{
    
//$query="INSERT INTO `login`( `email`, `time`) VALUES('$email','00/00/0000')";
//$re=mysqli_query($con,$query);
$_SESSION["email"]=$_REQUEST["email"];
echo "<script>alert('Login successfull !');window.location.replace('./dashboard/write.php');</script>";
} 
else{

//header("location:log1.php");
echo "<script>alert('Not successfull Try Again');window.location.replace('./register-writer.php');</script>";
}
}
mysqli_close($con);
}

?>


