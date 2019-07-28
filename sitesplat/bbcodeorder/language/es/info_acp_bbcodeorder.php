<?php
/**
*
* @package BBCodeorder
* @copyright (c) 2016 SiteSplat All rights reserved
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
	'ACP_BBCODEORDER'				=> 'BBCodeOrder+',
	'SS_HELPER_NOTY'	            => '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'BBCODEORDER_NOTICE'	        => '<div class="phpinfo"><p>Los ajustes de esta extensión están en %1$s » %2$s » %3$s.</p></div>',
));
