<?php


if(isset($_POST['submitImage']))
{
 	$media= '';
	for($i=0;$i<count($_FILES["uploadFile"]["name"]);$i++)
	{
		$uploadfile=$_FILES["uploadFile"]["tmp_name"][$i];
		$folder="media/";
		
		move_uploaded_file($_FILES["uploadFile"]["tmp_name"][$i], "$folder".$_FILES["uploadFile"]["name"][$i]);

		$sql = "INSERT INTO posts (files) VALUES ('john@example.com')";


		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$media = $media +','+ $folder.$_FILES["uploadFile"]["name"][$i];
		#$conn->query("INSERT INTO posts (files) VALUES ('$file_name' )");


	}
	#exit();
}


?>

















<?php

# old version code
#if(isset($_POST['submitImage']))
#{

	/*
	 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    $status = "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        $status= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        die;
	    } else {
	        $status= "Sorry, there was an error uploading your file.";
	        die;

	    }
	}
 
    // Output status
    echo $status;die;

    
    include("connect.php");
    include("posts.php");

	for($i=0;$i<count($_FILES["uploadFile"]["name"]);$i++)
	{
		$uploadfile=$_FILES["uploadFile"]["tmp_name"][$i];
		$folder="media/";
		
		move_uploaded_file($_FILES["uploadFile"]["tmp_name"][$i], "$folder".$_FILES["uploadFile"]["name"][$i]);

		$sql = "INSERT INTO posts (files) VALUES ('john@example.com')";


		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$file_name = $folder.$_FILES["uploadFile"]["name"][$i];
		$conn->query("INSERT INTO posts (files) VALUES ('$file_name' )");


	}
	exit();
}

*/
?>