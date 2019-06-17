<?php
/**
*
* @package BBwatermark
* @copyright (c) 2016 SiteSplat (http://sitesplat.com)
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
	'BBWATERMARK_PATH'			    => 'BBwatermark',
	'BBWATERMARK_PATH_EXPLAIN'	    => 'Absolute path to the watermark image or leave it empty to use the username (uploader) and board url text based watermark. Use .png files only! (ex: images/misc/watermark.png)<br /><strong>NOTE</strong>: The watermark MUST be a <strong>PNG8</strong> format. You can convert your PNG file easily online at: <a href="http://compresspng.com/" target="blank">www.compresspng.com</a>',
	'LOG_BBWATERMARK_INSTALLED'		=> '<strong>BBwatermark installed succesfully</strong>',
	'LOG_BBWATERMARK_DEINSTALLED'	=> '<strong>BBwatermark uninstalled succesfully</strong>',

	'LOG_BBWATERMARK_NOT_REPLACED'	=> '<strong>BBwatermark didn\'t uninstall succesfully</strong><br />Could not replaced file(s)<br />» %s',
	'LOG_BBWATERMARK_NOT_UPDATED'	=> '<strong>BBwatermark didn\'t install succesfully</strong><br />Could not update file(s)<br />» %s',
	'BBWATERMARK_NOTICE'		    => '<div class="phpinfo"><p>The Settings for this extension are in <strong>%1$s » %2$s » %3$s.</strong></p></div>',

));
