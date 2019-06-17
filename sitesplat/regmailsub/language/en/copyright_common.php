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
	'PREMIUM_ADDONS'                  => 'Premium addons by <a href="https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat">SiteSplat</a>',
));
