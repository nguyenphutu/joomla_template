<?php
/**
 * @version     1.0
 * @package     mod_bootstrapfootage
 */
//No Direct Access
defined('_JEXEC') or die;

/* Params */
$footage_text = 	htmlspecialchars($params->get('footage_text'));
// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_bootstrapfootage', $params->get('layout', 'default'));
?>