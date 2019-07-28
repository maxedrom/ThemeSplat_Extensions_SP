<?php
/**
*
* BBbreadcrumbs
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
	'ACP_BREADCRUMBS'				=> 'BBbreadcrumbs',
	'SS_HELPER_NOTY'	            => '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'BREADCRUMBS_NOTICE'	        => '<div class="phpinfo"><p>No hay configuraciones específicas para esta extensión. El breadrcumb (camino) está activo y ahora funcionará automáticamente a través de las páginas del foro.</p></div>',
));
