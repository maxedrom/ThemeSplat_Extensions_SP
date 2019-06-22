<?php
/**
*
* @package sitesplat BBlinks
* @copyright (c) 2017 SiteSplat All rights reserved
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
	'BBLINKS_MODAL_TITLE'	=> 'URL externa detectada!',
	'BBLINKS_PROCEED'	    => 'El enlace pulsado es una URL externa a esta Web. ¿Desea ir a una URL externa?',
	'BBLINKS_PROCEED_NO'	=> 'No',
	'BBLINKS_PROCEED_YES'	=> 'Si',
));
