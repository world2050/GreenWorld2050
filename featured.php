<?php  session_start(); /*Start session */  ?>
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
								<a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a>
							  </li>
							  <li>
								<a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>Green-Call</a>
							  </li>
							  <li>
								<a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>New Community</a>
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
								  <li><a href="">Profile</a></li>
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
					<div class="row">
                        <?php include('post_cards.php');  ?> 
						
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
				  <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
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
        });
        </script>
</body></html>