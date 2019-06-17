<?php
/**
*
* @package language
* @package sitesplat BBcore addon
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'UCP_IR'				    => 'Redimensionar imagen',
		'IMAGE_RESIZE'			    => 'Redimensionar imagen',
		'IMAGE_RESIZE_EXPLAIN'	    => 'Recorte %1$s de la imagen y confirme.',
		// Your avatar will be saved with a height of %1$s pixels and a width of %2$s pixels.',

		'IMAGE_RESIZE_ERROR'	    => '¡Ninguna aplicación o archivo para enviar!',
		'IMAGERESIZE_NOTICE'	    => '<div class="phpinfo"><p>No existe una configuración específica para esta extensión. Después de que el usuario subá el avatar a través del PCU - Subir Avatar, la opción de recorte estará disponible.<br /> Compruebe el PCA &#62; Ajustes de Avatar: "Tamaño máximo del archivo de avatar" debe ser 0 o 2mb o más para una experiencia del usuario fluida.</p></div>',
		'ERROR_IMAGERESIZE_DISABLE'	=> 'No se puede deshabilitar BBAvatarResize debido a otras extensiones de SiteSplatsiguen habilitadas.<br /><div>» %s</div>',
	    'SS_HELPER_NOTY'	    	=> '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	)
);
