<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>WebGIS - Information System of Kediri</title>
	<meta name="description" content="WebGIS Kediri" />
	<meta name="keywords" content="webgis, information, system, kediri, jawa" />
	<meta name="author" content="webgis"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Data table CSS -->
	<link href="<?php echo base_url('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css'); ?>"rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper">

        <!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
				<a href="index.html"><img class="brand-img pull-left" src="dist/img/logo.png" alt="brand"/></a>
				<ul class="nav navbar-right top-nav pull-right">
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#site_navbar_search">
						<i class="fa fa-search top-nav-icon"></i>
						</a>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th top-nav-icon"></i></a>
						<ul class="dropdown-menu app-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<ul class="app-icon-wrap">
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-umbrella txt-info"></i>
										<span class="block">weather</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-mail-open-file txt-success"></i>
										<span class="block">e-mail</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-date txt-primary"></i>
										<span class="block">calendar</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-map txt-danger"></i>
										<span class="block">map</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-comment txt-warning"></i>
										<span class="block">chat</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-notebook"></i>
										<span class="block">contact</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="divider"></li>
							<li class="text-center"><a href="#">More</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?php echo base_url('assets/img/user1.png') ?>" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="collapse navbar-search-overlap" id="site_navbar_search">
					<form role="search">
						<div class="form-group mb-0">
							<div class="input-search">
								<div class="input-group">	
									<input type="text" id="overlay_search" name="overlay-search" class="form-control pl-30" placeholder="Search">
									<span class="input-group-addon pr-30">
									<a  href="javascript:void(0)" class="close-input-overlay" data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
									</span> 
								</div>
							</div>
						</div>
					</form>
				</div>
			</nav>
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li>
						<a href="widgets.html"><i class="icon-picture mr-10"></i>Dashboard</a>
					</li>

					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i class="icon-basket-loaded mr-10"></i>Master Data<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="ecom_dr" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Penduduk</a>
							</li>
							<li>
								<a href="product.html">Pertanian</a>
							</li>
							<li>
								<a href="product-detail.html">Asset Desa</a>
							</li>
							<li>
								<a href="add-products.html">Perkebunan</a>
							</li>
							<li>
								<a href="product-orders.html">Spasial Data</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="widgets.html"><i class="icon-map mr-10"></i>Peta Sebaran</a>
					</li>

					<li>
						<a href="widgets.html"><i class="icon-map mr-10"></i>Report</a>
					</li>

					<li>
						<a href="widgets.html"><i class="icon-map mr-10"></i>Master User</a>
					</li>

					<li>
						<a href="widgets.html"><i class="icon-map mr-10"></i>Backup Database</a>
					</li>

					<li>
						<a href="widgets.html"><i class="icon-map mr-10"></i>Pengaturan</a>
					</li>

					<li>
						<a href="widgets.html"><i class="icon-map mr-10"></i>Logout</a>
					</li>
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->

        <!-- Main Content -->
				
				

				<!-- content here -->

				<!-- Row Header Information -->
				
				<!-- /end Row -->

				<!-- Row -->
				
				<!-- /Row -->

				<!-- Row -->
				<!-- <div class="row">
					
					<div class="col-lg-5">
                         <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-chart mr-10"></i>Audience age</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_2" height="344"></canvas>
								</div>	
							</div>
						</div>
					</div>
				</div> -->
				<!-- /Row -->

				<!-- <div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div id="weather_1" class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><span></span><a href="javascript:void(0);"><i class="fa fa-angle-down fa-fw ml-10"></i></a></h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<h5 class="block nowday"></h5>
									<span class="block nowdate"></span>
									<div class="weather weatherapp mt-15"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-chart mr-10"></i>Interests</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_3" height="489"></canvas>
								</div>	
							</div>
						</div>
					</div>
				</div> -->

				<!-- end of content -->
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-5">
						<a href="index.html" class="brand mr-30"><img src="dist/img/logo-sm.png" alt="logo"/></a>
						<ul class="footer-link nav navbar-nav">
							<li class="logo-footer"><a href="#">Help</a></li>
							<li class="logo-footer"><a href="#">Download</a></li>
							<li class="logo-footer"><a href="#">About Us</a></li>
						</ul>
					</div>
					<div class="col-sm-7 text-right">
						<p>2017 &copy; WebGIS Information System of Kediri</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="<?php echo base_url('vendors/bower_components/jquery/dist/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    
	<!-- Data table JavaScript -->
	<script src="<?php echo base_url('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables-data.js') ?>"></script>
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo base_url('assets/js/dropdown-bootstrap-extended.js') ?>"></script>
	<!-- Init JavaScript -->
	<script src="<?php echo base_url('assets/js/init.js') ?>"></script>
	<script src="<?php echo base_url('vendors/chart.js/Chart.min.js'); ?>"></script>
	
	<!--<script src="<?php echo base_url('ass/js/chartjs-data.js'); ?>"></script> -->
	
	<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('vendors/bower_components/raphael/raphael.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/bower_components/morris.js/morris.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/morris-data.js'); ?>"></script>

</body>

</html>
