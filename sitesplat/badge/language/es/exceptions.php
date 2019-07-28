<?php
/**
*
* Badge Award extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Spanish translation: ThE KuKa ( Raul Arroyo ) - http://www.phpbb-es.com
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

/*
* These are errors which can be triggered by sending invalid data to the
* badge extension API.
*
* These errors will never show to a user unless they are either modifying
* the core badge extension code OR unless they are writing an extension
* which makes calls to this extension.
*
* Translators: Feel free to not translate these language strings
*/
$lang = array_merge($lang, array(
	'EXCEPTION_FIELD_MISSING'		=> 'Campos requeridos ausentes.',
	'EXCEPTION_INVALID_ARGUMENT'	=> 'Argumento no válido especificado para `%1$s`. Razón: %2$s',
	'EXCEPTION_OUT_OF_BOUNDS'		=> 'Los datos recibidos del campo `%1$s` están más allá de sus límites.',
	'EXCEPTION_TOO_LONG'			=> 'La entrada era más larga que la longitud máxima.',
	'EXCEPTION_NOT_UNIQUE'			=> 'La entrada no fue única.',
	'EXCEPTION_UNEXPECTED_VALUE'	=> 'Se han recibido datos inesperados del campo `%1$s`. Razón: %2$s',
	'EXCEPTION_ILLEGAL_CHARACTERS'	=> 'La entrada contiene caracteres no válidos.',

	'BADGE_TYPE_NOT_EXIST'		=> 'El `%1$s` no existe',
));
