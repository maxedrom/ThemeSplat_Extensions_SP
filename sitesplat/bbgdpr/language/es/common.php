<?php
/**
*
* @package BBgdpr
* @copyright (c) 2018 SiteSplat All rights reserved
* @license Proprietary
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
	// used both in ACP and/or UCP and/or all pages
	'BBGDPR_TITLE'	        => 'GDPR',
	'BBGDPR_PRIVACY_POLICY'	=> 'GDPR - Reglamento general de protección de datos',
	'PRIVACY_ACCEPT_DATE'	=> 'Fecha de aceptación Política de privacidad',
	'COOKIE_ACCEPT_DATE'	=> 'Fecha de aceptación de la política de cookies',
	'NOT_ACCEPTED'			=> 'Las políticas no han sido aceptadas',
	'MCP_ACCEPT_DATE'		=> 'Fecha de revisión de las directrices GDPR para MCP',
	'LOG_USER_DELETED'		=> 'El Usuario %s (ID %s) ha eliminado su cuenta. ',
	'LOG_POST_RETAINED'		=> 'Sus publicaciones fueron retenidas.',
	'LOG_POST_REMOVED'		=> 'Sus publicaicones fueron eliminadas.',
	'LOG_NO_POSTS'			=> 'No existían publicaciones.',

	'LOG_USER_DELETED_RETAINED'	=> '<strong>Usuario eliminado por GDPR</strong><br />» El Usuario %s (ID %s) ha eliminado su propia cuenta. Sus publicaciónes han sido retenidas.',
	'LOG_USER_DELETED_REMOVED'	=> '<strong>Usuario eliminado por GDPR</strong><br />» El Usuario %s (ID %s) ha eliminado su propia cuenta. Sus publicaciones han sido eliminadas.',
	'LOG_USER_DELETED_NO'		=> '<strong>Usuario eliminado por GDPR</strong><br />» El Usuario %s (ID %s) ha eliminado su propia cuenta. No tenía publicaciones.',
	
	// notification
	'SITESPLAT_BBGDPR_USER_DELETED'	=> 'El Usuario %s ha eliminado su cuenta.',
	'NOTIFICATION_TYPE_BBGDPR'	    => 'Un usuario ha sido eliminado debido a las políticas de GDPR',

	// cookies
	'COOKIE_CONSENT'		=> 'Para continuar visitando este sitio, debes aceptar el uso de cookies.',
	'REJECT'				=> 'Rechazar',
	'ACCEPT'				=> 'Acepto el uso de Cookies',
	'ACCEPT_GDPR'	   		=> 'Acepto las politicas de GDPR',
	'REJECT_GDPR'			=> 'Rechazado (Serás desconectado del Sitio)',
	// mcp
	'GDPR_REVIEW'			=> 'Revisión de lineamientos GDPR',
	'GDPR_NOT_REVIEWED'		=> 'Para acceder a MCP, debe confirmar que ha revisado las pautas de GDPR. Revise las pautas de GDPR: <a href="https://gdpr-info.eu/">https://gdpr-info.eu/</a>',
	'GDPR_REVIEW_CONFIRM'	=> 'Confirmo haber revisado las directrices GDPR',
	'MCP_ACCEPT_FIRST'		=> 'Para acceder a MCP, debe confirmar que ha revisado las pautas de GDPR. Por Favor, <a href="%s">confirma las directrices antes de realizar cualquier actividad</a>.',

	// privacy
	'LAST_UPDATED'			=> 'Ultima vez actualizado: %s',
	'REVIEW_PERSONAL_DATA'	=> 'Revisión de Datos Personales',
	'REACCEPT_COOKIE'		=> 'Parece que anteriormente rechazaste la política de cookies. ¿Has cambiado de idea?',
));
