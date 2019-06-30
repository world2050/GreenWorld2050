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
	
	if(isset($_POST['signupFrmSubmit'])){
		//Sanitize the POST values 
		$username = clean($_POST['name']);
		$phone = clean($_POST['phone']);
		$email = clean($_POST['email']);
		$password = clean($_POST['password']); 

		#$password = hash('ripemd160', $password);
		# hash password sith SHA256 Algorithms
		$password = hash('sha256', $password);

		//Create new user 
		$conn->query("INSERT INTO users VALUES(NULL,'$username','$phone','$email','$password')" );

		if ($conn->error) {
			echo "E: ".$conn->error;
		    die("Connection failed: " . $conn->error);
		} 
		
		
		//Fetch user Id user 
		$result= $conn->query("SELECT user_Id,username from users WHERE password='$password'");
		//Check whether the query was successful or not
		if($result) {
			if ($result->num_rows > 0) {
				//Login Successful
				session_regenerate_id();
				$member = $result->fetch_assoc();
				$_SESSION['SESS_MEMBER_ID'] = $member['user_Id'];
				$_SESSION['SESS_FIRST_NAME'] = $member['username'];
				session_write_close();
				
				//if ($level="admin"){
				//header("location: index.php");

				// CREATE A TABLE FOT THIS USE

				// sql to create table
				$my_accountID = 'user'.$member['user_Id'];
				$sql = "CREATE TABLE $my_accountID (
						id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
						saved_posts VARCHAR(30) NOT NULL,
						my_coms VARCHAR(30) NOT NULL 
						)";

				if ($conn->query($sql) === FALSE) {
				    echo "Error creating table: " . $conn->error;
				} 

				echo "ok";
				die();
			}else {
				//Login failed
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
?>