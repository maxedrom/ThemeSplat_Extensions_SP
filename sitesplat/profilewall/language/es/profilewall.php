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
	'PROFILE_COMMENT'		=> 'Profile Comment',
	'PROFILE_COMMENTS'		=> 'Profile Comments',
	'XS_COMMENT'			=> 'Comments',
	'XS_REPLIES'			=> 'Replies',
	
	'WALL'      			=> 'Wall',

	'MESSAGE_NOT_EXISTS'	=> 'That message does not exist.',
	'NO_POST_PERMISSION'	=> 'Looks like you have no permission to post',
    'INFOMSG'			    => 'Heads up!',
	
	'EDIT_NO_PERMISSION'	=> 'You do not have permission to edit that comment.',
	'EDIT_NO_POSTED_DATA'	=> 'No data was given for editing.',
	'SUCCESSFUL_EDIT'		=> 'Message was successfully edited!',
	'SUCCESSFUL_ADDED'		=> 'Message was successfully added!',
	'EDIT_GET_MUST_AJAX'	=> 'Retrieving message for editing must be done via AJAX.',
	'MESSAGE_NOT_EXISTS'	=> 'That message does not exist.',
	'MESSAGE_TO_SHORT'		=> 'This message is too short.',
	
	'POST_COMMENT'			=> 'Post Comment',
	'RESTORE'				=> 'Restore',
	'SOFT_DELETED'			=> 'Soft Deleted',

	'AJAX_ISSUE'			=> 'There was an AJAX issue :-|',

	'IS_SOFT_DELETED'		=> 'This comment has been soft deleted.',
	'IS_EDITED'				=> 'This message was edited.',
	'S_DEL'					=> 'Soft Delete',
	'S_RESTORE'				=> 'Restore Soft Deleted Comment',
	'S_DEL_CONFIRM'			=> 'Are you sure you would like to soft delete this comment? Note that the comment will still be visible to the board\'s moderators.',
	'S_RESTORE_CONFIRM'		=> 'Are you sure you would like to restore this comment?',
	'DELETE_NO_PERMISSION'	=> 'You do not have permission to delete comments.',

	'LIKE'						=> 'Like this comment or reply',
	'LIKE_OWN_POST_ERROR'		=> 'You cannot like/dislike your own post.',
	'LIKE_LIKE_TIME_ERROR'		=> 'You can not like - dislike a post so fast!',
	'LIKE_DISLIKE_REMOVE_INFO'	=> 'To remove your dislike, click the dislike button.',
	'LIKE_LIKE_REMOVE_INFO'		=> 'To remove your like, click the like button.',
	'LIKE_POST_NO_AUTH'			=> 'You are not authorized to like/dislike this post.',
	'LIKE_MODE_ERROR'			=> 'Mode does not exist',
	'LIKE_POST_ERROR'			=> 'Post does not exist',
	'LIKES_REMOVED'				=> 'Like Removed',
	'LIKES_GIVEN'				=> 'Like Given',	
		
	'PROFILE_RETURN'		=> 'Return to user\'s profile',
));
