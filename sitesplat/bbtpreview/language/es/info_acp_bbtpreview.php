<?php
/**
*
* BBtpreview
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BBTPREVIEW_NOTICE'	=> '<div style="width:80%;margin:20px auto;"><p>No hay configuraciones específicas para esta extensión. ¡Disfruta!</p></div>',
));
