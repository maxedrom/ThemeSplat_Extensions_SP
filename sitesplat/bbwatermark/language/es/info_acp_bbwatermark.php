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
	'BBWATERMARK_PATH_EXPLAIN'	    => 'Path Absoluto de la Imagen de Agua, o deje deje este valor vacio para usar el nombre de usuario (uploader) y la url del sitio. Utilize solo imágenes .png ! (Ej: images/misc/watermark.png)<br /><strong>NOTA</strong>: La imágen de Agua debe ser en formato <strong>PNG8</strong>. Puede convertir las imagenes PNG de manera Online en: <a href="http://compresspng.com/" target="blank">www.compresspng.com</a>',
	'LOG_BBWATERMARK_INSTALLED'		=> '<strong>BBwatermark instalado correctamente</strong>',
	'LOG_BBWATERMARK_DEINSTALLED'	=> '<strong>BBwatermark desinstalado correctamente</strong>',

	'LOG_BBWATERMARK_NOT_REPLACED'	=> '<strong>BBwatermark no se desinstalo correctamente</strong><br />No pudo remplazar los archivos<br />» %s',
	'LOG_BBWATERMARK_NOT_UPDATED'	=> '<strong>BBwatermark no se ha instalado correctamente</strong><br />No pudo actualizar los archivos<br />» %s',
	'BBWATERMARK_NOTICE'		    => '<div class="phpinfo"><p>La configuración de esta extension esta en <strong>%1$s » %2$s » %3$s.</strong></p></div>',

));
