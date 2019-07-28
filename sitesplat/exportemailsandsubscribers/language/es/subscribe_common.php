<?php
/**
*
* Export emails and subscribers extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat <http://www.sitesplat.com>
* @license SiteSplat 2015 all rights reserved
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
	'SUBSCRIBE_TO_MAILING_LIST'		=> 'Suscribirse a la lista de correo',
	'SUBSCRIBE_EMAIL'	=> 'Su email',
	'SUBSCRIBE_BUTTON'	=> 'Suscribirse ahora',
	'SUBSCRIBE_ERROR'	=> 'La dirección de email no es válida',
	'SUBSCRIBE_SUCCESS'	=> '¡Suscripción correcta!',
));
