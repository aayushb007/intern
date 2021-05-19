<?php
if(isset($_REQUEST["gg"]))
{
  include_once('db_connect.php');
    $ans1=strval($_REQUEST["ans1"]);
    $ans2=strval($_REQUEST["ans2"]);
    $ans3=strval($_REQUEST["ans3"]);
    $ans4=strval($_REQUEST["ans4"]);
    $ans5=strval($_REQUEST["ans5"]);
    $ans6=strval($_REQUEST["ans6"]);
    $ans7=strval($_REQUEST["ans7"]);
    $ans8=strval($_REQUEST["ans8"]);
    $ans9=strval($_REQUEST["ans9"]);
    $ans10=strval($_REQUEST["ans10"]);
    $ans11=strval($_REQUEST["ans11"]);
    
if ($con)
{



$query="insert into ans(`ans1`, `ans2`,`ans3`,`ans4`,`ans5`,`ans6`,`ans7`,`ans8`,`ans9`,`ans10`,`ans11`) values ('$ans1', '$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans10','$ans11')";
$re=mysqli_query($con,$query);
if ($re== 1) {
// header("location:index.php");

echo "<script>
alert('Your Answers are recorded! Successfull');
window.location.replace('../register-writer.php');
</script>";

}
else{
 //header("location:index.php");
 echo "<SCRIPT>
 alert('Your Data is not recorded !');
 window.location.replace('../QnA.php');
  </SCRIPT>";
// 

 } 


}
mysqli_close($con);
}
else
{
 //header("location:index.php");
echo "<script>alert('Server Error!');</script>";
}
?>