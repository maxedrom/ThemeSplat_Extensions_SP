<?php
/**
*
* @package BBwatermark
* @copyright (c) 2016 SiteSplat (http://sitesplat.com)
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
	'ADD_BBWATERMARK'				=> 'Ajouter watermark',
	'BBWATERMARK_POS_TOP_LEFT'		=> 'Haut gauche',
	'BBWATERMARK_POS_TOP_RIGHT'		=> 'Haut droit',
	'BBWATERMARK_POS_BOTTOM_LEFT'	=> 'Bas gauche',
	'BBWATERMARK_POS_BOTTOM_RIGHT'	=> 'Bas droit',
	'BBWATERMARK_POS_CENTER'		=> 'Centre',
	'BBWATERMARK_POS_CENTER_TOP'	=> 'Haut centre',
	'BBWATERMARK_POS_CENTER_BOTTOM'	=> 'Bas centre',
));
