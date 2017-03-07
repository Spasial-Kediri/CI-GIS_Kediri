<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>WebGIS</title>
		<meta name="description" content="WebGIS" />
		<meta name="keywords" content="webgis,data" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="<?php echo base_url() ;?>vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		<!-- Custom CSS -->
		<link href="<?php echo base_url() ;?>assets/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
		
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 bg-green">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="panel panel-default card-view mb-0">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title txt-dark">HALAMAN LOGIN WEBGIS</h6>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-wrap">
														<form action="<?php echo base_url() ;?>index.php/Home" method="post">
															<div class="form-group">
																<label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
																<div class="input-group">
																	<input type="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter email">
																	<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label mb-10" for="exampleInputpwd_2">Password</label>
																<div class="input-group">
																	<input type="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter pwd">
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
															
															<div class="form-group">
																<div class="checkbox checkbox-success pr-10 pull-left">
																	<input id="checkbox_2" required="" type="checkbox">
																	<label for="checkbox_2"> keep me logged in </label>
																</div>
																<a class="capitalize-font txt-danger block pt-5 pull-right" href="#">forgot password</a>
																<div class="clearfix"></div>
															</div>
															<div class="form-group">
																<button type="submit" class="btn btn-success btn-block">sign in</button>
															</div>
															<div class="form-group mb-0">
																<span class="inline-block pr-5">WebGIS Kediri</span>
																<a class="inline-block txt-danger" href="#">Jatim</a>
															</div>	
														</form>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?php echo base_url() ;?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url() ;?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ;?>vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?php echo base_url() ;?>assets/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo base_url() ;?>assets/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="<?php echo base_url() ;?>assets/js/init.js"></script>
	</body>
</html>
