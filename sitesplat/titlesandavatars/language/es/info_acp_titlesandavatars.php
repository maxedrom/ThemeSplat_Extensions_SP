<?php
/**
*
* Titles and Avatars
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Spanish Translation: ThE KuKa ( Raul Arroyo ) - http://www.phpbb-es.com
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
	'TAT'						=> 'BBAvatars',
	'TAT_SHOW_AVATARS'			=> 'Mostrar avatares',
	'TAT_SHOW_AVATARS_EXPLAIN'	=> 'Mostrar avatar del último, el primero o ambos escritores',
	'TAT_SHOW_AVATARS_ML'		=> 'Mostrar avatares en la Lista de Usuarios',
	'TAT_SHOW_AVATARS_PP'		=> 'Mostrar avatares (de participantes) en el Tema',
	'TAT_SHOW_AVATARS_OL'		=> 'Mostrar avatares en la Lista de Conectados',

	'TAT_BOTH'					=> 'Mostrar avatares de ambos escritores',
	'TAT_FIRST'					=> 'Mostrar solamente el avatar del autor del tema',
	'TAT_LAST'					=> 'Mostrar solamente el avatar del último usuario en responder',
	
	'TAT_AVATAR_FIRST'			=> 'Creado por:',
	'TAT_AVATAR_LAST'			=> 'Última respuesta por:',

	'SS_HELPER_NOTY'	        => '¡El añadido BBCore no existe!<br />Descargue el <a href="#">BBCore</a> y copie la carpeta en la carpeta de extensiones sitesplat.',
	'BBAVATARS_NOTICE'			=> '<div style="width:80%%;margin:20px auto;"><p><strong>Los ajustes de la extensión se encuentran en %1$s » %2$s » %3$s.</strong></p></div>',

));
