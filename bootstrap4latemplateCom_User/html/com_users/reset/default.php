<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

?>
<?php if ($this->params->get('show_page_heading')) : ?>
	<h1 class="form-heading">
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
<?php endif; ?>
<div class="login-form">
	<div class="main-div">			
			<form action="<?php echo JRoute::_('index.php?option=com_users&task=reset.request'); ?>" method="post" class="form-validate" id="Login">
				<?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
					<fieldset>
						<p><?php echo JText::_($fieldset->label); ?></p>
						<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field) : ?>
							<?php if ($field->hidden === false) : ?>
								<div class="form-group">
									<?php echo $field->input; ?>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</fieldset>
				<?php endforeach; ?>
				<button type="submit" class="btn btn-primary"><?php echo JText::_('JSUBMIT'); ?></button>
                <?php echo JHtml::_('form.token'); ?>
			</form>
		</div>	
	</div>
</div>
