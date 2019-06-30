<?php 
	include_once("connect.php");
	$sql = "SELECT *  FROM post ORDER BY PID DESC LIMIT 15";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$col_count = 0;
	$open_rows = 0;
	while( $record = mysqli_fetch_assoc($resultset) ) {
	
		if($col_count==0){echo '<div class="row">'; $open_rows = 1;}
		?>
			<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="<?php echo('media/'.$record['media']); ?>" class="img-responsive">
							<div class="overlay">
								<button type="button" class="btn btn-secondary" title=""><i class="fa fa-facebook"></i></button>
								<button type="button" class="btn btn-secondary" title=""><i class="fa fa-twitter"></i></button>
								<button type="button" class="btn btn-secondary" title=""><i class="fa fa-instagram"></i></button>
							</div>
						</div>
					</div>
					<div class="panel-body">


					  <p class="lead">
					  	<!-- You can add target="_blank" to this link to open the post on  a new tab.  -->
					  	<a  href="green-call.php?post=<?php echo $record['PID']; ?>"> <?php echo $record['title']; ?></a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker"><?php echo $record['location']; ?></a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	<?php this_user($conn, $record['PID']); ?>
						  </li>
						  <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Donate or support this green call">
						  	<button class="btn-sm btn-link">
					  			<img src="assets/img/donation.png" class="avatar">
						  	</button>
						  </li>
						  <li class="list-inline-item">
						  	<button class="btn-sm btn-link" data-toggle="tooltip" data-placement="top" title="Join the 81 who already volunteered">
					  			<img src="assets/img/volunteer.png" class="avatar"> volunteer
						  	</button>
						  </li>
						</ul> 
					  </p>
					   
					</div>
				</div>
			</div> 
	<?php 
	if($col_count==1){
		echo"</div>";/*End of row*/ 
		echo"<div class='clearfix'></div>";/*Apply a clearfix*/ 
		$col_count=0;
		$open_rows = 0; 
	}else{ $col_count++; } 
} /*End of Whlile*/

###  close any open row
if($open_rows == 1){
		echo"</div>";/*End of row*/ 
		echo"<div class='clearfix'></div>";/*Apply a clearfix*/ 
		$col_count=0; 
	}
?>
<script type="text/javascript">
	
      $(document).ready(function() {
			$('[data-toggle=offcanvas]').click(function() {
				$(this).toggleClass('visible-xs text-center');
				$(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
				$('.row-offcanvas').toggleClass('active');
				$('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
				$('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
				$('#btnShow').toggle();
			});

	        // Enable tooltips
	        $(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			});

			 
        });
</script>