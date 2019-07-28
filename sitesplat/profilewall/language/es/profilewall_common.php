<?php
/**
*
* Profile Wall
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Spanish translation: ThE KuKa ( Raul Arroyo ) - http://www.phpbb-es.com
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
	'PROFILE_COMMENT'						=> array(
		1	=> '%1s comentario de Perfil',
		2	=> '%1s comentarios de Perfil'
	),
	'PROFILE_REPLIES'						=> array(
		1	=> '%1s respuesta de Perfil',
		2	=> '%1s respuestas de Perfil'
	),

	'PROFILE_VIEW_COMMENT'		=> 'Comentarios de Perfil',
	'PROFILE_VIEW_REPLY'		=> 'Respuestas de Perfil',
	'PROFILE_WALL'				=> 'Muro de Perfil',
	'POST_COMMENT'				=> 'Nuevo Comentario',
	'POST_REPLY'				=> 'Responder',
	'SHOW_REPLY'				=> 'Mostrar Respuestas',
	'HIDE_REPLY'				=> 'Ocultar Respuestas',
	'SHOW_COUNTERS'				=> 'Mostrar Contadores',
	'SHOW_COUNTERS_EXPLAIN'		=> 'Mostrar contadores en Tema de Perfil',
	'REPLY_ENABLED'				=> 'Responder habilitado',
	'REPLY_ENABLED_EXPLAIN'		=> 'Responder Global habilitado',
	'HIDE_REPLY_EXPLAIN'		=> 'Ocultar respuestas por defecto',
	'REPLY_PADDING'				=> 'Relleno de Respuesta',
	'REPLY_PADDING_EXPLAIN'		=> 'Cantidad de píxeles de <strong>padding (relleno)</strong> a la derecha para la respuesta.',
	'HIDE_FORM'					=> 'Ocultar Formulario',
	'EDIT'						=> 'Editar',
	'COMMENT_UPDATED'			=> 'Respuesta actualizada',
	'NEW_COMMENT_PLACEHOLDER'	=> 'Introduzca su comentario. Los BBCodes y Emoticonos estándar están permitidos.',

	'NOTIFICATION_PROFILE_COMMENT' 			=> '%1s ha publicado un comentario en el Perfil de %2s.',
	'NOTIFICATION_PROFILE_COMMENT_OPTION'	=> 'Alguien ha publicado un comentario en su Perfil',
	'NOTIFICATION_PROFILE_REPLY'			=> '%s ha publicado una respuesta a un comentario.',
	'NOTIFICATION_PROFILE_COMMENT_REPLY'	=> 'Alguien ha publicado una respuesta a una de sus respuestas en una página de Perfil',
));
