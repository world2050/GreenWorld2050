
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>HOME |GREENWORLD2050</title>
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
                            <li><a href="communities.php"><i class="glyphicon glyphicon-list"></i>  Communities </a></li>
                            <li><a href="blogs.php"><i class="glyphicon glyphicon-book"></i>  Blogs</a></li>
                            <li><a href="saved.php"><i class="glyphicon glyphicon-heart-empty"></i>  Saved</a></li>
                            <li class="active"><a href="featured.php"><i class="glyphicon glyphicon-list-alt"></i>  Featured</a></li>

                            <li><a href="partners.php"><i class="fa fa-users"></i>  Partners</a></li>
                        </ul>
                        <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                            <li>
                              <a href="#"> <i class="glyphicon glyphicon-heart-empty"></i> GreenWorld2050</a>
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
                                                                         <a class="btn btn-link" href="#profileModal" role="button"  data-toggle="modal"> Patrick</a>
                                  
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
                      
                        <div class="padding">
                            <div class="full col-sm-9">
                              
                                <!-- content -->                      
                                <div class="row">
                                  
                                 <!-- main col left --> 
                                 <div class="col-sm-7">
                                     
			<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/mainWindow.png" class="img-responsive">
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
					  	<a  href="green-call.php?post=16"> Initiative</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">Memon</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/daylight_vision.jpg" class="img-responsive">
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
					  	<a  href="green-call.php?post=15"> New comm</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">new Orleans</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
	<div class='clearfix'></div>			<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/daylight_vision.jpg" class="img-responsive">
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
					  	<a  href="green-call.php?post=14"> new post</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">Four Plus</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/the4Fathers.jpg" class="img-responsive">
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
					  	<a  href="green-call.php?post=13"> My Title...</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">TUM</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/the4Fathers.jpg" class="img-responsive">
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
					  	<a  href="green-call.php?post=12"> My Title...</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">TUM</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
	<div class='clearfix'></div>			<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/the4Fathers.jpg" class="img-responsive">
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
					  	<a  href="green-call.php?post=11"> My Title...</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">TUM</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/the4Fathers.jpg" class="img-responsive">
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
					  	<a  href="green-call.php?post=10"> My Title...</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">TUM</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/chafu3.jpeg" class="img-responsive">
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
					  	<a  href="green-call.php?post=9"> A COMMUNIY GREEN CALL</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">Kongowea</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
	<div class='clearfix'></div>			<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/screenshot7.png" class="img-responsive">
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
					  	<a  href="green-call.php?post=8"> HASSAN</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">HERE</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/the4Fathers.jpg" class="img-responsive">
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
					  	<a  href="green-call.php?post=7"> This test</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">home</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Anon						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/logo2.png" class="img-responsive">
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
					  	<a  href="green-call.php?post=6"> BRANCE TECHNOLOGIES TREE PLANTING INITIATIVE</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">@Mazeras</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	new						  </li>
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
	<div class='clearfix'></div>			<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/tech-startup-roles-cso.gif" class="img-responsive">
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
					  	<a  href="green-call.php?post=5"> henry</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">new Orleans</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Mimo						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/Brance.png" class="img-responsive">
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
					  	<a  href="green-call.php?post=4"> New new test</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">final location</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	John Doe						  </li>
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
				<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/NUC.jpg" class="img-responsive">
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
					  	<a  href="green-call.php?post=2"> Test</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">Memon</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Patrick						  </li>
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
	<div class='clearfix'></div>			<div class="col-lg-6">
				<div class="panel panel-default">

					<div class="panel-thumbnail">
						<div class="product-top">
								<img src="media/tech-startup-roles-ceo.gif" class="img-responsive">
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
					  	<a  href="green-call.php?post=1"> Yogesh Singh</a> 
					  	<a href="#" class="pull-right glyphicon glyphicon-map-marker">SV</a> 
					  </p>
					  <p>
					  	<ul class="list-inline">
						  <li class="list-inline-item">
						  	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						  	Patrick						  </li>
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
                                  </div>
                                  


                                  <!-- main col right -->
                                  <div class="col-sm-4">
                                       
                                       <div class="panel panel-default">
                                         <div class="panel-heading"><a href="blogs.php" class="pull-right">View more</a> <h4>FROM THE BLOG</h4></div>
                                          <div class="panel-body">
                                            <p><img src="assets/img/150x150.gif" class="img-circle pull-right"> <a href="#">The Bootstrap Playground</a></p>
                                            <div class="clearfix"></div>
                                            <hr>
                                            Design, build, test, and prototype 
        using Bootstrap in real-time from your Web browser. Bootply combines the
         power of hand-coded HTML, CSS and JavaScript with the benefits of 
        responsive design using Bootstrap. Find and showcase Bootstrap-ready 
        snippets in the 100% free Bootply.com code repository.
                                          </div>
                                       </div>
                                    
                                        <div class="panel panel-default">
                                        <div class="panel-thumbnail"><img src="assets/img/chafu4.jpeg" class="img-responsive"></div>
                                        <div class="panel-body">
                                          <p class="lead">Kisauni safi <a href="#" class="pull-right glyphicon glyphicon-map-marker">Mombasa</a> <i class=""></i></p>
                                          <p>25 Volunteers, 17 Donations, 3 Comments</p>
                                            <!<img src="assets/img/uFp_tsTJboUY7kue5XAsGAs28.png" height="28px" width="28px">
                                          <a href="#"><i class="glyphicon glyphicon-heart-empty" style="font-size:20px; width:28px;"></i></a>
                                          
                                        </div>
                                      </div>

                                        <div class="panel panel-default">
                                        <div class="panel-thumbnail"><img src="assets/img/bg_4.jpg" class="img-responsive"></div>
                                        <div class="panel-body">
                                          <p class="lead">Ferry safi <a href="#" class="pull-right glyphicon glyphicon-map-marker">Mombasa</a> <i class=""></i></p>
                                          <p>25 Volunteers, 17 Donations, 3 Comments</p>
                                            <!<img src="assets/img/uFp_tsTJboUY7kue5XAsGAs28.png" height="28px" width="28px">
                                          <a href="#"><i class="glyphicon glyphicon-heart-empty" style="font-size:20px; width:28px;"></i></a>
                                          
                                        </div>
                                      </div>

                                      <div class="panel panel-default">
                                         <div class="panel-heading"><a href="blogs.php" class="pull-right">View more</a> <h4>FROM THE BLOG</h4></div>
                                          <div class="panel-body">
                                            <p><img src="assets/img/150x150.gif" class="img-circle pull-right"> <a href="#">The Bootstrap Playground</a></p>
                                            <div class="clearfix"></div>
                                            <hr>
                                            Design, build, test, and prototype 
        using Bootstrap in real-time from your Web browser. Bootply combines the
         power of hand-coded HTML, CSS and JavaScript with the benefits of 
        responsive design using Bootstrap. Find and showcase Bootstrap-ready 
        snippets in the 100% free Bootply.com code repository.
                                          </div>
                                       </div>
                                    <!--
                                       <div class="panel panel-default">
                                        <div class="panel-body">
                                          <p class="lead">Social Good</p>
                                          <p>1,200 Followers, 83 Posts</p>
                                          
                                          <p>
                                            <img src="assets/img/photo.jpg" height="28px" width="28px">
                                            <img src="assets/img/photo.png" height="28px" width="28px">
                                            <img src="assets/img/photo_002.jpg" height="28px" width="28px">
                                          </p>
                                        </div>
                                      </div>
                                    -->                                 
                                  </div>
                               </div><!--/row-->
                              
                                <div class="row">
                                  <div class="col-sm-6">
                                    <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                                  </div>
                                </div>
                              
                                <div class="row" id="footer">    
                                  <div class="col-sm-6">
                                    
                                  </div>
                                  <div class="col-sm-6">
                                    <p>
                                      <a href="#" class="pull-right">Greenworld ©Copyright 2019 </a>
                                    </p>
                                  </div>
                                </div>
                               
                              
                            </div><!-- /col-9 -->
                        </div><!-- /padding -->
                    </div>
                    <!-- /main -->
                  
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
                        <!-- Upload Image preview -->
  <form class="form center-block" enctype="multipart/form-data" id="postForm">

    <div class="form-group">
        <input class="form-control input-lg story-title" autofocus="" placeholder="A title for your Initiative." id="postTitle" name="postTitle">
        <div class="" id="image_preview"> </div>
        <textarea 
                  id="postContent" 
                  name="postContent" 
                  class="form-control input-lg"  
                  placeholder="Share your thoughts with the Community"
        ></textarea> 

    </div>
    <div class="modal-footer">
         <ul class="pull-left list-inline">
              <li class="fileContainer">   
                 <a href="#">
                  <i class="glyphicon glyphicon-picture" ></i>
                  <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
                 </a>
              </li>
              <li> 
                  <a href="#"  data-toggle="collapse" data-target="#videoLink"  onclick="load_video();">
                      <i class="glyphicon  glyphicon-film"></i>   
                  </a>                                    
              </li>
              <li>
                  <a href="#"><i class="glyphicon glyphicon-map-marker" data-toggle="collapse" data-target="#location"></i></a>   
              </li>
              <li>
                   <input type="location" name="location" class="collapse form-control input" id="location" placeholder="Tag a place eg. @Nyali">
                   <input type="url" name="video" class="collapse form-control input" id="videoLink" placeholder="YouTube Video Link">
                  
              </li>
          </ul>
         <button type="submit" class="btn btn-success btn-md" name='submitImage' value="Upload Image">Post</button>
    </div>
  </form>
 
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
                        <!-- Upload Image preview -->
  <form class="form center-block" enctype="multipart/form-data" id="newCommunity">

    <div class="form-group">
        <input class="form-control input-lg story-title" autofocus="" placeholder="New community name." id="postTitle" name="postTitle">
        <div class="" id="image_preview"> </div>
        <textarea 
                  id="postContent" 
                  name="postContent" 
                  class="form-control input-lg"  
                  placeholder="Write somthing about this community."
        ></textarea> 

    </div>
    <div class="modal-footer">
         <ul class="pull-left list-inline">
              <li class="fileContainer">   
                 <a href="#">
                  <i class="glyphicon glyphicon-picture" ></i>
                  <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
                 </a>
              </li>
              <li> 
                  <a href="#"  data-toggle="collapse" data-target="#videoLink"  onclick="load_video();">
                      <i class="glyphicon  glyphicon-film"></i>   
                  </a>                                    
              </li>
              <li>
                  <a href="#"><i class="glyphicon glyphicon-map-marker" data-toggle="collapse" data-target="#location"></i></a>   
              </li>
              <li>
                   <input type="location" name="location" class="collapse form-control input" id="location" placeholder="Share location">
                   <input type="url" name="video" class="collapse form-control input" id="videoLink" placeholder="YouTube Video Link">
                  
              </li>
          </ul>
         <button type="submit" class="btn btn-success btn-md" name='submitImage' value="Upload Image">Post</button>
    </div>
  </form>
 
                    </div> 
                </div>
            </div>
        </div>


        <!-- Profile Modal -->
        
<!--post modal-->
<div class="modal  fade " id="profileModal" role="dialog">
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
                <p class="statusMsg"></p> 
                <form role="form"  style="padding: 3%; padding-top: 0px;" class="row">
                    <table class="table table-responsive" border="0" >
                        <tbody>
                            <tr>
                                <td>
                                    <img src="assets/img/user-avatar-640x640.png"  class="img-responsive img-thumbnail prof" style="height: 25vh;"> 
                                    <input type="file" name="proile-pic" id="upload-avatar" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="inputName">Name: Patrick 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedName"> Edit</span>
                                    </label>
                                    <input type="text" class="form-control collapse" id="updatedName" placeholder="Enter your name"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="inputName">Phone: 0798272066 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedName"> Edit</span>
                                    </label>
                                    <input type="text" class="form-control collapse" id="updatedPhone" placeholder="Enter your new phone number"/>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <label for="inputEmail">Email:  pass@pass.com 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedEmail"> Edit</span>
                                    </label>
                                    <input type="email" class="form-control collapse" id="updatedEmail" placeholder=" username@mail.com"/>
                                </td> 
                            </tr>
                            <tr>
                                <td> 
                                    <label for="inputMessage">Town/City:  
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedTown"> Edit</span>
                                    </label>
                                    <input type="text" class="form-control collapse" id="updatedTown" placeholder=" eg. Kilifi">
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <label for="inputMessage">Password: ********** 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedPasword"> Edit</span>
                                    </label>
                                    <input type="password" class="form-control collapse" id="updatedPasword" placeholder=" Password"> 
                                </td> 
                            </tr> 
                            
                        </tbody>
                        
                    </table>
                </form>
            </div> 
        </div>
    </div>
</div>


<script type="text/javascript">
    /* File upload */
$("#upload-avatar").change(function(){ 

     var  file=document.getElementById("upload-avatar").file;
     anert(file);


     for(var i=0;i<total_file;i++)
     {
      $('.prof').src=URL.createObjectURL(event.target.file);
     }

      $('form').ajaxForm(function() 
       {
        alert("Uploaded SuccessFully");
       }); 


});
</script>
        <!--- Tag Plugin --->

         

        <!-- Signup | Login  pages -->
        <!-- Modal -->
<div class="modal fade" id="signupModalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <!-- Modal Body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" class="btn btn-danger">
                    <span aria-hidden="true" class="btn btn-danger">&times;</span>
                    <span class="sr-only">Close</span>
                </button> 

                 <ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link " id="new-account-tab" data-toggle="tab" href="#new-account" role="tab" aria-controls="new-account" aria-selected="true">CREATE A NEW ACCOUNT</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">LOGIN TO MY ACCOUNT </a>
	  </li> 
</ul>


<div class="tab-content" id="myTabContent">
  <p class="statusMsg"></p>

  <!--  Signup Tab -->
  <div class="tab-pane fade" id="new-account" role="tabpanel" aria-labelledby="new-account-tab">
	  
	  <form role="form" action="POST" style="padding: 10px;">
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="newInputName" placeholder="Enter your name"/>
        </div>
        <div class="form-group">
            <label for="inputName">Phone</label>
            <input type="tel" class="form-control" id="newInputPhone" placeholder=" eg. 0712345678"/>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="newInputEmail" placeholder=" username@mail.com"/>
        </div>
        <div class="form-group">
            <label for="inputMessage">Town/City</label>
            <input type="text" class="form-control" id="newInputTown" placeholder=" eg. Kilifi"> 
        </div>
        <div class="form-group">
            <label for="inputMessage">Password</label>
            <input type="password" class="form-control" id="newInputPasword" placeholder=" Password"> 
        </div>
    </form>

     <!-- Modal Footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success submitBtn" onclick="submitNewForm();">Create Account</button>
    </div>

  </div> <!-- End of Signup Tab -->

  <!-- Login Tab -->
  <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
      <form role="form" style="padding: 10px;">
	    <div class="form-group">
	        <label for="inputEmail">Email</label>
	        <input type="email" class="form-control" id="inputEmail" placeholder=" username@mail.com"/>
	    </div>
	    <div class="form-group">
	        <label for="inputMessage">Password</label>
	        <input type="password" class="form-control" id="inputPasword" placeholder=" Password"> 
	    </div>
	</form> 

	<!-- Modal Footer -->
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-success submitBtn" onclick="submitLoginForm();">LOGIN</button>
	</div>

  </div>
  
</div> <!-- End of Login Tab --> 

            </div>
            
    
        </div>
    </div>
</div>
 





        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/main.js"> </script> 

     
         
 </body>
</html>

