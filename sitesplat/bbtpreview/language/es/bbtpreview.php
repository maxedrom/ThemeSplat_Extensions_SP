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
	'TOPICSTART'	=> 'Fecha de inicio del Tema',
	'TOPICTIME'		=> 'Fecha de tema activo',
	'POST_PRIVATE'	=> '[Mensaje privado]',
));
