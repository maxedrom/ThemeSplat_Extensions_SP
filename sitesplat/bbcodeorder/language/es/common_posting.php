<?php
/**
*
* BBcodeOrder+
* @copyright (c) 2016 SiteSplat All rights reserved
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
	'BBCODE_B'						=> 'Negrita',
	'BBCODE_I'						=> 'Cursiva',
	'BBCODE_U'						=> 'Subrayar',
	'BBCODE_L'						=> 'Lista',
	'BBCODE_O'						=> 'Lista Ordenada',
	'BBCODE_LISTITEM'				=> 'Artículo de lista',
	'BBCODE_C'						=> 'Código',
	'BBCODE_Q'						=> 'Citar',
	'BBCODE_IMG'					=> 'Imagen',
	'BBCODE_URL'					=> 'URL',
	'BBCODE_FLASH'					=> 'FLASH',
));
