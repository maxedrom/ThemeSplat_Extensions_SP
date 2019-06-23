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
	'UCP_BBCHAT_TITLE'	=> 'Editar las opciones del Chat',
	'SEND_SOUND'		=> 'Sonido que sera reproducido cuando envie un mensaje',
	'RECEIVE_SOUND'		=> 'Sonido que sera reproducido cuando reciba un mensaje',
	'DEFAULT_SOUND'		=> 'Usar sonido predefinido',
	'MENTIONS_ENABLE'	=> 'Los usuarios pueden mencionarte en el Chat (usted recivira una notificación)',
    'BBCHAT_SIGNATURE'	=> '<a class="pull-right" style="font-size:12px;" href="https://goo.gl/kFxVMh" target="_blank">BBchat es una extension diseñada por SiteSplat</a>',
	
	'NOTIFICATION_TYPE_SITESPLAT.BBCHATPUSHER.NOTIFICATION.TYPE.MENTION'	=> 'Alguien te ha mencionado en el chat'
));
