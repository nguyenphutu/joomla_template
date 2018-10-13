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
		<!-- top logo and banner -->
		<div class="row justify-content-between">
			<div class="col-3">				
				<?php $logo = JModuleHelper::getModule('bootstraplogo'); ?>
				<?php echo JModuleHelper::renderModule($logo); ?>
			</div>
			<div class="col-4">
				<!-- right banner -->
				<?php $right_banner = JModuleHelper::getModule('bootstrapbanner'); ?>
				<?php echo JModuleHelper::renderModule($right_banner); ?>
			</div>
		</div>
		<!-- menu -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Logo</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<?php $module = JModuleHelper::getModule('menu'); ?>
				<?php echo JModuleHelper::renderModule($module); ?>			
			</div>
		</nav>
		
		<div id="main-content">
			<div class="row">
				<div class="col-md-12 text-center">
					<span class="display-1 d-block">404</span>
					<div class="mb-4 lead"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></div>
				</div>
				<div class="col-md-12 list-error">
					<h3><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></h3>
					<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
					<ul>
						<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
						<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
						<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
						<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
					</ul>	
					<div class="text-center">
						<a class="btn btn-link" href="<?php echo $this->baseurl; ?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>" ><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a>
					</div>
				</div>
				
			</div>		
		</div>
		<div id="footer-info">
			<div class="row">	
				<div class="col my-4">
					<?php $module = JModuleHelper::getModule('bootstrappanel'); ?>
					<?php echo JModuleHelper::renderModule($module); ?>
				</div>
				<div class="col my-4">
					<?php $module = JModuleHelper::getModule('bootstrappanel'); ?>
					<?php echo JModuleHelper::renderModule($module); ?>
				</div>
				<div class="col my-4">
					<?php $module = JModuleHelper::getModule('bootstrappanel'); ?>
					<?php echo JModuleHelper::renderModule($module); ?>
				</div>
				<div class="col my-4">
					<?php $module = JModuleHelper::getModule('bootstrappanel'); ?>
					<?php echo JModuleHelper::renderModule($module); ?>
				</div>		
			</div>	
		</div>		
	</div>		
	<!-- Footer -->
	<footer class="my-4">
		<?php $module = JModuleHelper::getModule('custom'); ?>
		<?php echo JModuleHelper::renderModule($module); ?>
	</footer>
	<!-- jQuery -->
	<script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/vendor/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
</body>
</html>
