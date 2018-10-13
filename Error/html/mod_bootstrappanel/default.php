<?php
defined('_JEXEC') or die;
?>
<div class="card mt-4 <?php echo $moduleclass_sfx; ?>">
	<div class="card-header">
        <?php if($show_font_awsome) : ?>
            <span class="<?php echo $font_awsome; ?>"></span>
        <?php endif; ?>
        <?php echo $headingtext; ?>
	</div>
	<div class="card-body">
		<p class="card-text"><?php echo $paragraphtext; ?></p>
		<?php if($show_read_more) : ?>
			<a class="btn btn-primary <?php echo $buttonstyle; ?>" href="<?php echo $read_more_link; ?>"><?php echo $read_more_text; ?></a>
		<?php endif; ?>
	</div>
</div>