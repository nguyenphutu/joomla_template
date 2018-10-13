<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$showPrintIcon = $params->get('show_print_icon');
$showEmailIcon = $params->get('show_email_icon');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (JLanguageAssociations::isEnabled() && $params->get('show_associations'));
JHtml::_('behavior.caption');

?>
<div class="item-page<?php echo $this->pageclass_sfx; ?>" itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? JFactory::getConfig()->get('language') : $this->item->language; ?>" />
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
	</div>
	<?php endif;
	if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && $this->item->paginationrelative)
	{
		echo $this->item->pagination;
	}
	?>

	<?php // Todo Not that elegant would be nice to group the params ?>
	<?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
	|| $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author') || $assocParam); ?>

	<?php if (!$useDefList && $this->print) : ?>
		<div id="pop-print" class="btn hidden-print">
			<?php echo JHtml::_('icon.print_screen', $this->item, $params); ?>
		</div>
		<div class="clearfix"> </div>
	<?php endif; ?>
	<?php if ($params->get('access-view')) : ?>
	<?php echo JLayoutHelper::render('joomla.content.full_image', $this->item); ?>
	<?php
	if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && !$this->item->paginationrelative) :
		echo $this->item->pagination;
	endif;
	?>
	<?php if ($params->get('show_title') || $params->get('show_author')) : ?>
	<div class="page-header mt-4">
		<h2>
			<?php echo $this->escape($this->item->title); ?>
		</h2>		
		<?php if ($this->item->state == 0) : ?>
			<span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
		<?php endif; ?>
		<?php if (strtotime($this->item->publish_up) > strtotime(JFactory::getDate())) : ?>
			<span class="label label-warning"><?php echo JText::_('JNOTPUBLISHEDYET'); ?></span>
		<?php endif; ?>
		<?php if ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != JFactory::getDbo()->getNullDate()) : ?>
			<span class="label label-warning"><?php echo JText::_('JEXPIRED'); ?></span>
		<?php endif; ?>
	</div>
	<?php endif; ?>

	<?php $useDefList = ($params->get('show_author') or $params->get('show_category') or $params->get('show_parent_category')
	or $params->get('show_create_date') or $params->get('show_modify_date') or $params->get('show_publish_date')
	or $params->get('show_hits')); ?>
	<small>
		<?php if ($useDefList) : ?>
			<?php if ($params->get('show_create_date')) : ?>
				<p class="blog-post-meta">
					<?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $this->item->created, JText::_('DATE_FORMAT_LC2'))); ?>
				</p>
			<?php endif; ?>
			<p class="blog-post-meta">
				<?php if (!empty($this->item->author) && $params->get('show_author')) : ?>
					<?php $author = $this->item->created_by_alias ?: $this->item->author; ?>
					<?php if (!empty($this->item->contact_link) && $params->get('link_author') == true) : ?>
						<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', JHtml::_('link', $this->item->contact_link, $author)); ?>
					<?php else : ?>
						<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
					<?php endif; ?>
				<?php endif; ?>
			</p>
		<?php endif; ?>
		<?php if ($this->item->parent_slug !== '1:root' && $params->get('show_parent_category')) : ?>
			<p class="blog-post-meta">
				<?php 	$title = $this->escape($this->item->parent_title);
						$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)) . '">' . $title . '</a>';?>
				<?php if ($params->get('link_parent_category') and $this->item->parent_slug) : ?>
					<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
					<?php else : ?>
					<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
				<?php endif; ?>
			</p>
		<?php endif; ?>
		<?php if ($params->get('show_category')) : ?>
			<p class="blog-post-meta">
				<?php 	$title = $this->escape($this->item->category_title);
						$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)) . '">' . $title . '</a>';?>
				<?php if ($params->get('link_category') and $this->item->catslug) : ?>
					<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
					<?php else : ?>
					<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
				<?php endif; ?>
			</p>
		<?php endif; ?>
		<?php if ($params->get('show_modify_date')) : ?>
			<p class="blog-post-meta">
				<?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC2'))); ?>
			</p>
		<?php endif; ?>
		<?php if ($params->get('show_publish_date')) : ?>
			<p class="blog-post-meta">
				<?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', JHtml::_('date', $this->item->publish_up, JText::_('DATE_FORMAT_LC2'))); ?>
			</p>
		<?php endif; ?>
		<?php if ($params->get('show_hits')) : ?>
			<p class="blog-post-meta">
				<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
			</p>
		<?php endif; ?>
	</small>
	<div itemprop="articleBody" cla>
		<?php echo $this->item->text; ?>
	</div>
	<?php
		if ($canEdit || $showPrintIcon || $showEmailIcon) : ?>
			<?php if (!$this->print) : ?>
				<?php if ($showPrintIcon) : ?>
					<?php echo JHtml::_('icon.print_popup', $this->item, $params, array(), true); ?>
				<?php endif; ?>
				<?php if ($showEmailIcon) : ?>
					<?php echo JHtml::_('icon.email', $this->item, $params, array(), true); ?>
				<?php endif; ?>
				<?php if ($this->user->authorise('core.edit', 'com_content.article.' . $this->item->id)) : ?>
					<?php echo JHtml::_('icon.edit', $this->item, $params, array(), true); ?>
				<?php endif; ?>
			<?php else : ?>
				<?php echo JHtml::_('icon.print_screen', $this->item, $params, array(), true); ?>
			<?php endif; ?>
	<?php endif; ?>

	<?php if ($info == 1 || $info == 2) : ?>
		<?php if ($useDefList) : ?>
		<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
			<?php $this->item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>
			<?php echo $this->item->tagLayout->render($this->item->tags->itemTags); ?>
		<?php endif; ?>
		<small class="text-muted d-block mt-4">
			<?php // Todo: for Joomla4 joomla.content.info_block.block can be changed to joomla.content.info_block ?>
					<?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'below')); ?>
				<?php endif; ?>
			<?php endif; ?>		
		</small>
	<?php
	if (!empty($this->item->pagination) && $this->item->pagination && $this->item->paginationposition && !$this->item->paginationrelative) :
		echo $this->item->pagination;
	?>
	<?php endif; ?>
	<?php if (isset($urls) && ((!empty($urls->urls_position) && ($urls->urls_position == '1')) || ($params->get('urls_position') == '1'))) : ?>
	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	<?php // Optional teaser intro text for guests ?>
	<?php elseif ($params->get('show_noauth') == true && $user->get('guest')) : ?>
	<?php echo JLayoutHelper::render('joomla.content.intro_image', $this->item); ?>
	<?php echo JHtml::_('content.prepare', $this->item->introtext); ?>
	<?php // Optional link to let them register to see the whole article. ?>
	<?php if ($params->get('show_readmore') && $this->item->fulltext != null) : ?>
	<?php $menu = JFactory::getApplication()->getMenu(); ?>
	<?php $active = $menu->getActive(); ?>
	<?php $itemId = $active->id; ?>
	<?php $link = new JUri(JRoute::_('index.php?option=com_users&view=login&Itemid=' . $itemId, false)); ?>
	<?php $link->setVar('return', base64_encode(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language))); ?>
	<p class="readmore">
		<a href="<?php echo $link; ?>" class="register">
		<?php $attribs = json_decode($this->item->attribs); ?>
		<?php
		if ($attribs->alternative_readmore == null) :
			echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
		elseif ($readmore = $attribs->alternative_readmore) :
			echo $readmore;
			if ($params->get('show_readmore_title', 0) != 0) :
				echo JHtml::_('string.truncate', $this->item->title, $params->get('readmore_limit'));
			endif;
		elseif ($params->get('show_readmore_title', 0) == 0) :
			echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
		else :
			echo JText::_('COM_CONTENT_READ_MORE');
			echo JHtml::_('string.truncate', $this->item->title, $params->get('readmore_limit'));
		endif; ?>
		</a>
	</p>
	<?php endif; ?>
	<?php endif; ?>
	
	<?php
	if (!empty($this->item->pagination) && $this->item->pagination && $this->item->paginationposition && $this->item->paginationrelative) :
		echo $this->item->pagination;
	?>
	<?php endif; ?>
	<?php // Content is generated by content plugin event "onContentAfterDisplay" ?>
	<?php echo $this->item->event->afterDisplayContent; ?>
</div>
