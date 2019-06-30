<?php
	
	//Start session
	session_start();
	
	//Connect to mysql server
	require "connect.php";


	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return  $str ;
	}

		//Sanitize the POST values 
		$location = clean($_POST['location']);
		$description = clean($_POST['postContent']);
		$community_name = clean($_POST['postTitle']);
		#$media = clean($_POST['media']); postTitle
 
		$UID = $_SESSION['SESS_MEMBER_ID'];


		$media= '';
		# Upload file Media
		 
		for($i=0;$i<count($_FILES["uploadFile"]["name"]);$i++)
		{
			$uploadfile=$_FILES["uploadFile"]["tmp_name"][$i];
			$folder="media/";
			
			move_uploaded_file($_FILES["uploadFile"]["tmp_name"][$i], "$folder".$_FILES["uploadFile"]["name"][$i]);

			$media = $_FILES["uploadFile"]["name"][$i];
		}
		 

		// Insert New Post  
		$conn->query("INSERT INTO communities VALUES( NULL, '$UID', '$community_name', '$description','$location', '$media')" );
		

		if ($conn->error) {
			echo "E: ".$conn->error;
		    die("Connection failed: " . $conn->error);
		}
		else{
			// Create new community table .... (suspended!)
			echo "ok";
		}
	 	
	 

?>