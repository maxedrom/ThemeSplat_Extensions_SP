<?php
/**
* @package BBavatar+
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
	'ALLOW_MATERIAL'					=> 'Habilitar avatares material',
	'AVATAR_DRIVER_MATERIAL_TITLE'		=> 'Avatar Material',
	'AVATAR_DRIVER_MATERIAL_EXPLAIN'	=> 'Crear un avatar similar a Gmail con su nombre de usuario.',
	'MATERIAL_SHAPE'					=> 'Forma del avatar',
	'MATERIAL_RANDOM'					=> 'Aleatorio',
	'MATERIAL_CIRCLE'					=> 'Circulo',
	'MATERIAL_COLUMN'					=> 'Columna',
	'MATERIAL_DIAMOND'					=> 'Diamante',
	'MATERIAL_RECTANGLE'				=> 'Rectángulo',
	'MATERIAL_RHOMB'					=> 'Rombo',

	'ALLOW_GENERATOR'					=> 'Habilitar el Generador de Avatar',
	'AVATAR_DRIVER_GENERATOR_TITLE'		=> 'Generador de Avatar',
	'AVATAR_DRIVER_GENERATOR_EXPLAIN'	=> 'Crear su propio avatar.',

	'AVATARSPLUS_SHARE_TITLE'	=> '¡Hey soy yo!',
	'AVATARSPLUS_SHARE_DESC'	=> 'Acabo de crear este avatar genial con un impresionante plugin phpBB desarrollado por SiteSplat! ¡Compruébenlo chicos! https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat',
	'AVATARSPLUS_SHARE_CREDIT'	=> 'Creado con "BBAvatar+" de sitesplat.com',
));
