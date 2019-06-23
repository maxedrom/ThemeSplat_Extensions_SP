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
	'ACL_CAT_BBCHAT'	=> 'BBchat',

	'ACL_U_BBCHAT_PUSHER_BBCHAT'		=> 'Puede usar BBchat',
	'ACL_U_BBCHAT_PUSHER_PRIVATE'		=> 'Puede usar chats privados con amigos',
	'ACL_U_BBCHAT_PUSHER_PRIVATE_ALL'	=> 'Puede usar chats privados con cualquiera',
	'ACL_U_BBCHAT_PUSHER_DELETE'		=> 'Puede borrar todos los mensajes',
	'ACL_U_BBCHAT_PUSHER_DELETE_SELF'	=> 'Puede borrar sus mensajes',
	'ACL_U_BBCHAT_PUSHER_BAN'			=> 'Puede prohibir a los usuarios',
	'ACL_U_BBCHAT_PUSHER_SEND_FILES'	=> 'Puede enviar archivos',
));
