<?php
$msg = "hello";
session_start();
// If upload button is clicked ...
if (isset($_REQUEST['upload'])) {
    $id=$_SESSION['email'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
	$folder = "../forms/uploads/".$filename;

	$ext = pathinfo($filename, PATHINFO_EXTENSION);

   if(($ext == 'gif' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'ppt' || $ext == 'pptx' || $ext == 'doc' || $ext == 'dox')){
   	echo "<script>alert('Your File is must be in PDF format')
   	window.location.replace('./upload.html');</script>";
   }
   else{	
	$db = mysqli_connect("localhost", "root", "", "data");
       
		// Get all the submitted data from the form
		$sql = "INSERT INTO scripts (wid,script) VALUES ('$id','$filename')";
         
		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
				echo "<script>alert('Your Script uploaded')
				window.location.replace('./write.php');</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded! Some Error occur')
				;window.location.replace('./write.php');</script>";
	}}
}
//$result = mysqli_query($db, "SELECT * FROM image");
?>

<?php
/*$msg = "hello";

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