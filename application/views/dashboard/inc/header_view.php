<!doctype html>
<html lang="en">
	<head>
		<title>BGR Site</title>
                <meta name="viewport" content="width=device-width, initial-scale=1,0"/>
                
                <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
		<link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.css" />
				
		<script src="<?=base_url()?>public/js/jquery.js"></script>
		<script src="<?=base_url()?>public/js/bootstrap.js"></script>
		
	</head>
	<body>
	
        <nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                    <a class="navbar-brand" href="#">BGR Site</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="<?=site_url('dashboard/logout')?>">Logout</a></li>
                </ul>
            </div>
            </div>
            </nav>
            
		<!-- Start wrapper -->
		<div class="container">
               
		


