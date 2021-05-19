<?php
if(isset($_REQUEST["gg"]))
{
    
    
$name=strval($_REQUEST["name"]);
$email=strval($_REQUEST["email"]);
$pass=strval($_REQUEST["pass"]);
$cpass=strval($_REQUEST["cpass"]);
$phone=$_REQUEST["phone"];
include_once('db_connect.php');


if ($con)
{
	echo "hello";



$q="select * from writer where wemail='".$email."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1)
{
    echo "<script>
alert('Already Registered');
window.location.replace('../register-writer.php');
</script>";

}
$query="INSERT INTO `writer` ( `wemail`, `wname`, `wpass`, `wcpass`, `wphone`, `wprofile`) VALUES ( '$email', '$name','$pass','$cpass', $phone, '');";
$query1="INSERT INTO `writer_statistic` ( `wemail`, `submit`, `approved`, `made`, `earn`) VALUES ('$email' , '0', '0', '0', '0');";

$re=mysqli_query($con,$query);
$re1=mysqli_query($con,$query1);
if ($re) {
    echo "hello";
// header("location:index.php");
echo "<script>
alert('Fill this form !');
window.location.replace('../QnA.php');
</script>";
//
}
else{
 //header("location:index.php");
 echo "<script>
 alert('sign up not successfull! )
 window.location.replace('../register-writer.php');
 </script>";
// window.location.replace('./index.php');
 
 } 

}

mysqli_close($con);
}

else
{
 //header("location:index.php");
echo "<script>alert('Server Error');
 window.location.replace('../register-writer.php');
</script>";
}
?>


