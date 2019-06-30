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
    $login = clean($_POST['name']);
    $password = clean($_POST['password']);

    //Create query
    $qry="SELECT * FROM users WHERE username='$login' AND password='$password'";
    $result= $conn->query($qry);
    //while($row = $result-> fetch_assoc())
    //  {
    //  $level=$row['position'];
    //  }
        //Check whether the query was successful or not
        if($result) {
            if ($result->num_rows > 0) {
                //Login Successful
                session_regenerate_id();
                $member = $result->fetch_assoc();
                $_SESSION['SESS_MEMBER_ID'] = $member['user_id'];
                $_SESSION['SESS_FIRST_NAME'] = $member['position'];
                session_write_close();
                //if ($level="admin"){
                header("location: admin/dashboard.php");
                exit();
            }else {
                //Login failed
                header("location: index.php");
                exit();
            }
        }else {
            die("Query failed");
        }
    }

if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message'])){
    
    // Submitted form data
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $message= $_POST['message'];
    
    /*
     * Send email to admin
     */
    $to     = 'patrieno55@gmail.com';
    $subject= 'Contact Request Submitted';
    
    $htmlContent = '
    <h4>Contact request has submitted at CodexWorld, details are given below.</h4>
    <table cellspacing="0" style="width: 300px; height: 200px;">
        <tr>
            <th>Name:</th><td>'.$name.'</td>
        </tr>
        <tr style="background-color: #e0e0e0;">
            <th>Email:</th><td>'.$email.'</td>
        </tr>
        <tr>
            <th>Message:</th><td>'.$message.'</td>
        </tr>
    </table>';
    
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // Additional headers
    $headers .= 'From: CodexWorld<sender@example.com>' . "\r\n";
    
    // Send email
    if(mail($to,$subject,$htmlContent,$headers)){
        $status = 'ok';
    }else{
        $status = 'err';
    }
    
    // Output status
    echo $status;die;
}


?>