<?php
/**
 * @version     1.0
 * @package     mod_bigslider
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<!-- Header Carousel -->
<header class="carousel slide" id="myCarousel" style="margin-bottom: 50px;">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
			<div class="carousel-caption">
				<h2>Caption 1</h2>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
			<div class="carousel-caption">
				<h2>Caption 2</h2>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
			<div class="carousel-caption">
				<h2>Caption 3</h2>
			</div>
		</div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" data-slide="prev" href="#myCarousel" >
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" data-slide="next" href="#myCarousel" >
		<span class="icon-next"></span>
	</a>
</header>
