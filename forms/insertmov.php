<?php
if(isset($_REQUEST["gg"]))
{
$name=strval($_REQUEST["name"]);
$category=strval($_REQUEST["category"]);
$review=strval($_REQUEST["review"]);
$cast=strval($_REQUEST["cast"]);
$prod=$_REQUEST["prod"];
$con=mysqli_connect("localhost","root",""); 
 if ($con)
{

mysqli_select_db($con,"data");

$query="insert into movie  (`mname`, `mcategory`, `mcast`, `mproduction`) values ('$name', '$category', '$cast', '$prod')";

$re=mysqli_query($con,$query);

if ($re) {
// header("location:index.php");
echo "<script>
alert('Data is recorded!')
window.location.replace('./insertmov.html');
</script>";
//
}
else{
 //header("location:index.php");
 echo "<script>
 alert('Might be error!')
 window.location.replace('./insertmov.html');
 </script>";
// window.location.replace('./index.php');
 
 } 
}

mysqli_close($con);

}
else{
	echo "not get data";
}