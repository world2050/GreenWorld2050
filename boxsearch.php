<?php
include('connect.php');
if($_POST)
{
	$q=$_POST['searchword'];
	$q=str_replace("@","",$q);
	$q=str_replace(" ","%",$q);


	$sql = "SELECT * FROM usser_data where fname like '%$q%' or lname like '%$q%' order by uid LIMIT 5";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
			$fname=$row['fname'];
			$lname=$row['lname'];
			$img=$row['img'];
			$country=$row['country'];
	    } 
	?>
	<div class="display_box" >
	<img src="media/<?php echo $img; ?>" class="image" />
	<a href="#" class='addname' title='<?php echo $fname; ?>&nbsp;<?php echo $lname; ?>'>
	<?php echo $fname; ?>&nbsp;<?php echo $lname; ?> </a>
	</div>
	<?php
	}
}
?>