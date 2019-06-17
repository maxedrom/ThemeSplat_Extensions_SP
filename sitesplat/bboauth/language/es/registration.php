<?php
/**
*
* BBOAuth
* @maxedrom [Spanish]
* @copyright (c) 2018 SiteSplat All rights reserved
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
	'AGREE_AND_REGISTER'	=> 'Estoy de acuerdo con los terminos y me he de registrar con %s',
	'OAUTH_ACCOUNT_ADDED'	=> 'Gracias por registrarte, tu cuenta ha sido creada con la cuenta de la red social que has seleccionado y acabas de Ingresar Automaticamente!',
));
