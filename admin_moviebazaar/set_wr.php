<?php
$msg = "hello";

// If upload button is clicked ...
$no=$_REQUEST['no'];
	$email=strval($_REQUEST["email"]);
    $name=strval($_REQUEST["name"]);
    $status=strval($_REQUEST["status"]);
     $result=strval($_REQUEST["result"]);
   
    $date=strval($_REQUEST["date"]);
	
 	
	$db = mysqli_connect("localhost", "root", "", "data");
       
    $sql = "UPDATE writer_stories SET `submit` = '".$date."',`name`='".$name."', `result` = '".$result."', `status` = '".$status."' WHERE `no` = ".$no.";";
        $res=mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if ($res) {
				echo "<script>alert('Your Script uploaded');
				window.location.href='./index.php?page=writer_result';</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded');
				window.location.href='./index.php?page=writer_result';</script>";
	}

//$result = mysqli_query($db, "SELECT * FROM image");
?>
