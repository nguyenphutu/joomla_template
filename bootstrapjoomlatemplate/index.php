<!DOCTYPE html>
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

    <!-- Custom CSS -->
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		.navbar {
			margin-bottom: 0;
			border-radius: 0;
		}
		footer {
			margin: 0;
		}
		.box_image{
			height: 60px;
		}
	</style>
</head>

<body style="padding-top: 0">
    <div class="container">
		<div class="row">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="col-md-3">
				<jdoc:include type="modules" name="logo" style="none"/>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="col-md-4 col-md-offset-5">
				<jdoc:include type="modules" name="right-banner" style="none"/>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- menu -->
	<jdoc:include type="modules" name="menu" style="none"/>

    <!-- Header Carousel -->
	<jdoc:include type="modules" name="big-sliders" style="none"/>
 

    <!-- Page Content -->
	<!-- Marketing Icons Section -->

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
        <!-- /.row -->	
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
