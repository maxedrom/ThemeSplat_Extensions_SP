<?php
/**
*
* @package BBdownloads
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
*
*/
/**
* @ignore
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
	'BBDOWNLOADS'				=> 'Descargas',
	'VERSION'					=> 'Versión',
	'VERSION_V'					=> 'v.',
	'DOWNLOAD'					=> 'Descargar',
	'CHANGELOG'					=> 'Cambios',
	'DOWNLOAD_INDEX'			=> 'Índice de descargas',
	'DIRECORY_TREE'				=> 'Árbol del Directorio',
	
	'BBDOWNLOAD_FUNC_DISABLED'	=> 'No tiene acceso para descargar este archivo',
	'BBDOWNLOAD_TO_FEW_POINTS'	=> 'No tiene suficientes BBPuntos, necesita al menos %s BBPuntos',
	
	'NEWARTICLE'				=> 'Nuevas descargas',
	'POPARTICLE'				=> 'Descargas populares',
	'OTHERS'					=> 'Otras descargas',

	'CATEGORY'					=> 'Categoría',
	'MCP_CLASSIFIEDS'			=> 'Clasificados de cola',
	'MCP_TITLE'					=> 'Título de descarga',
	'MCP_OWNER'					=> 'Dueño',


	'NOTIFICATION_TYPE_BBDOWNLOADS_MOD'		=> 'Los Moderadores tienen un nuevo elemento de descargas en la cola',
	'NOTIFICATION_TYPE_BBDOWNLOADS_ADD'		=> 'Recibir notificación de nuevas entradas de descarga',
	'NOTIFICATION_TYPE_BBDOWNLOADS_VERSION'	=> 'Recibir notificación para las nuevas entradas de la versión de descarga',
	'BBDOWNLOADS_NOTIFICATION_ADD'			=> '<strong>Añadida nueva descarga</strong>:<br /><a href="%2$s">%1$s</a>',
	'BBDOWNLOADS_NOTIFICATION_VERSION'		=> '<strong>Añadida nueva versión</strong>:<br /><a href="%2$s">%1$s</a>',
));
