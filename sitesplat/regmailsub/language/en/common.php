<?php
/**
*
* common [English]
*
* @package language
* @version $Id$
* @copyright (c) 2014 SiteSplat.com
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
    'ALLOW_MASSEMAIL'                 => 'I want to receive info/news from the Administrator/Board via email',
	'REGISTRATION_MASS_EMAIL_EXPLAIN' => '<strong>NOTE</strong>: You can always edit your selection under: <strong>User Control Panel &#187; Baord Preferences &#187; Edit Global Settings</strong>',
));
