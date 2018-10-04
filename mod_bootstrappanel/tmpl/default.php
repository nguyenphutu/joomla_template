<?php
/**
 * @version     1.1
 * @package     mod_bootstrappanel
 */
//No Direct Access
defined('_JEXEC') or die;
?>

<div class="panel <?php echo $moduleclass_sfx; ?>">
	<div class="panel-heading">
		<h4> 
			<?php if($show_glyphicon) : ?>
				<span class="<?php echo $glyphicon; ?>"></span>
			<?php endif; ?>
			<?php echo $headingtext; ?>
		</h4>
	</div>
	<div class="panel-body">
		<p><?php echo $paragraphtext; ?></p>
		<?php if($show_read_more) : ?>
			<a class="readmore <?php echo $buttonstyle; ?>" href="<?php echo $read_more_link; ?>"><?php echo $read_more_text; ?></a>
		<?php endif; ?>
	</div>
</div>
