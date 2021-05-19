<?php
if(isset($_REQUEST["gg"]))
{

$name=strval($_REQUEST["name"]);
$email=strval($_REQUEST["email"]);
$rating=$_REQUEST["rating"];
echo $rating;
$msg=strval($_REQUEST["message"]);
$con=mysqli_connect("localhost","root","");
if ($con)
{

mysqli_select_db($con,"data");

$query="insert into visit_feedback (`name`, `email`,`message`,`rating`) values ('$name', '$email','$msg',$rating)";
$re=mysqli_query($con,$query);
echo $re;
if ($re) {
// header("location:index.php");
echo "<SCRIPT>
alert('Your feedback is recorded !')
window.location.replace('../feedback.html');
</SCRIPT>";

}
else{
 //header("location:index.php");
 echo "<SCRIPT>
 alert('Your Data is not recorded !')
 window.location.replace('../feedback.html');
  </SCRIPT>";
// 

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

