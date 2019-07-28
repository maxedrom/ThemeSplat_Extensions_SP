<?php
/**
*
* common [Spanish]
*
* @package language
* @version $Id$
* @copyright (c) 2014 SiteSplat.com
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
    'ALLOW_MASSEMAIL'                 => 'Quiero recibir información/noticias del Administrador/foro por correo electrónico',
	'REGISTRATION_MASS_EMAIL_EXPLAIN' => '<strong>NOTa</strong>: Siempre puede modificar su selección en: <strong>Panel de Control de Usuario &#187; Preferencias del Foro &#187; Editar ajustes globales</strong>',
));
