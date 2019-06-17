<?php
/**
*
* phpBB Ajax likeBB.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Spanish Translation: ThE KuKa ( Raul Arroyo ) - http://www.phpbb-es.com
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

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_LIKEBB_LIKE'	    => 'Puede usar Me Gusta en los mensajes',
	'ACL_U_LIKEBB_DISLIKE'	=> 'Puede usar No Me Gusta en los mensajes',
));
