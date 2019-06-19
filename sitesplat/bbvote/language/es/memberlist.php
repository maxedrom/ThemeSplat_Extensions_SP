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
	'MEMBER_POINTS'				=> 'Puntos de reputación',
	'BBVOTE_TOP_POSTS'			=> 'Top 5 de las publicaciones más votadas',
	'TOTAL_BEST_ANSWERS_GIVEN'	=> 'Total de las mejores respuestas: %d.',
	'TOTAL_UPVOTES_RECEIVED'	=> 'Total de los votos positivos recibidos: %d.',
));
