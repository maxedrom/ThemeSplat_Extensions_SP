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
	'SNAPPY_NOTICE'		=> '<div style="width:80%;margin:20px auto;"><p>No hay configuraciones específicas para esta extensión. Recuerde activar la opción de respuesta rápida de phpBB en: <strong>%1$s &#187; %2$s &#187; %3$s "Permitir respuesta rápida".</strong><br />Tenga en cuenta, que si tiene la extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=23" target="_blank">IMGUR</a> instalada, También puede habilitar o deshabilitar la opción de IMGUR en la respuesta rápida.<br />La opción está en: <strong>PCA &#187; General &#187; Configuración del foro &#187; Ajustes de Adjuntos "Permitir IMGUR en Smart Snappy Reply"</strong></p></div>',
));
