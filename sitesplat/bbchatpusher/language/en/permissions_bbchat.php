<?php
/**
 *
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

	'ACL_U_BBCHAT_PUSHER_BBCHAT'		=> 'Can use BBchat',
	'ACL_U_BBCHAT_PUSHER_PRIVATE'		=> 'Can use private chats with friends',
	'ACL_U_BBCHAT_PUSHER_PRIVATE_ALL'	=> 'Can use private chats with anyone',
	'ACL_U_BBCHAT_PUSHER_DELETE'		=> 'Can delete all messages',
	'ACL_U_BBCHAT_PUSHER_DELETE_SELF'	=> 'Can delete their messages',
	'ACL_U_BBCHAT_PUSHER_BAN'			=> 'Can ban users',
	'ACL_U_BBCHAT_PUSHER_SEND_FILES'	=> 'Can send files',
));
