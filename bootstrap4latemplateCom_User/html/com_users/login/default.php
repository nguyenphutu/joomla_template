<?php
/**
 * @package   Astroid Framework
 * @author    JoomDev https://www.joomdev.com
 * @copyright Copyright (C) 2009 - 2018 JoomDev.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die;
$cookieLogin = $this->user->get('cookieLogin');
if (!empty($cookieLogin) || $this->user->get('guest'))
{  
   echo $this->loadTemplate('login'); // The user is not logged in or needs to provide a password.
}