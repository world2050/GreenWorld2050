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

### Submit Message
if(isset($_POST['submitMsg'])){
		//Sanitize the POST values 
		$message = clean($_POST['msg']);
		$postId = clean($_POST['postId']);
		$community = clean($_POST['community']);
		 
 
		$user_id = $_SESSION['SESS_MEMBER_ID'];

 
		// Insert New Message  
		$conn->query("INSERT INTO conversations(msgID, user_id, post_id, community, messages) VALUES( NULL, '$user_id', '$postId', '$community', '$message' )" );
		

		if ($conn->error) {
			echo "E: ".$conn->error;
		    die("Connection failed: " . $conn->error);
		}
		else{
			echo "ok";
		}	

}

if(isset($_POST['getMsgs'])){
		 
	// Check Last Message  
	$result =  $conn->query("SELECT msgID, messages, user_id  FROM conversations ORDER BY msgID DESC LIMIT 1" );

	if($result){
        $msg = $result->fetch_assoc(); 


        if($msg['msgID'] != $_SESSION['msgID'] && $msg['user_id'] != $_SESSION['SESS_MEMBER_ID'])
        {
            $_SESSION['msgID'] = $msg['msgID'];
            echo $msg['messages'] ;

        }else{echo("skip"); }

	}else{echo "failed to load message!";} 
		
}
 
/*
if(isset($_POST['getAllMsgs'])){

	// Source
	$postId = clean($_POST['postId']);
	$community = clean($_POST['community']);
	$user_id = $_SESSION['SESS_MEMBER_ID'];

		 
	// Messages  
	$result = $conn->query("SELECT *  FROM conversations ORDER BY msgID DESC LIMIT 15 " );

	if($result){
        $msgs = $result->fetch_assoc(); 
    }else{echo "skip";} 
}   
*/

?>