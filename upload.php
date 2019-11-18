<?php
require_once('conn.php');

//Checks if the image name and the image file have been posted
if (isset($_POST['image_name']) && isset($_FILES['image'])) {
	//Assigns the posted values to the corresponding variables
	$image_name = $_POST['image_name'];
	
	//Starts the processing of images
	$current_dir = getcwd();//Identifies the current directory
    $upload_directory = "/images/uploads/"; //Sets the path for the uploaded images to the folder images/uploads
	$errors = []; // Stores all foreseen and unforseen errors in an array

    $file_extensions = ['jpeg','jpg','png','JPEG','JPG','PNG']; // Declares all the approved file extensions
    $file_name = $_FILES['image']['name']; //Gets the original name of the file
    $file_size = $_FILES['image']['size']; //Gets the size of the file
    $file_tmp_name  = $_FILES['image']['tmp_name']; //Gets the temporary name assigned to the file while processing
    $file_type = $_FILES['image']['type']; //Gets the file type
	$tmp = explode('.', $file_name);
	$file_extension = end($tmp);
	
	//Sets the upload path from the current directory, adds a random number to the beginning of the filename of the returned filename from the specified pathto avoid duplicated names 
	$upload_path = $current_dir . $upload_directory . rand(1, 1000) . basename($file_name); 
	$target_file = $upload_directory . rand(1, 1000) . basename($file_name);
	
	//Checks if the submit button has been pressed and performs the necessary tests on the file
	if (isset($_POST['submit'])) {
		//Checks the file extension agains the approved ones, if the user tries to upload a file type that is not in the list stores an error message in the errors array
        if (!in_array($file_extension, $file_extensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG, JPG or PNG file";
        }
		
		//Checks the file size against 2000000 (2MB), if the user tries to upload a file that is larger than 2MB stores an error message in the errors array
		if ($file_size > 20000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }
		
		//Checks if the errors array is empty and if so, moves the file to the given path
		if (empty($errors)) {
            $did_upload = move_uploaded_file($file_tmp_name, $upload_path);
			//Checks if the file was moved and gives the user a message about it
			if ($did_upload) {
				$filename = basename($upload_path); //extracts the new filename
				$image_path = "." . $upload_directory . $filename; //creates the path to be added to the database
				
				//if the file moving failed gives an error (this error normally means that the folder doesn't have Read/Write permissions)
            } else {
                echo "An error occurred somewhere. Try again.";
            }
			
			//Inserts the image name, image description and image path to the table upload and gives the user a message
			$query = "INSERT INTO product(image_name, image_link) VALUES('$image_name', '$image_path')";
			$result = mysqli_query($con, $query);
			if (!$result) die (mysqli_error($con));
			else {
				echo "<div class='message'>";
				echo "<h2 class='success'>Your image has been uploaded!</h2>";
				echo "<img src='" . $image_path . "' alt='" . $image_name . "' class='img-thumbnail'>";
				echo "</div>";
			}
			        } 
		else {
			//If the file is not an image or larger than 2MB it informs the user and returns to the form.
            foreach ($errors as $error) {
                echo "<script>alert('" . $error . "');
				window.location.href='upload_1.php';
				</script>";
				die();
            	}
			}
	}
}

?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Eva Sørum Poulsen">
		<meta name="generator" content="Jekyll v3.8.5">
		<title>Upload Images Example</title>
		<!-- Bootstrap core CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<!--Font Awsome (for icons)-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
		<!-- Custom styles for this template -->
		<link href="styles/style.css" rel="stylesheet" type="text/css"> </head>

	<body class="text-center">
		<div class="container">
			<div class="logo"><img src="images/logo.svg" width="100" alt="Upload!"></div>
			<div class="row">
				<h3 class="title-form">Upload et billede af dit legetøj</h3> </div>
			<!-- Forms that are used to process files require the enctype="multipart/form-data" attribute to be able to process the files -->
			<form action="upload.php" method="post" enctype="multipart/form-data" class="form form-upload">
				<input type="file" name="image" class="choose-file">
				<!--The file will be contained in a $_FILE[] variable called image -->
				<div class="row">
					<div class="col-md">
						<input type="text" name="image_name" placeholder="Image Name" class="image-name" required> </div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-submit" type="submit" name="submit">Upload</button>
					</div>
				</div>
			</form>
		</div>
	</body>

	</html>