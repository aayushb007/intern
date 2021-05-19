<?php
$msg = "hello";

// If upload button is clicked ...

	$id=strval($_REQUEST["id"]);
    $name=strval($_REQUEST["name"]);
    $category=strval($_REQUEST["category"]);
    $rate=$_REQUEST["rate"];
    $about=strval($_REQUEST["about"]);
    $date=strval($_REQUEST["date"]);
	$write=$_REQUEST["write"];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
	$folder = "./assets/uploads/".$filename;

	$ext = pathinfo($filename, PATHINFO_EXTENSION);

 	
	$db = mysqli_connect("localhost", "root", "", "data");
       
    $sql = "UPDATE `mov` SET `name` =  '$name' , `category` =  '$category', `rate` = '$rate', `about` = '$about', `img` = '$filename', `wname` = '$write' WHERE `mid` = '$id' ";
        $res=mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder) && $res) {
				echo "<script>alert('Your Script uploaded');
				window.location.href='./index.php?page=movies';</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded');
				window.location.href='./index.php?page=movies';</script>";
	}

//$result = mysqli_query($db, "SELECT * FROM image");
?>
