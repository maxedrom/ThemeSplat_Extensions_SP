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

$lang = array_merge($lang, array(
	'ACP_BADGE_MANAGE'			=> 'Gestionar Premios e Insignias',
	'BADGE_TYPE_NOT_EXIST'		=> 'El tipo de Premio Insignia `%1$s` no existe.',
	'BADGE_NOTICE'				=> '<div style="width:80%%;margin:20px auto;"><p>Los ajustes de está Extensión están en %1$s » %2$s » %3$s.<br /><strong>¡Por favor, tenga en cuenta que las normas de extensiones Paypal Donation y/o phpBB Ajax LikeBB sólo están disponibles si estas extensiones están habilitadas!</strong></p></div>',

	// Logs
	'ACP_BADGE_SAVED_LOG'		=> '<strong>Una configuración de Premio e Insignia ha sido guardada</strong>',
	'ACP_BADGE_ADD_LOG'			=> '<strong>Una configuración de Premio e Insignia ha sido añadida</strong>',
	'ACP_BADGE_DELETE_LOG'		=> '<strong>Una configuración de Premio e Insignia ha sido borrada</strong>',
	'ACP_BADGE_IMG_DELETE_LOG'	=> '<strong>Una imagen de Insignia ha sido borrada</strong>',
	'ACP_BADGE_IMG_UPLOAD_LOG'	=> '<strong>Una nueva imagen de Insignia ha sido subida</strong>',
));
