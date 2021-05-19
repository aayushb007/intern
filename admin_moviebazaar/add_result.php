<?php
$msg = "hello";

// If upload button is clicked ...

	$id=strval($_REQUEST["id"]);
    $name=strval($_REQUEST["name"]);
    $status=strval($_REQUEST["status"]);
   
    $date=strval($_REQUEST["date"]);
      $amount=strval($_REQUEST["amount"]);
	
 	
	$db = mysqli_connect("localhost", "root", "", "data");
       
		// Get all the submitted data from the form
		$sql = "INSERT INTO `invest_result` (`id`, `title`, `amount`, `status`, `date`) VALUES ('".$id."', '".$name."', '".$amount."', '".$status."', '".$date."')";
         
		// Execute query
		$res=mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if ($res) {
				echo "<script>alert('Your Script uploaded')
				;window.location.href='./index.php?page=new_result';</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded')
				;</script>";
	}

//$result = mysqli_query($db, "SELECT * FROM image");
?>
