<?php
/**
 * @version     1.0
 * @package     mod_bootstraplogo
 */
//No Direct Access
defined('_JEXEC') or die;

/* Params */

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_bootstraplogo', $params->get('layout', 'default'));
?>