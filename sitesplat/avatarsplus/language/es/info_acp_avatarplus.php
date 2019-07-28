<?php
/**
*
* @package BBavatar+
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
	'ACP_BBAVATARPLUS'				=> 'BBAvatar+',
	'UCP_UCP'				        => 'Panel de Control del Usuario',
	'SS_HELPER_NOTY'	            => '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'BBAVATARPLUS_NOTICE'	        => '<div class="phpinfo"><p>Los ajustes de esta extensión están en <strong>%1$s » %2$s » %3$s</strong> luego seleccione el controlador <strong>“Avatar Material”</strong> o <strong>“Generador de Avatar”</strong>.<br />Para obtener el mejor resultado es muy recomendable aumentar el tamaño máximo del avatar a 400x400 en el <strong>PCA > Configuración de avatar > Dimensiones máximas del avatar</strong>.</p></div>',
));
