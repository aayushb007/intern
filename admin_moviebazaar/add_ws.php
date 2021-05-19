<?php
$msg = "hello";

// If upload button is clicked ...

	$email=strval($_REQUEST["email"]);
    $approve=strval($_REQUEST["approved"]);
    $made=strval($_REQUEST["made"]);
     $earn=strval($_REQUEST["earn"]);
   
    $submit=strval($_REQUEST["submit"]);
     
	
 	
	$db = mysqli_connect("localhost", "root", "", "data");
       
		// Get all the submitted data from the form
		$sql = "INSERT INTO `writer_statistic` ( `wemail`, `submit`, `approved`, `made`, `earn`) VALUES ( '".$email."', '".$submit."', '".$approve."', '".$made."', '".$earn."')";
         
		// Execute query
		$res=mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if ($res) {
				echo "<script>alert('Your Script uploaded')
				;window.location.href='./index.php?page=writer_statistic';</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded')
				;window.location.href='./index.php?page=writer_statistic';</script>";
	}

//$result = mysqli_query($db, "SELECT * FROM image");
?>
