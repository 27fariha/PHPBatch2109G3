<?php
$db = mysqli_connect("localhost", "root", "", "test");
// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "C:/xampp/htdocs/batch2109g3/images/" . $filename;

	// Get all the submitted data from the form
	$sql = "INSERT INTO imageupload (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
</head>

<body>
		<form method="POST" action="" enctype="multipart/form-data">
			
				<input  type="file" name="uploadfile" value="" />
			
		
				<button  type="submit" name="upload">UPLOAD</button>
			
		</form>
<div>
<?php
$sql1="SELECT * FROM imageupload";
$result=mysqli_query($db, $sql1);
while($data=mysqli_fetch_assoc($result)){
?>
<img src="./images/<?php echo $data['filename']?>" height="20px"; width="40px"/>
<?php
}
?>


</div>

</body>

</html>
