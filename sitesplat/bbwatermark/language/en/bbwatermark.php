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
	'ADD_BBWATERMARK'				=> 'Add watermark',
	'BBWATERMARK_POS_TOP_LEFT'		=> 'Top left',
	'BBWATERMARK_POS_TOP_RIGHT'		=> 'Top right',
	'BBWATERMARK_POS_BOTTOM_LEFT'	=> 'Bottom left',
	'BBWATERMARK_POS_BOTTOM_RIGHT'	=> 'Bottom right',
	'BBWATERMARK_POS_CENTER'		=> 'Center',
	'BBWATERMARK_POS_CENTER_TOP'	=> 'Top center',
	'BBWATERMARK_POS_CENTER_BOTTOM'	=> 'Bottom center',
));
