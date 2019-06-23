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
	'BBCHAT_PUSHER'						=> 'Chat',
	'BBCHAT_NOT_ENABLED'				=> 'BBchat is not enabled',
	'NO_AUTH_BBCHAT'					=> 'You are not authorized to use chat.',
	'SITESPLAT_BBCHAT_BOARD_DISABLED'	=> 'We are preparing an awesome extension for you, hang tight!',

	'BACK_TO_ROOMS'	=> '< Back to rooms',

	// notifications
	'BBCHAT_MENTION'	=> 'You have been mentioned by %s in chat room %s',

	// UCP/ACP options
	'NO_SOUND'	=> 'No sound',

	// Topic Alerts
	'NEW_TOPIC'	=> 'New topic: %s',
));
