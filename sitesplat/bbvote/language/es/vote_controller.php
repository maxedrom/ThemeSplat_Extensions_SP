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
	'NOT_ENOUGH_POINTS'		=> 'No tienes suficientes puntos para votar.',
	'POST_DOESNT_EXIST'		=> 'La publicación no existe.',
	'BBVOTE_NOT_ALLOWED'	=> 'No se permite votar en este foro.',
	'ONLY_ONE_VOTE'			=> 'Solo puedes emitir un voto por publicación.',
	'NO_SELF_POSTS'			=> 'No puedes votar en tus temas.',
	'NO_VOTE_DELETE'		=> 'No puedes eliminar el voto ya emitido.', 
	'VOTE_CASTED'			=> 'Tu voto ha sido emitido.<br><br><a href="%s">Volver al tema</a>',
));
