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
	'ACP_PROFILEWALL'			    => 'Profile Wall',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	'PROFILEWALL_NOTICE'	        => '<div class="phpinfo"><p>The Setting for this extension are in <strong>%1$s » %2$s » %3$s</strong>.<br/>Make sure to set the permission roles. <strong>Permission &#187; Permission roles</strong> and both <strong>"Moderator roles"</strong> and <strong>"User roles"</strong></p></div>',
	
	
	'ACL_U_PROFILE_WALL_VIEW'			=> 'Can view profile comments',
	'ACL_U_PROFILE_WALL_EDIT'			=> 'Can edit profile comments',
	'ACL_U_PROFILE_WALL_POST'			=> 'Can post profile comments',
	'ACL_U_PROFILE_WALL_LIKE'			=> 'Can like profile comments',

	'ACL_M_PROFILE_WALL_EDIT'			=> 'Can edit profile comments',
    'ACL_M_PROFILE_WALL_SOFT_DEL'		=> 'Can soft delete profile comments',
	'ACL_M_PROFILE_WALL_VIEW_SOFT_DEL'	=> 'Can view soft deleted profile comments',

));
