<?php
/**
*
* Profile Wall
* @copyright (c) 2015 SiteSplat All rights reserved
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
	'PROFILE_COMMENT'						=> array(
		1	=> '%1s profile comment',
		2	=> '%1s profile comments'
	),
	'PROFILE_REPLIES'						=> array(
		1	=> '%1s profile reply',
		2	=> '%1s profile replies'
	),
	
	'PROFILE_VIEW_COMMENT'					=> 'Profile comments',
	'PROFILE_VIEW_REPLY'				    => 'Profile replies',
	'PROFILE_WALL'							=> 'Profile Wall',
	'POST_COMMENT'							=> 'New Comment',
	'POST_REPLY'							=> 'Post Reply',
	'SHOW_REPLY'							=> 'Show replies',
	'HIDE_REPLY'							=> 'Hide replies',
	'SHOW_COUNTERS'							=> 'Show counters',
	'SHOW_COUNTERS_EXPLAIN'					=> 'Show counters in topic-profile',
	'REPLY_ENABLED'							=> 'Reply enabled',
	'REPLY_ENABLED_EXPLAIN'					=> 'Global reply enabled',
	'HIDE_REPLY_EXPLAIN'					=> 'Hide replies by default',
	'REPLY_PADDING'							=> 'Reply padding',
	'REPLY_PADDING_EXPLAIN'					=> 'Amount of pixels a reply is padding from left',
	'HIDE_FORM'								=> 'Hide form',
	'EDIT'									=> 'Edit',
	'COMMENT_UPDATED'						=> 'Reply updated',
	'NEW_COMMENT_PLACEHOLDER'			    => 'Enter your comment. Standard BBcodes and smilies are allowed',
	'HIS'									=> 'his',
	'YOUR'									=> 'your',
	'NOTIFICATION_PROFILE_COMMENT' 			=> '%1s posted a comment to %2s profile.',
	'NOTIFICATION_PROFILE_COMMENT_OPTION'	=> 'Someone posts a comment to your profile',
	'NOTIFICATION_PROFILE_REPLY'			=> '%s posted a reply to a comment.',
	'NOTIFICATION_PROFILE_COMMENT_REPLY'	=> 'Someone posts a reply to one of your replies on a profile page',
));
