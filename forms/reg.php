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
	//echo "hello";


$q="SELECT * FROM registration where email='".$email."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
    if ($num==1)
    {
            echo "<script>
            alert('Already Registered');
            window.location.replace('../register.html');
            </script>";

        }
        if($pass==$cpass){
$query="INSERT INTO registration (`name`, `email`, `phone`, `pass`,`cpass`) VALUES ('$name', '$email', $phone, '$pass','$cpass')";
$query1="INSERT INTO `invest` (`email`, `total`, `active`, `profit`, `issue`) VALUES ('$email', '0', '0', '0', '0')";

$re=mysqli_query($con,$query);
$re1=mysqli_query($con,$query1);
if ($re) {
    //echo "hello";
// header("location:index.php");
echo "<script>
alert('Sign in successfull!');
window.location.replace('../register.html');
</script>";
//
}
else{
 //header("location:index.php");
 echo "<script>
 alert('sign in not successfull! You're already registered)
 window.location.replace('../register.html');
 </script>";
// window.location.replace('./index.php');
 
 } 
}
else{
    echo "<script>
 alert('conform password is not matched with password')
 window.location.replace('../register.html');
 </script>";

}

}

mysqli_close($con);
}

else
{
 //header("location:index.php");
echo "<script>alert('Server Error');
 window.location.replace('../register.html');
</script>";
}
?>


