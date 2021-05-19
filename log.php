<?php session_start();  ?>
<?php

if(isset($_REQUEST["email"]) && isset($_REQUEST["pass"]))
{
   // echo"Hello World";
$email=strval($_REQUEST["email"]);
$id=$_REQUEST["id"];
$p=strval($_REQUEST["pass"]);
include_once('./forms/db_connect.php');
//echo "$p","$email";
if ($con)
{
  // echo"Hello World";
mysqli_select_db($con,"data");
$q="SELECT * FROM registration WHERE email='".$email."' AND pass='".$p."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{ // echo"Hello World";
    $_SESSION["id"]=$_REQUEST["email"];
    if($id==1){
        $mid=$_REQUEST["mid"];
        echo "<script>alert('Login successfull !');window.location.replace('./more.php?mid=$mid');</script>";
    }
    else{
        
        echo "<script>alert('Login successfull !');window.location.replace('./home-test.php');</script>";
    }
  
//$query="INSERT INTO `login`( `email`, `time`) VALUES('$email','00/00/0000')";
//$re=mysqli_query($con,$query);


} 
else{

//header("location:log1.php");
echo "<script>alert('Try Again!');window.location.replace('./home-test.php');</script>";
}
}
mysqli_close($con);
}

?>



<?php
/*
if(isset($_REQUEST["email"]) && isset($_REQUEST["pass"]))
{
    echo"Hello World";
$email=strval($_REQUEST["email"]);
$_SESSION["email"]=$_REQUEST["email"];
$p=strval($_REQUEST["pass"]);
$con=mysqli_connect("localhost","root","");
//echo "$p","$email";
if ($con)
{
    echo"Hello World";
mysqli_select_db($con,"data");
$q="select * from registration where email='".$email."' and pass='".$p."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{
    
$query="insert into login values('".$email."',now())";
$re=mysqli_query($con,$query);
if ($re) {
echo "<script>alert('Login successfull !')window.location.replace('./more.php');</script>";
}
else{
echo "<script>alert('Please Enter you correct email and password id!')window.location.replace('./login.php');</script>";
 } 
} 
else{

//header("location:log1.php");
echo "<script>alert('Error in database')window.location.replace('./login.php');</script>";
}
}
mysqli_close($con);
}
*/
?>

