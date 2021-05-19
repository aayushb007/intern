<?php
$msg = "hello";
include 'db_connect.php';

// If upload button is clicked ...

	$id=strval($_REQUEST["id"]);
    $name=strval($_REQUEST["name"]);
    $category=strval($_REQUEST["category"]);
    $rate=$_REQUEST["rate"];
	$write=$_REQUEST["write"];
    $about=strval($_REQUEST["about"]);
    $date=strval($_REQUEST["date"]);
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
	$folder = "../forms/uploads".$filename;

	$ext = pathinfo($filename, PATHINFO_EXTENSION);

 	
	
       
		// Get all the submitted data from the form
		$sql = "INSERT INTO mov (mid,name,category,rate,about,date,img,wname) VALUES ('$id','$name','$category',$rate,'$about','$date','$filename','$write')";
         
		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
				echo "<script>alert('Your Script uploaded')
				;window.location.href='./index.php?page=movies';</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded')
				;window.location.href='./index.php?page=movies';</script>";
	}

//$result = mysqli_query($db, "SELECT * FROM image");
?>

<?php
/*$msg = "hello";window.location.replace('index.php?page=new_movie')

// If upload button is clicked ...
if (isset($_REQUEST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
	$folder = "uploads/".$filename;

	$ext = pathinfo($filename, PATHINFO_EXTENSION);

echo $ext;
		
	$db = mysqli_connect("localhost", "root", "", "data");
       
		// Get all the submitted data from the form
		$sql = "INSERT INTO scripts (script) VALUES ('$filename')";
         
		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
				echo "<script>alert('Your Script uploaded');</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded');</script>";
	}
}*/
//$result = mysqli_query($db, "SELECT * FROM image");
?>