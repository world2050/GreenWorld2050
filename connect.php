<?php 
$prefix = ""; 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "greenworld";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


# Fetch user 
function this_user($conn,$uid){

    $result = $conn->query("SELECT * FROM users WHERE user_id = '$uid'");
    if($result){
        $row = $result->fetch_assoc();

        
        if ($row['username']==''){
            echo "Anon";
        }else{
            echo $row['username'];
        }
        return;

    } 

    echo "Anon";
    return;
}
# About the community 
function about_location($conn,$com){

    $result = $conn->query("SELECT description FROM communities WHERE name = '$com'");
    if($result){
        $row = $result->fetch_assoc();

        
        if ($row['description']==''){
            echo "No information found about this community";
        }else{
            echo $row['description'];
        }
        return;

    } 

    echo "No information found about this community";
    return;
}


### Reduce long strings to shorter 
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}

?>
 
