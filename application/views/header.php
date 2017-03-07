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
	<link href="<?php echo base_url() ;?>vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ;?>vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ;?>assets/css/style.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ;?>assets/css/custom.css" rel="stylesheet" type="text/css">

	<!-- qgis dependences -->
	<link rel="stylesheet" href="<?php echo base_url('qgis/css/leaflet.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('qgis/css/qgis2web.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('qgis/css/label.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('qgis/css/MarkerCluster.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('qgis/css/MarkerCluster.Default.css') ?>" />
    
    <script src="<?php echo base_url('qgis/js/leaflet.js')?>"></script>
    <script src="<?php echo base_url('qgis/js/leaflet-heat.js')?>"></script>
    <script src="<?php echo base_url('qgis/js/leaflet.rotatedMarker.js')?>"></script>
    <script src="<?php echo base_url('qgis/js/OSMBuildings-Leaflet.js')?>"></script>
    <script src="<?php echo base_url('qgis/js/leaflet-hash.js')?>"></script>
    <script src="<?php echo base_url('qgis/js/label.js')?>"></script>
    <script src="<?php echo base_url('qgis/js/Autolinker.min.js')?>"></script>
    <script src="<?php echo base_url('qgis/js/leaflet.markercluster.js')?>"></script>
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper">

        <!-- Top Menu Items -->
		<?php $this->load->view('nav') ;?>	
		<!-- /Top Menu Items -->
			
		<!-- Left Sidebar Menu -->
		<?php $this->load->view('menu') ;?>
		<!-- /Left Sidebar Menu -->
	
	
	<!-- Main Content -->
	<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg  bg-blue">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-light">Information System of Kediri</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>speciality pages</span></a></li>
							<li class="active"><span>Welcome to WebGIS</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->