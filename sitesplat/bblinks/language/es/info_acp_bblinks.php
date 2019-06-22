<?php
/**
*
* @package sitesplat BBlinks
* @copyright (c) 2017 SiteSplat All rights reserved
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
	'ACP_BBLINKS'					=> 'BBlinks',
	'ACP_BBLINKS_TITLE'				=> 'BBlinks',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore no existe!<br />Descargar el <a href="http://sitesplat.com" target="_blank">BBcore</a> y copia la carpeta BBcore en la carpeta de la extensión de tu sitesplat.',
	'BBLINKS_NOTICE'	            => '<div class="phpinfo"><p>
Los ajustes para esta extensión están bajo la <strong>EXTENSIONES</strong> tab.</p></div>',
));

