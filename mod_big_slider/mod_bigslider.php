<?php
/**
 * @version     1.4
 * @package     mod_jumbotron
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Brad Traversy <support@joomdigi.com> - http://www.bootstrapjoomla.com
 */
//No Direct Access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_bigslider', $params->get('layout', 'default'));
?>