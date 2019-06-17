<?php
/**
*
* Nightstalker
*
* @copyright (c) 2015 sitesplat.com <http://sitesplat.com>
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
	'NIGHTSTALKER'			=> 'Modo Nocturno',
	'NORMAL_VIEW'			=> 'Modo Normal',
	'NIGHTSTALKER_NOTICE'	=> '<div class="phpinfo"><p>No existen configuraciones para esta extension.<br />Nighstalker (Modo Noche) se activa haciendo clic en Modo Nocturno en las opciones de navegacion.</p></div>',
));
