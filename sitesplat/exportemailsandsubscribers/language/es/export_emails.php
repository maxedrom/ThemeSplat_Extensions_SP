<?php
/**
*
* Export emails and subscribers extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat <http://www.sitesplat.com>
* @license SiteSplat 2015 all rights reserved
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

$lang = array_merge($lang, array(
	'EXPORT_EMAILS'									=> 'Exportar emails',
	'EXPORT_EMAILS_FORMAT'							=> 'Formato',
	'EXPORT_EMAILS_ONLY_ALLOWED_MASS_EMAIL'	        => 'Sólo los usuarios que permitieron correos electrónicos masivos',
	'EXPORT_EMAILS_SEPARATOR'						=> 'Separador',
	'EXPORT_EMAILS_SEPARATOR_EXPLAIN'				=> 'Default is break line.<br /> Por ejemplo, puede introducir una coma "&#44;"',
    'EXPORT_EMAILS_SOURCE'							=> 'Tabla de origen',
	'EXPORT_EMAILS_USERS'							=> 'Usuarios registrados',
	'EXPORT_EMAILS_SUBSCRIBERS'						=> 'Suscriptores',
	'EXPORT_EMAILS_GROUP_ID'						=> 'ID de grupo',
	
	'EXPORT_EMAIL_TITLE_EXPLAIN'				    => 'Exportar fácilmente los correos electrónicos de los usuarios del foro, y también de los suscriptores.',
    'EXPORT_EMAILS_SOURCE_EXPLAIN'					=> 'Seleccione la fuente del grupo de la tabla de la DB a exportar.<br /> Por ejemplo, usuarios registrados o la tabla externa de suscriptores.',
	'EXPORT_EMAILS_GROUP_EXPLAIN'					=> 'Introduzca el ID del grupo de usuarios del que desea exportar los correos electrónicos.<br /> Por ejemplo, el ID del grupo Administradores es "5"',
	'EXPORT_EMAILS_MASS_EXPLAIN'					=> 'Exportar los usuarios que permitieron correos electrónicos masivos del foro.',
	'EXPORT_EMAILS_FORMAT_EXPLAIN'					=> 'Seleccione el formato de archivo',
));
