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
	'MARK_BEST_ANSWER'		=> 'Marque esta respuesta como la mejor respuesta',
	'UNMARK_BEST_ANSWER'	=> 'Desmarca esta respuesta como la mejor respuesta',

	'ALREADY_VOTED'		=> 'Ya has votado en esta publicación.',
	'NOT_ENOUGH_POINTS'	=> 'No tienes suficientes puntos para votar. Necesitas %d puntos.',
	'NO_SELF_POSTS'		=> 'No puedes votar tus mensajes.',
	'REMOVE_OWN'		=> 'Eliminar tu voto actual',

	'POSTER_POINTS'	=> 'Puntos de reputación',

	'TOPIC_BOUNTY'	=> 'Hay una recompensa de %d puntos por responder a esta pregunta!',

	'MSG_UPVOTED'	=> 'Has dado un voto positivo correctamente.',
	'MSG_DOWNVOTED'	=> 'Has dado un voto negativo correctamente.',
	'MSG_XVOTED'	=> 'Tu voto ha sido eliminado correctamente.',
	'MSG_MARKED'	=> '¡Excelente! mensaje marcado como la mejor respuesta!',
	'MSG_UNMARKED'	=> 'Has quitado este mensaje como mejor respuesta.',
));
