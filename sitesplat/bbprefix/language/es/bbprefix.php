<?php
/**
 *
* @package BBprefix
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
 *
 */

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
	'POSTING_PREFIXES'					=> 'Prefijos de Tema',
	'POSTING_PREFIXES_USED' 			=> 'Prefijos de Tema aplicados',
	'POSTING_PREFIXES'					=> 'Prefijos',

	'PREFIXED_TOKEN_USERNAME'			=> '{USERNAME}',
	'PREFIXED_TOKEN_USERNAME_EXPLAIN'	=> 'Este distintivo se sustituye por el nombre de usuario del usuario, se aplica al prefijo del tema.',
	'PREFIXED_TOKEN_POSTER'				=> '{POSTER}',
	'PREFIXED_TOKEN_POSTER_EXPLAIN'		=> 'Este distintivo se sustituye por el nombre de usuario del usuario del autor del tema.',
	'PREFIXED_TOKEN_DATE'				=> '{DATE}',
	'PREFIXED_TOKEN_DATE_EXPLAIN'		=> 'Este distintivo se sustituye por la fecha en la que se aplicó el prefijo del tema.',
]);
