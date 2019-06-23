<?php
/**
 * @maxedrom [ESPAÑOL]
 * BBchat
 * @copyright (c) 2018 sitesplat.com All rights reserved
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
	'BBCHAT_PUSHER'						=> 'Chat',
	'BBCHAT_NOT_ENABLED'				=> 'BBchat se encuentra desactivado',
	'NO_AUTH_BBCHAT'					=> 'Usted no esta autorizado para usar el Chat.',
	'SITESPLAT_BBCHAT_BOARD_DISABLED'	=> 'Estamos preparando una increible extension para usted, este atento!',

	'BACK_TO_ROOMS'	=> '< Volver a las salas de Chat',

	// notifications
	'BBCHAT_MENTION'	=> 'Has sido mencionado por %s en la sala de Chat %s',

	// UCP/ACP options
	'NO_SOUND'	=> 'Sin sonido',

	// Topic Alerts
	'NEW_TOPIC'	=> 'Nuevo Tema: %s',
));
