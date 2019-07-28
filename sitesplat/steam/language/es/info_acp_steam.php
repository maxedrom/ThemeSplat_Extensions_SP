<?php
/**
*
* Steam
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
	'ACP_STEAM'				        => 'BBSteam',
	'SS_HELPER_NOTY'	            => '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'STEAM_NOTICE'	                => '<div class="phpinfo"><p><br />Registre su clave API desde: <a href="https://steamcommunity.com/dev/apikey" target="_blank">API Key Steam</a> <br />Luego ingrese el mismo código clave para "Key" y "Secret" aquí: <strong>%1$s &#187; %2$s &#187; %3$s "OAuth" Proveedor Steam</strong>. <br />Opción de usuario disponible en <strong>PCU &#187; Preferencias del Foro &#187; Editar preferencias personales: "Mostrar datos de Steam en su perfil viendo un tema"</strong> <br />La opción de firma de Steam está disponible en <strong>PCU &#187; Perfil &#187; Editar firma</strong>.<br />Además, el usuario puede vincular la cuenta de Steam directamente a través de: <strong>PCU	&#187; Perfil &#187; Administrar asociaciones de cuentas externas &#187; Steam.</strong></p></div>',
));
