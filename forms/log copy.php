<?php session_start();  ?>
<?php
if(isset($_REQUEST["gg"]))
{
$email=strval($_REQUEST["email"]);
$_SESSION["email"]=$_REQUEST["email"];
$p=strval($_REQUEST["pass"]);
$con=mysqli_connect("localhost","root","");
//echo "$p","$email";
if ($con)
{
mysqli_select_db($con,"data");
$q="select * from registration where email='".$email."' and pass='".$p."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{
$query="insert into login values('".$email."',now())";
$re=mysqli_query($con,$query);
if ($re) {
    header("location:../more.html");   
echo "<script>alert('Login successfull !')window.location.replace('../more.html');</script>";
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

?>

