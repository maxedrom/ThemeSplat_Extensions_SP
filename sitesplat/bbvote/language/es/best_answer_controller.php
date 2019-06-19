<?php
/**
 *
 * @package BBvote
 * @copyright (c) 2019 SiteSplat All rights reserved
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
	'POST_DOESNT_EXIST'		=> 'La publicación no existe.',
	'BBVOTE_NOT_ALLOWED'	=> 'No se permite votar en este foro.',
	'NOT_ALLOWED'			=> 'No tienes permitido marcar esta publicación como la mejor respuesta..',
	'MARK_SUCCESS'			=> 'La entrada fue marcada como la mejor respuesta.<br><br><a href="%s">Volver al post</a>',
	'UNMARK_SUCCESS'		=> 'La publicación fue sin marcar como la mejor respuesta.<br><br><a href="%s">Volver al post</a>',
));
