<?php
/**
*
* @package BBembed
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
	'SS_HELPER_NOTY'	=> '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'IMGUR_NOTICE'		=> '<div style="width:80%%;margin:20px auto;"><p>Los ajustes de configuración de esta extensión estan en %1$s » %2$s » %3$s.<br /><strong>Por favor, tenga en cuenta, tendrá que registrar una aplicación Imgur para obtener el ID de cliente necesario para que esta extensión funcione correctamente. Para crear una nueva aplicación vaya a https://api.imgur.com/oauth2/addclient y registrese siguiendo las instrucciones proporcionadas. Use el ID de Cliente en PCA > Mensajes > Configuración de adjuntos: ID de Cliente de Imgur</strong><br />Opción de Avatar en: General &#187; Configuración del Sitio &#187; Ajustes de Avatar.<br />Opción de Firma en: General &#187; Configuración del Sitio &#187; Ajustes de Firma.</p></div>',
));
