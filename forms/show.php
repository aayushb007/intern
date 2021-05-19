

<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"data");
$q="select * from mov";
$result=mysqli_query($con,$q);
?>

<table border="1" cellpadding="5" cellspacing="5">
<tr> <th>Image</th></tr>

<?php

while($row = mysqli_fetch_array($result))
 {

$id = $row['mid'];

?>
    <tr>

        <td><img src="uploads/<?php echo $row['img'];?>" alt=" " height="200" width="330"></td>

   </tr>

<?php   

}

?>
</table>