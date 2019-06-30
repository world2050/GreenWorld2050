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
		$title = clean($_POST['postTitle']);
		$content = clean($_POST['postContent']);
		$location = clean($_POST['location']);
		#$media = clean($_POST['media']); 
 
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
		 

		// Inser New Post  
		$conn->query("INSERT INTO post VALUES( NULL, '$UID', '$title', '$content', '$location', '$media')" );
		

		if ($conn->error) {
			echo "E: ".$conn->error;
		    die("Connection failed: " . $conn->error);
		}
		else{
			echo "ok";
		}
	 	
	 

?>