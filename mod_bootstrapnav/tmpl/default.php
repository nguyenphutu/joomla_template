<?php
/**
 * @version     1.7
 * @package     mod_bootstrapnav
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Brad Traversy <support@bootstrapjoomla.com> - http://www.bootstrapjoomla.com
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<?php if($use_css == 1) : ?>
    <link rel="stylesheet" href="<?php echo JURI::base(); ?>media/mod_bootstrapnav/css/bootstrap.css" type="text/css" />
<?php endif; ?>
<?php //print_r($list); ?>
<style>

.navbar, .navbar .container {
    background: <?php echo $background_color; ?> !important;
}

.navbar-nav > li > a {
     color:<?php echo $text_color; ?> !important;
     text-shadow: 0 0 0 !important;
}


.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
     background: <?php echo $active_background_color; ?> !important;
}

</style>
<?php if($nav_type == 'navbar') : ?>
<div class="container">
    <div class="navbar <?php echo $fixed; ?>" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php if($brand_type == 'text') : ?>
                <a class="navbar-brand" href="index.php"><?php echo $brand_text; ?></a>
            <?php elseif($brand_type == 'image') : ?>
                <a class="navbar-brand" href="index.php"><img src="<?php echo $brand_image; ?>" /></a>
            <?php endif; ?>
        </div><!-- /.navbar-header -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav <?php echo $float; ?>">
			<?php				
				$bootstrap_menu_generator = new ModBootStrapMenuGenerator();			
				$bootstrap_menu = $bootstrap_menu_generator->Build_BootStrap_Menu($list, $path, $active_id, $show_subnav);
				echo $bootstrap_menu;
			?>
            </ul>
            <?php
                //Load Menu-Right Module
                $modules = JModuleHelper::getModules("menu-right");
                if($modules){
                    $document  = JFactory::getDocument();
                    $renderer  = $document->loadRenderer('module');
                    $attribs   = array();
                    $attribs['style'] = 'none';
                    foreach($modules as $mod){
                        echo JModuleHelper::renderModule($mod, $attribs);
                    }
                }
            ?>
        </div><!--/.nav-collapse -->
    </div><!-- /.navbar -->
</div><!--Container-->
<?php else : ?>
    <div class="list-group">
        <?php foreach ($list as $i => &$item) : ?>
        <?php 
            $class = $item->id; 
            $class .= ' list-group-item';
        ?>
                <a href="<?php echo $item->flink; ?>" class="<?php echo $class; ?>"><?php echo $item->title; ?></a>                     
        <?php endforeach; ?>
    </div><!-- /.list-group-->
<?php endif; ?>