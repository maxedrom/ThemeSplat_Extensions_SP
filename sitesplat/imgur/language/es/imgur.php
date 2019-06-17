<?php
/**
*
* Imgur - forum images uploader
*
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

$lang = array_merge($lang, array(
	'IMGUR_CLIENT_ID'			=> 'ID del cliente en Imgur',
	'IMGUR_CLIENT_ID_EXPLAIN'	=> 'Necesita registrar una App de Imgur para obtener el <strong>ID de Cliente</strong>.<br /> Para crear una nueva App vaya a <a href="https://api.imgur.com/oauth2/addclient">está página</a>. A continuación, introduzca el ID de Cliente aquí.',

	'IMGUR_UPLOAD_TITLE'		=> 'Subir una imagen',
	'IMGUR_UPLOAD_MAIN'			=> 'Suba una imagen para usar en el tema a través del servicio de Imgur. La imagen se insertará automáticamente en el campo del mensaje una vez enviada',
	'IMGUR_UPLOAD'				=> 'Subir imagen ahora',
	'IMGUR_SELECT'				=> 'Seleccione la imagen',
    'IMGUR_COPY'				=> 'Copiar',

	'IMGUR_OUTPUT_LINK'			=> 'Enlace directo',
	'IMGUR_OUTPUT_IMAGE'		=> 'Etiqueta BBCode',
	'IMGUR_OUTPUT_IMAGE_DELETE'	=> 'Enlace de borrado',
	'IMGUR_OUTPUT_PLACEHOLDER'	=> 'Esperando la carga de imágenes...',

	'IMGUR_SIGNATURE'	=> 'Permitir usar la subida de imagen de IMGUR en firmas de usuarios',

	'ALLOW_IMGUR'					=> 'Permitir avatares IMGUR',
	'AVATAR_DRIVER_IMGUR_TITLE'		=> 'Avatar IMGUR',
	'AVATAR_DRIVER_IMGUR_EXPLAIN'	=> '',
	'IMGUR_AVATAR'					=> 'Avatar IMGUR',

	'IMGUR_QUICKREPLY'	=> 'Permitir IMGUR en Snappy Smart Reply',

));
