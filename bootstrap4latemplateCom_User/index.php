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
	<!-- Custome Core CSS -->
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
	<!-- Footer -->
	<footer class="my-4">
		<jdoc:include type="modules" name="footage" style="none"/>
	</footer>
	<!-- jQuery -->
	<script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/vendor/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
