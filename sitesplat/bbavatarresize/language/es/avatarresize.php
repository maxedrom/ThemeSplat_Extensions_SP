<?php
/**
*
* @package Avatar Resize
* @copyright (c) 2016 SiteSplat All rights reserved
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
		'AVATAR_RESIZE'			=> 'Cambio de tamaño de Avatar',
		'AVATAR_RESIZE_EXPLAIN'	=> 'Presione el botón del lápiz para recortar su %1$s, luego podrá Enviar. Su %1$s se guardará con una altura de %2$s píxdeles y una anchura de %3$s píxeles.',
		'BBAVATARRSIZE_NOTICE'	=> '<div class="phpinfo"><p>No hay una configuración específica para esta extensión. Después de que el usuario suba el avatar a través de la subida de Avatar del PCU, la opción de cambiar tamaño estará disponible.<br /> Compruebe PCA &#62; Configuración de Avatar: "Tamaño máximo del avatar" en 0, en 2 MB o más, para una experiencia de usuario sin problemas.</p></div>',
		'SS_HELPER_NOTY'	    => '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	)
);
