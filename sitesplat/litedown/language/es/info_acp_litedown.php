<?php
/**
*
* BBmarkdown
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
	'LITEDOWN_NOTICE'	    => '<div style="width:80%;margin:20px auto;"><p>There are no specific settings for this extension. Enjoy!</p></div>',
	'SS_HELPER_NOTY'		=> 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
));
