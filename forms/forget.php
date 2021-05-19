
<?php
if(isset($_REQUEST["gg"]))
{

$email=strval($_REQUEST["email"]);

$con=mysqli_connect("localhost","root","");
//echo "$p","$email";
if ($con)
{
mysqli_select_db($con,"data");
$q="select * from registration where email='".$email."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
echo $num;
if ($num==1)
{
header("location:login.html");

echo "<script>alert('Check your Email!')window.location.replace('./login.html');</script>";
} 
else{
echo "<script>alert('Please enter Valid email ID') window.location.replace('./login.html');</script>";
}

}
else{
echo "<script>alert('Please enter Valid email ID') window.location.replace('./login.html');</script>";
}

mysqli_close($con);
}
?>