<?php 
	if (isset($_POST['submit'])) {
		$file = $_FILES['file'];
		$name = $_FILES['file']['name']; //Find file name
		$tmp_name = $_FILES['file']['tmp_name']; //Find file temp loc
		$size = $_FILES['file']['size']; //Find file size
		$error = $_FILES['file']['error']; //Find file error

		//Explode from punctuation mark
		$tempExtension = explode('.', $name);

		$fileExtension = strtolower(end($tempExtension));

		//Allowed extensions
		$isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

		// 0 = no error - 1 = error
		if (in_array($fileExtension, $isAllowed)){
			if ($error === 0) {
				if ($size < 100000) {
					$newFileName = uniqid('', true) . "." . $fileExtension;
					$fileDestination = "uploads/" . $newFileName;
					move_uploaded_file($tmp_name, $fileDestination);
					header("Location: files.php?uploadedsuccess");
				} else {
					echo "Sorry, your file size is too big!";
				}
			} else{
				echo "Sorry, there was an error! Try is again";
			}
		} else {
			echo "Sorry, your file type is not accepted";
		}
	}

// ------

// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 5000000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" && $imageFileType != "pdf") {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }



?>