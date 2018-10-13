<?php
/**
 * @package   Astroid Framework
 * @author    JoomDev https://www.joomdev.com
 * @copyright Copyright (C) 2009 - 2018 JoomDev.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
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
			<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
				<div class="panel">
			<?php endif; ?>

				<?php if ($this->params->get('logindescription_show') == 1) : ?>
					<p>
						<?php echo $this->params->get('login_description'); ?>
					</p>
				<?php endif; ?>

				<?php if (($this->params->get('login_image') != '')) :?>
					<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image mx-auto d-block" alt="<?php echo JTEXT::_('COM_USERS_LOGIN_IMAGE_ALT')?>"/>
				<?php endif; ?>

			<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
				</div>
			<?php endif; ?>

			<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-validate" id="Login">
				<?php /* Set placeholder for username, password and secretekey */
					$this->form->setFieldAttribute( 'username', 'hint', JText::_('COM_USERS_LOGIN_USERNAME_LABEL') );
					$this->form->setFieldAttribute( 'password', 'hint', JText::_('JGLOBAL_PASSWORD') );
					$this->form->setFieldAttribute( 'secretkey', 'hint', JText::_('JGLOBAL_SECRETKEY') );
				?>
				<div class="form-group">				
					<input name="username" id="username" value="" class="validate-username required form-control invalid" size="25" required="required" aria-required="true" autofocus="" aria-invalid="true" type="text">
				</div>
				
				<div class="form-group">
					<input name="password" id="password" value="" class="validate-password required form-control" size="25" maxlength="99" required="required" aria-required="true" type="password">
				</div>
				<?php if ($this->tfa): ?>
					<div class="form-group">
						<?php echo $this->form->getField('secretkey')->input; ?>
					</div>
				<?php endif; ?>
				<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
					<div class="remember">
						<label>
							<input id="remember" type="checkbox" name="remember" class="checkbox" value="yes">
							<?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME') ?>
						</label>
					</div>
				<?php endif; ?>
				<div class="forgot">
					<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">Forgot password?</a>
					<?php
						$usersConfig = JComponentHelper::getParams('com_users');
						if ($usersConfig->get('allowUserRegistration')) : ?>
							<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
								<?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?>						
							</a>			
					<?php endif; ?>
				</div>
				<button type="submit" class="btn btn-primary"><?php echo JText::_('JLOGIN'); ?></button>
                
				<?php $return = $this->form->getValue('return', '', $this->params->get('login_redirect_url', $this->params->get('login_redirect_menuitem'))); ?>
 				<input type="hidden" name="return" value="<?php echo base64_encode($return); ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</form>
		</div>	
	</div>
</div>
