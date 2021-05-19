<!DOCTYPE html>
<html>
<head>
<title>BLOODBANK.IN</title>
<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>
<body id="top">
<br><br><br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- ################################################################################################ -->
		<div class="wrapper row3">
  <main class="hoc container clear"> 
   <center><h1 >Your movies</h1></center>
<br>
	      <form method="post">
<table border="0" align="center" width="400px" height="30px" >

<tr><td align="center" style="padding-top:10px">
<table border="1" align="center" width="80%" height="200px" >
<tr><th>Id </th><th align="center">Movie name</th>
<th>Category</th><th>Cast</th><th>Production Rate</th>
</tr>
<tr><td>
<?php
$cn=mysqli_connect("localhost","root","","data");
$s="select * from mov";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td style='padding-left:10px'>$data[0]</td><td  style='padding-left:30px'>$data[1]</td><td  style='padding-left:30px'>$data[2]</td><td  style='padding-left:30px'>$data[3]</td><td  style='padding-left:30px'>$data[4]</td><td  style='padding-left:30px'>$data[5]</td>
			 <td><img src="$data[6]" width="100" height="100"></td>
			</tr>";
		}
		
		
		
	
	mysqli_close($cn);

?>
</td></tr>
</table>
</table>


</form>
	</div>

<br><br><br><br><br><br><br><br><br>


	  </main>
</div>

<br><br><br><br><br><br><br><br><br>
<!-- ################################################################################################ -->

</body>

</html>



