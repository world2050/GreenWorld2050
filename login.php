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
	
	if(isset($_POST['loginFrmSubmit'])){
		//Sanitize the POST values  
		$email = clean($_POST['email']);
		$password = clean($_POST['password']);  

		#$password = hash('ripemd160', $password);
		# hash password sith SHA256 Algorithms
		$password = hash('sha256', $password);
 
		//Fetch user Id user 
		$result= $conn->query("SELECT * from users WHERE email='$email' AND password='$password'");
	//Check whether the query was successful or not
	if($result) {
		if ($result->num_rows > 0) {
			//Login Successful
			session_regenerate_id();
			$member = $result->fetch_assoc();
			$_SESSION['SESS_MEMBER_ID'] = $member['user_id'];
			$_SESSION['SEE_USER'] = $member;
			session_write_close();

			echo "ok";
			die();
		}else {
			//Login failed
				echo $conn->error;

				die(); 
		}
	}else {
		die("Query failed");
	}
}
?>