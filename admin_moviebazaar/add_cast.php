<?php
$msg = "hello";

// If upload button is clicked ...

	$id=strval($_REQUEST["id"]);
    $n1=strval($_REQUEST["n1"]);
    $r1=strval($_REQUEST["r1"]);
       $b=strval($_REQUEST["b"]);   $p=strval($_REQUEST["p"]);
   
	$filename1 = $_FILES["uploadfile1"]["name"];
	$tempname1 = $_FILES["uploadfile1"]["tmp_name"];	

	$folder1 = "./assets/uploads/".$filename1;
   $n2=strval($_REQUEST["n2"]);
    $r2=strval($_REQUEST["r2"]);
   
	$filename2 = $_FILES["uploadfile2"]["name"];
	$tempname2 = $_FILES["uploadfile2"]["tmp_name"];	

	$folder2 = "./assets/uploads/".$filename2;
      $n3=strval($_REQUEST["n3"]);
    $r3=strval($_REQUEST["r3"]);
   
	$filename3 = $_FILES["uploadfile3"]["name"];
	$tempname3 = $_FILES["uploadfile3"]["tmp_name"];	

	$folder3 = "./assets/uploads/".$filename3;
    $n4=strval($_REQUEST["n4"]);
    $r4=strval($_REQUEST["r4"]);
   
	$filename4 = $_FILES["uploadfile4"]["name"];
	$tempname4 = $_FILES["uploadfile4"]["tmp_name"];	

	$folder4 = "./assets/uploads/".$filename4;

	$ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
    $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
    $ext3 = pathinfo($filename3, PATHINFO_EXTENSION);
    $ext4 = pathinfo($filename4, PATHINFO_EXTENSION);



 	
	$db = mysqli_connect("localhost", "root", "", "data");
       
		// Get all the submitted data from the form
		$sql = "INSERT INTO `more` (`mid`, `cast1`, `name1`, `image1`, `cast2`, `name2`, `image2`, `cast3`, `name3`, `image3`, `cast4`, `name4`, `image4`,`budget`,`production`) VALUES ('".$id."', '".$r1."', '".$n1."', '".$filename1."','".$r2."', '".$n2."', '".$filename2."','".$r3."', '".$n3."', '".$filename3."','".$r4."', '".$n4."', '".$filename4."', '".$b."', '".$p."');";
         
		// Execute query
		$query=mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname1, $folder1) && move_uploaded_file($tempname2, $folder2) && move_uploaded_file($tempname3, $folder3) && move_uploaded_file($tempname4, $folder4) ) {
				echo "<script>alert('Your Script uploaded')
				;window.location.href='./index.php?page=cast';</script>";
		}else{
				echo "<script>alert('Your Script is not uploaded')
				;window.location.href='./index.php?page=cast';</script>";
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