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
	'UCP_BBCHAT_TITLE'	=> 'Edit BBchat options',
	'SEND_SOUND'		=> 'A sound to be played when you send a message',
	'RECEIVE_SOUND'		=> 'A sound to be played when you receive a message',
	'DEFAULT_SOUND'		=> 'Use default sound',
	'MENTIONS_ENABLE'	=> 'Users can mention you in the chat (you will receive a notification)',
    'BBCHAT_SIGNATURE'	=> '<a class="pull-right" style="font-size:12px;" href="https://goo.gl/kFxVMh" target="_blank">BBchat extension by SiteSplat</a>',
	
	'NOTIFICATION_TYPE_SITESPLAT.BBCHATPUSHER.NOTIFICATION.TYPE.MENTION'	=> 'Someone mentions you in the chat'
));
