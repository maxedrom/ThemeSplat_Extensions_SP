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
	'ADD_BBWATERMARK'				=> 'Añadir marca de agua',
	'BBWATERMARK_POS_TOP_LEFT'		=> 'Arriba a la Izquierda',
	'BBWATERMARK_POS_TOP_RIGHT'		=> 'Arriba a la Derecha',
	'BBWATERMARK_POS_BOTTOM_LEFT'	=> 'Abajo a la Izquierda',
	'BBWATERMARK_POS_BOTTOM_RIGHT'	=> 'Abajo a la Derecha',
	'BBWATERMARK_POS_CENTER'		=> 'Centrado',
	'BBWATERMARK_POS_CENTER_TOP'	=> 'Arriba en el Centro',
	'BBWATERMARK_POS_CENTER_BOTTOM'	=> 'Abajo en el Centro',
));
