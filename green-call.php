<?php  session_start(); /*Start session */  $_SESSION['msgID'] = '' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>COMMUNITIES |GREENWORLD2050</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="assets/css/greenworld.css" rel="stylesheet">
        <link href="assets/css/chat.css" rel="stylesheet"> 

    </head>
    
    <body>
        
        <div class="wrapper">
			<div class="box">
				<div class="row row-offcanvas row-offcanvas-left">
					
					<!-- sidebar -->
					<div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
					  
						<ul class="nav">
							<li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
						</ul>
					   
						<ul class="nav hidden-xs" id="lg-menu">
							<li><a href="communities.php"><i class="glyphicon glyphicon-list"></i> Communities </a></li>
							<li><a href="blogs.php"><i class="glyphicon glyphicon-paperclip"></i> Blogs</a></li>
							<li><a href="saved.php"><i class="glyphicon glyphicon-heart-empty"></i> Saved</a></li>
							<li class="active"><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Featured</a></li>
							<li><a href="partners.php"><i class="fa fa-users"></i> Partners</a></li>
							
						</ul>
						<ul class="list-unstyled hidden-xs" id="sidebar-footer">
							<li>
							  <a href="#"><i class="glyphicon glyphicon-heart-empty"></i>GreenWorld2050</a>
							</li>
						</ul>
					  
						<!-- tiny only nav-->
					  <ul class="nav visible-xs" id="xs-menu">
							<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
							<li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
							<li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
							<li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
						</ul>
					  
					</div>
					<!-- /sidebar -->
				  
					<!-- main right col -->
					<div class="column col-sm-10 col-xs-11" id="main">
                        
                        <!-- top nav -->
                        <div class="navbar navbar-blue navbar-static-top">  
                            <div class="navbar-header">
                              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a href="index.php" class="navbar-brand logo">G</a>
                              
                            </div>
                            <nav class="collapse navbar-collapse" role="navigation">
                              <form class="navbar-form navbar-left">
                                  <div class="input-group input-group-sm" style="max-width:360px;">
                                    <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                                    <div class="input-group-btn">
                                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                  </div>
                              </form>
                              <ul class="nav navbar-nav">
                                <li>
                                  <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
                                </li>
                                <li>
                                  <a href="#postModal" role="button" data-toggle="modal"> <i class="glyphicon glyphicon-plus"></i> &nbsp;Green-Call</a>
                                </li>
                               
                              </ul>
                              <ul class="nav navbar-nav navbar-right">
                                <li>
                                  <?php 
                                  if(!isset($_SESSION['SESS_MEMBER_ID'])){?>
                                      <a class="btn btn-link" href="#"  data-toggle="modal" data-target="#signupModalForm">Join the Green Movement Today!</a>
                                      
                                     <?php 
                                   }else{
                                    ?>
                                       <a class="btn btn-link" href="#profileModal" role="button"  data-toggle="modal"> <?php echo($_SESSION['SEE_USER']['username']);?></a>
                                  <?php } ?>

                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#profileModal" role="button"  data-toggle="modal">Profile</a></li>
                                      <li><a href="">Settings</a></li>
                                      <li><a href="logout.php">LogOut</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </nav>
                        </div>
                        <!-- /top nav -->
				<div class="full col-sm-9">
							  
					<!-- content -->                      
					<div class="row" >
                    <?php 
						include_once("connect.php");
						$PID = $_GET['post'];
						$sql = "SELECT *  FROM post WHERE PID='$PID'";
						$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
						while( $record = mysqli_fetch_assoc($resultset) ) {
						?>
							<input type="hidden" name="postId" id="postId" value="<?php echo $PID ?>">
							<input type="hidden" name="postCommunity" id="postCommunity"  value="<?php echo $record['location']; ?>">
							<div class="col-lg-8"   style="max-height:all;">
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
									<p>
										<a href="#"> <?php echo $record['title']; ?></a>
										<a href="#" class="pull-right glyphicon glyphicon-map-marker" data-toggle="tooltip" data-placement="bottom" title="<?php about_location($conn,$record['location']); ?>">
											<?php echo $record['location']; ?>
												
											</a>

									</p> 
									  <p>
									  	<ul class="list-inline">
										    <li class="list-inline-item" data-toggle="tooltip"  data-placement="right" title="Mimi ni member, je wewe?">
										  		<i class="fa fa-user-circle-o" aria-hidden="true"></i>
										  		<?php this_user($conn, $record['PID']); ?>
										    </li>
										    <li class="list-inline-item">
										  		&nbsp;&nbsp;&nbsp;&nbsp;
										    </li>
											<li class="list-inline-item">
											  	<button class="btn-sm btn-link"  data-toggle="tooltip" data-placement="bottom" title="Donate or support this green call">
										  			<img src="assets/img/donation.png" class="avatar"> Support
											  	</button>
											</li>
											<li class="list-inline-item">
											  	<button class="btn-sm btn-link" data-toggle="tooltip" data-placement="bottom" title="Join the 81 who already volunteered">
										  			<img src="assets/img/volunteer.png" class="avatar"> volunteer
											  	</button>
											</li>
										    <li class="list-inline-item">
										   			<button class="btn-sm btn-link" data-toggle="tooltip" data-placement="bottom" title="Like and save to you featured list"> 
										   				<i class="glyphicon glyphicon-heart" ></i> Bookmark
										   			</button>
										   	</li>    
										</ul> 
									  </p> 

									  <hr>                 
									  <p>
									  	<?php echo $record['content']; ?>
									  </p>

									</div>

								</div>
							</div>

					<?php } ?>


					<div class="col-lg-4 well"> 
					<div id="join">
						<h4>What's on your mind...?</h4>
						<div class="form-group" style="padding:14px;">
						  	<textarea class="form-control" placeholder="Join the conversation now..." data-toggle="tooltip" data-placement="top" title="Please join the conversation" readonly></textarea>
						</div>
						<button class="btn btn-success pull-right join" type="button" 
						>Join the conversation</button>

						<ul class="list-inline">
							<li>
								<a href="">
									<i class="glyphicon glyphicon-upload"></i>
								</a>
							</li>
							<li><a href=""><i class="fa fa-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
							<hr> 
					</div>
					<form class="form-horizontal collapse" role="form" id="chats">
							
							<button class="btn btn-primary btn-sm  join" id="" type="button">Close conversations </button>
							<button class="btn btn-primary btn-sm  join" id="" type="button"><span class="badge">99 </span> Members </button>
							<button class="btn btn-success btn-sm  join" id="" type="button"><span class="badge">23 </span> Online </button>
							<div  class="panel">
								<!-- <div class="postMsg">Debug: </div>  -->
							  	
								<div class="messages"  style="max-height: 77vh;">
									<ul class="inbox">
										<li class="sent">
											<p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
										</li>
										<li class="replies">
											<p>When you're backed against the wall, break the god damn thing down.</p>
										</li>
										<li class="replies">
											<p>Excuses don't win championships.</p>
										</li>
										<li class="sent">
											<p>Oh yeah, did Michael Jordan tell you that?</p>
										</li>
										<li class="replies">
											<p>No, I told him that.</p>
										</li>
										<li class="replies">
											<img src="media/arafat.jpg" alt="" />
											<p>What are your choices when someone puts a gun to your head?</p>
										</li>
										<li class="sent">
											<img src="media/arafat.jpg" alt="" />
											<p>What are you talking about? You do what they say or they shoot you.</p>
										</li>
										<li class="replies">
											<p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
										</li>
									</ul>
								</div>
								<div class="message-input">
									<div class="wrap">
										<input type="text" class="new-message" name="msg" placeholder="Write your message..."  /> 
										<button type="button" class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>
					  </form>
				  </div>

						
					</div>
					</div>

					<!-- /main -->
				  
				</div>
			</div>
		</div>


		<!--post modal-->
		<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog">
		  <div class="modal-content">
			  <div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					Place a Green Call
			  </div>
			  <div class="modal-body">
				  <form class="form center-block">
					<div class="form-group">
					  <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
					</div>
				  </form>
			  </div>
			  <div class="modal-footer">
				  <div> 
					<ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
				  </div>	
			  </div>
		  </div>
		  </div>
		</div>

		



        <!--post modal-->
        <div class="modal fade" id="postModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-header bg-success">
                       <button type="button" class="close" data-dismiss="modal" class="btn btn-danger">
                            <span aria-hidden="true" class="btn btn-danger">&times;</span>
                            <span class="sr-only">Close</span>
                        </button> 
                        <h4 class="h4 text-center ">MAKE A COMMUNIY GREEN CALL</h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <?php include('frm.php');  ?> 
                    </div>
                    
            
                </div>
            </div>
        </div>


        <!--Create new community modal-->
        <div class="modal fade" id="newModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-header bg-success">
                       <button type="button" class="close" data-dismiss="modal" class="btn btn-danger">
                            <span aria-hidden="true" class="btn btn-danger">&times;</span>
                            <span class="sr-only">Close</span>
                        </button> 
                        <h4 class="h4 text-center ">CREATE A COMMUNIY</h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <?php include('communityForm.php');  ?> 
                    </div> 
                </div>
            </div>
        </div>


        <!-- Profile Modal -->
        <?php include('my_profile.php');  ?>

        <!--- Tag Plugin --->

        <?php //include('tagfriends.html');  ?> 

        <!-- Signup | Login  pages -->
        <?php   include('accounts_modal.php');  ?> 





        
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>

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

			$(".join").click(function() {
			    $("#join").toggleClass("collapse");
			    $("#chats").toggleClass("collapse");

				$(".messages").animate({ scrollTop: $(document).height() }, "fast");

		        $('.message-input input').focus();
			});
        });


		  // Auto refresh chats
		  setInterval(function(){ updateChats(); }, 1500);

		</script>
</body>
</html>