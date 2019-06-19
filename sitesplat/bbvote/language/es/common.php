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
	'BBVOTE_SEARCH_GIVEN'		=> 'Buscar las mejores respuestas dadas',
	'BBVOTE_SEARCH_RECEIVED'	=> 'Buscar las mejores respuestas recibidas',
	
	'BBVOTE_POST_BOUNTY'	=> 'Generosidad',

	'NOTIFICATION_POST_NEGATIVE_TITLE'	=> 'Un post recibió demasiados votos a la baja..',
	'NOTIFICATION_UPVOTE_TITLE'			=> 'Has recibido un voto positivo :)',
	'NOTIFICATION_DOWNVOTE_TITLE'		=> 'Has recibido un voto negativo :(',
	'NOTIFICATION_BEST_ANSWER_TITLE'	=> 'Tu publicación ha sido marcada como la mejor respuesta!',
));
