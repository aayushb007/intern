<?php
			
	 $db = mysqli_connect("localhost", "root", "", "data");
  $q="select * from registration where email='".$_REQUEST["email"]."'";
  $result=mysqli_query($db,$q);
	$r=mysqli_num_rows($result);
	
	$data=mysqli_fetch_array($result);
	
	//$pass=$r[];
	
	echo $data[5];
	mysqli_close($db);
	
		
		
	
	

?> 