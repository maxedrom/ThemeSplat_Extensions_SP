<?php
/**
*
* common [Spanish]
* @maxedrom
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
    'ALLOW_MASSEMAIL'                 => 'Quiero recibir Noticias del Administrador del Foro vía Email',
	'REGISTRATION_MASS_EMAIL_EXPLAIN' => '<strong>ATENCION</strong>: Tu siempre puedes editar la opción elegida desde: <strong>Panel de Control de Usuario &#187; Preferencia de Foros &#187; Editar Configuraciones Globales</strong>',
));
