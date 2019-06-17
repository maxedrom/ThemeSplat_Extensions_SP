<?php
/**
*
* @package   BB@mention
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
*/

/**
* DO NOT CHANGE
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
    'NOTIFICATION_BBMENTION'					=> '<strong>Mencionado</strong> por %1$s in:',
	'NOTIFICATION_TYPE_BBMENTION'				=> 'Alguien te ha mencionado en un posteo',
));