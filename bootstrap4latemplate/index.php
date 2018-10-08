<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">    
    <jdoc:include type="head"/>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/business-frontpage.css" rel="stylesheet">
	<!-- Custome Core CSS -->
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
		<!-- top logo and banner -->
		<div class="row justify-content-between">
			<div class="col-3">
				<jdoc:include type="modules" name="logo" style="none"/>
			</div>
			<div class="col-4">
				<!-- right banner -->
				<jdoc:include type="modules" name="right-banner" style="none"/>
			</div>
		</div>
		<!-- menu -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Logo</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<jdoc:include type="modules" name="menu" style="none"/>				
			</div>
		</nav>
		<!-- Header with Background Image -->
		<header class="business-header">
			<div class="row">
				<div class="col-lg-12">
				</div>
			</div>
		</header>

		<div id="main-content">
			<div class="row">
				<div class="col-sm-8">
					<!-- Content for component -->
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<hr>
				</div>
				<div class="col-sm-4">
					<jdoc:include type="modules" name="info-1" style="none"/>
				</div>
			</div>
		</div>
		<div id="footer-content">
			<div class="row">
				<div class="col-sm-12 my-4">						
					<jdoc:include type="modules" name="content-3" style="none"/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 my-4">
					<jdoc:include type="modules" name="content-4" style="none"/>
				</div>
				<div class="col-sm-6 my-4">
					<jdoc:include type="modules" name="content-5" style="none"/>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-10 my-4">
					<jdoc:include type="modules" name="content-6" style="none"/>
				</div>
			</div>
		</div>
		<div id="footer-info">
			<div class="row">	
				<div class="col my-4">
					<jdoc:include type="modules" name="footer-1" style="none"/>
				</div>
				<div class="col my-4">
					<jdoc:include type="modules" name="footer-2" style="none"/>
				</div>
				<div class="col my-4">
					<jdoc:include type="modules" name="footer-3" style="none"/>
				</div>
				<div class="col my-4">
					<jdoc:include type="modules" name="footer-4" style="none"/>
				</div>		
			</div>	
		</div>		
	</div>		
	<!-- Footer -->
	<jdoc:include type="modules" name="footage" style="none"/>

	<!-- jQuery -->
	<script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/vendor/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
</body>
</html>
