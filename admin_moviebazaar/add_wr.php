<?php
$msg = "hello";

// If upload button is clicked ...

	$email=strval($_REQUEST["email"]);
    $name=strval($_REQUEST["name"]);
    $status=strval($_REQUEST["status"]);
     $result=strval($_REQUEST["result"]);
   
    $date=strval($_REQUEST["date"]);
     
	
 	
	$db = mysqli_connect("localhost", "root", "", "data");
       
		// Get all the submitted data from the form
		$sql = "INSERT INTO `writer_stories` (`wemail`, `name`, `submit`, `result`, `status`) VALUES ('".$email."', '".$name."', '".$date."', '".$result."', '".$status."');";
         
		// Execute query
		$res=mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if ($res) {
				echo "<script>alert('Your Script uploaded')
				;window.location.href='./index.php?page=new_wr';</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded')
				;</script>";
	}

//$result = mysqli_query($db, "SELECT * FROM image");
?>
