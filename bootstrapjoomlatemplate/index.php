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
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Custome Core CSS -->
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
		<div class="row">
			<div class="col-md-3">
				<!-- logo -->
				<jdoc:include type="modules" name="logo" style="none"/>
			</div>
			<div class="col-md-4 col-md-offset-5">
				<!-- right banner -->
				<jdoc:include type="modules" name="right-banner" style="none"/>
			</div>
		</div>
	</div>
	<!-- menu -->
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
					<a class="navbar-brand" href="index.php">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<jdoc:include type="modules" name="menu" style="none"/>		
				</div>
  			</div>
		</nav>
	</div>
    <!-- Header Carousel -->
	<jdoc:include type="modules" name="big-sliders" style="none"/> 

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<jdoc:include type="modules" name="info-1" style="none"/>
			</div>
			<div class="col-md-4">
				<jdoc:include type="modules" name="info-2" style="none"/>
			</div>
			<div class="col-md-4">
				<jdoc:include type="modules" name="info-3" style="none"/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-6">
						<jdoc:include type="modules" name="content-1" style="none"/>
					</div>
					<div class="col-md-6">
						<jdoc:include type="modules" name="content-2" style="none"/>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<jdoc:include type="modules" name="content-3" style="none"/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<jdoc:include type="modules" name="content-4" style="none"/>
			</div>
			<div class="col-md-6">
				<jdoc:include type="modules" name="content-5" style="none"/>
			</div>
		</div>
		<div class="row">	
			<div class="col-md-3">
				<jdoc:include type="modules" name="info-4" style="none"/>
			</div>
			<div class="col-md-3">
				<jdoc:include type="modules" name="info-5" style="none"/>
			</div>
			<div class="col-md-3">
				<jdoc:include type="modules" name="info-6" style="none"/>
			</div>
			<div class="col-md-3">		
				<jdoc:include type="modules" name="info-7" style="none"/>
			</div>		
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<jdoc:include type="modules" name="content-6" style="none"/>
			</div>
		</div>
		<div class="row">	
			<div class="col-md-3">
				<jdoc:include type="modules" name="footer-1" style="none"/>
			</div>
			<div class="col-md-3">
				<jdoc:include type="modules" name="footer-2" style="none"/>
			</div>
			<div class="col-md-3">
				<jdoc:include type="modules" name="footer-3" style="none"/>
			</div>
			<div class="col-md-3">		
				<jdoc:include type="modules" name="footer-4" style="none"/>
			</div>		
		</div>
		<!-- Content for component -->
		<jdoc:include type="message" />
		<jdoc:include type="component" />
		<hr>
		<!-- Footer -->
		<jdoc:include type="modules" name="footage" style="none"/>

		<!-- jQuery -->
		<script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/bootstrap.min.js"></script>
		<!-- Script to Activate the Carousel -->
		<script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})
		</script>
	</div>
</body>
</html>
