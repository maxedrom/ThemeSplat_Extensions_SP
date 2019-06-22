<?php
/**
*
* @package sitesplat BBlinks
* @copyright (c) 2017 SiteSplat All rights reserved
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
	'BBLINKS_TITLE'			=> 'BBlinks',
	'BBLINKS_SETTING_SAVED'	=> 'Se guardó la configuración de BBlinks.',

	'BBLINKS_ENABLE'								=> 'Habilitar BBlinks',
	'BBLINKS_ENABLE_MODAL'							=> 'Habilitar aviso para enlaces externos',
	'BBLINKS_ENABLE_MODAL_EXPLAIN'					=> 'Aparecerá un aviso con confirmación después de que el usuario haga clic en el enlace externo.',
	'BBLINKS_SKIP_LINK_TYPES'						=> 'Omitir tipos de enlace',
	'BBLINKS_SKIP_LINK_TYPES_EXPLAIN'				=> 'No procese enlaces a estos tipos de archivos. Separar por tubo (|). Ejemplo: \'pdf|jpg|png\'.',
	'BBLINKS_INTERNAL_LINK_TYPES'					=> 'Tipos de enlaces internos',
	'BBLINKS_INTERNAL_LINK_TYPES_EXPLAIN'			=> 'Los tipos de enlaces especificados siempre se considerarán internos. Separar por tubo (|). Ejemplo: \'pdf|jpg|png\'.',
	'BBLINKS_EXTERNAL_LINK_TYPES'					=> 'Tipos de enlaces externos',
	'BBLINKS_EXTERNAL_LINK_TYPES_EXPLAIN'			=> 'Los tipos de enlaces especificados siempre se considerarán externos. Separar por tubo (|). Ejemplo: \'zip|rar|7z\'.',
	'BBLINKS_FORBIDDEN_DOMAINS'						=> 'Dominios prohibidos',
	'BBLINKS_FORBIDDEN_DOMAINS_EXPLAIN'				=> 'Lista de dominios para los que se deben eliminar los enlaces, separados por punto y coma (;). Ejemplo: \'http://www.porn.com\'',
	'BBLINKS_FORBIDDEN_NEW_URL'						=> 'Nueva URL prohibida',
	'BBLINKS_FORBIDDEN_NEW_URL_EXPLAIN'				=> 'URL para usar en lugar de cualquier enlace eliminado. Ejemplo: \'http://www.google.com\' o \'#top\'',
	'BBLINKS_INTERNAL_LINK_CLASS'					=> 'Clase de enlace interno',
	'BBLINKS_EXTERNAL_LINK_CLASS'					=> 'Clase de enlace externo',
	'BBLINKS_INTERNAL_LINK_TARGET'					=> 'Objetivo de enlace interno',
	'BBLINKS_EXTERNAL_LINK_TARGET'					=> 'Objetivo de enlace externo',
	'BBLINKS_INTERNAL_LINK_REL'						=> 'Enlace interno rel',
	'BBLINKS_EXTERNAL_LINK_REL'						=> 'Enlace externo rel',
	'BBLINKS_HIDE_LINKS_FROM_GUESTS'				=> 'Ocultar enlaces a invitados',
	'BBLINKS_HIDE_LINKS_FROM_GUESTS_TEXT'			=> 'Ocultar enlaces de texto a invitados',
	'BBLINKS_HIDE_LINKS_FROM_GUESTS_TEXT_EXPLAIN'	=> 'El texto del enlace será reemplazado con esta cadena.',
	'BBLINKS_SKIP_PREFIX_TYPES'						=> 'Omitir tipos de prefijo',
	'BBLINKS_SKIP_PREFIX_TYPES_EXPLAIN'				=> 'No agregue un prefijo de enlace externo para estos tipos de archivos.',
	'BBLINKS_EXTERNAL_PREFIX'						=> 'Prefijo de enlace externo',
	'BBLINKS_EXTERNAL_PREFIX_EXPLAIN'				=> 'Ejemplo: \'http://anonym.to?\'',
	'BBLINKS_INTERNAL_LINK_DOMAINS'					=> 'Dominios de enlace interno',
	'BBLINKS_INTERNAL_LINK_DOMAINS_EXPLAIN'			=> 'Lista de dominios a ser considerados locales, separados por punto y coma (;). Ejemplo: \'http://www.alternate-domain.com\'',
	'BBLINKS_CPF_LINK_NEW_WINDOW'					=> 'Abrir campos de perfil personalizados en una nueva ventana',
	'BBLINKS_SIGNATURE'								=> 'Aplicar la configuración anterior a las firmas',

	'ACP_LOCALURLTOTEXT_TITLE'			=> 'URL local para texto',
	'ACP_LOCALURLTOTEXT_SETTINGS'		=> 'Ajustes',
	'ACP_LOCALURLTOTEXT_SETTING_SAVED'	=> 'Los ajustes se han guardado con éxito!',
	'ACP_LOCALURLTOTEXT_FORUM'			=> 'Marcador de posición para el texto del enlace del foro',
	'ACP_LOCALURLTOTEXT_FORUM_EXPLAIN'	=> 'Introduzca el marcador de posición, HTML está permitido. Variables disponibles: {FORUM_NAME}',
	'ACP_LOCALURLTOTEXT_TOPIC'			=> 'Marcador de posición para texto de enlace de tema',
	'ACP_LOCALURLTOTEXT_TOPIC_EXPLAIN'	=> 'Introduzca el marcador de posición, HTML está permitido. Variables disponibles: {TOPIC_TITLE}, {FORUM_NAME}',
	'ACP_LOCALURLTOTEXT_POST'			=> 'Marcador de posición para texto de enlace de publicación',
	'ACP_LOCALURLTOTEXT_POST_EXPLAIN'	=> 'Introduzca el marcador de posición, HTML está permitido. Variables disponibles: {USER_NAME}, {USER_COLOUR}, {POST_SUBJECT}, {TOPIC_TITLE}, {POST_OR_TOPIC_TITLE}, {FORUM_NAME}',
	'ACP_LOCALURLTOTEXT_USER'			=> 'Marcador de posición para el texto del enlace del usuario',
	'ACP_LOCALURLTOTEXT_USER_EXPLAIN'	=> 'Introduzca el marcador de posición, HTML está permitido. Variables disponibles: {USER_NAME}, {USER_COLOUR}',
	'ACP_LOCALURLTOTEXT_PAGE'			=> 'Marcador de posición para el texto del enlace de páginas',
	'ACP_LOCALURLTOTEXT_PAGE_EXPLAIN'	=> 'Para el <a href="https://www.phpbb.com/customise/db/extension/pages/" target="_blank">Extensión de páginas</a>. Introduzca el marcador de posición, HTML está permitido. Variables disponibles: {PAGE_TITLE}',
	'ACP_LOCALURLTOTEXT_CPF'			=> 'Reemplazar enlaces dentro de los campos de perfil personalizado',
	'ACP_LOCALURLTOTEXT_CPF_EXPLAIN'	=> 'Si los enlaces locales deben reemplazarse dentro de los campos de perfil personalizado. Solo se consideran los campos de perfil personalizado de tipo "URL (enlace)".',
));
