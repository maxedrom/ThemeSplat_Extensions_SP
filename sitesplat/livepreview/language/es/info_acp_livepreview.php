<?php
/**
* @maxedrom [Español]
* BBlivePreview
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
	'LIVEPREVIEW_NOTICE'	=> '<div style="width:80%;margin:20px auto;"><p>No hay configuraciones específicas para esta extensión. A Disfrutar!</p></div>',
	'SS_HELPER_NOTY'		=> 'SiteSplat BBcore no existe!<br />Descarguelo de <a href="http://sitesplat.com" target="_blank">BBcore</a> y luego copie la carpeta de BBcore adentro de la carpeta de extensiones de SiteSplat.',
));
