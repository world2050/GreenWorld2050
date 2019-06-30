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
  		</script> </script>
  		<meta charset='UTF-8'>
  		<meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href='' /> 
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>

<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="assets/css/greenworld.css" rel="stylesheet">

		<!------ Include the above in your HEAD tag ---------->
		<link href="assets/css/chatcss.css" rel="stylesheet">

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
							<li><a href="#"><i class="glyphicon glyphicon-list"></i> Communities </a></li>
							<li><a href="blogs.php"><i class="glyphicon glyphicon-paperclip"></i> Blogs</a></li>
							<li><a href="saved.php"><i class="glyphicon glyphicon-heart-empty"></i> Saved</a></li>
							<li class="active"><a href="featured.php"><i class="glyphicon glyphicon-list-alt"></i> Featured</a></li>
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
									<a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a>
								  </li> 
								  <li>
									<a href="#newModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>New Community</a>
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
			



						<div id="frame">
							<div id="sidepanel">
								<div id="profile">
									<div class="wrap">
										<img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
										<p>
 											<?php 
			                                  if(!isset($_SESSION['SESS_MEMBER_ID'])){
			                                  	echo "Guest";
			                                   }else{ echo($_SESSION['SEE_USER']['username']); } 
			                                ?> 
										</p>
										<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
										<div id="status-options">
											<ul>
												<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
												<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
												<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
												<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
											</ul>
										</div>
										<div id="expanded">
											<label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
											<input name="twitter" type="text" value="mikeross" />
											<label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
											<input name="twitter" type="text" value="ross81" />
											<label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
											<input name="twitter" type="text" value="mike.ross" />
										</div>
									</div>
								</div>
								<div id="search">
									<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
									<input type="text" placeholder="Search communities..." />
								</div>
								<div id="contacts">
									<ul> 
									<?php
										include_once("connect.php");
										$result = $conn->query("SELECT * FROM communities ORDER BY name ASC LIMIT 15");
										while($community = $result-> fetch_assoc())
										{?>
											<li class="contact">
												<div class="wrap">
													<span class="contact-status online"></span>
													<img src="media/<?php echo($community['media']);?>" alt="" c />
													<div class="meta">
														<p class="name"><?php echo($community['name']);?></p>
														<p class="preview">
															<?php echo($community['description']);?>
																
															</p>
													</div>
												</div>
											</li>
										<?php }
									?>
									</ul>
								</div>
								<div id="bottom-bar">
									<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
									<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
								</div>
							</div>

							<div class="empty" style=""></div>

							<div class="content">
								<div class="contact-profile">
									<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
									<p>Harvey Specter</p>
									<div class="social-media">
										<i class="fa fa-facebook" aria-hidden="true"></i>
										<i class="fa fa-twitter" aria-hidden="true"></i>
										 <i class="fa fa-instagram" aria-hidden="true"></i>
									</div>
								</div>
								<div class="messages">
									<ul>
										<?php

											// Source
											$postId = '';
											$community =''  ;
											$user_id = $_SESSION['SESS_MEMBER_ID'];

												 
											// Messages  
											$conn->query("SELECT *  FROM conversations ORDER BY msgID DESC LIMIT 15 " );

											if($result){
										        while( $msg  = $result->fetch_assoc()) { ?>
										        	<li class="replies">
										                  <img src="media/arafat.jpg" alt="">
										                  <p>What are your choices when someone puts a gun to your head?</p>
										            </li>
										            <li class="sent">
										                <img src="media/arafat.jpg" alt="">
										                <p>What are you talking about? You do what they say or they shoot you.</p>
										            </li>

										        <?php } 
										    }   
										?> 
										<li class="replies">
										                  <img src="media/arafat.jpg" alt="">
										                  <p>What are your choices when someone puts a gun to your head?</p>
										            </li>
										            <li class="sent">
										                <img src="media/arafat.jpg" alt="">
										                <p>What are you talking about? You do what they say or they shoot you.</p>
										            </li>
									</ul>
								</div>
								<div class="message-input">
									<div class="wrap">
									<input type="text" placeholder="Write your message..." />
									<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
									<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>
						</div>
						<!-- /main -->
				  
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

    <!-- Profile Modal -->
    <?php include('my_profile.php');  ?> 

        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<script type="text/javascript">
		  	setInterval(function(){ updateChats(); }, 1500);
		</script>
         
</body	