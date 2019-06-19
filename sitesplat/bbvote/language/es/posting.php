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
	'BOUNTY'			=> 'Recompensa por la mejor respuesta.',
	'BOUNTY_EXPLAIN'	=> 'Puede llamar la atención sobre su pregunta colocando una recompensa sobre ella. La recompensa se tomará de sus puntos y se entregará al usuario que haya publicado la mejor respuesta como recompensa. <br />La recompensa se paga por adelantado y no es reembolsable ni editable una vez que se crea este tema.',
	'POINTS'			=> 'puntos',
	'POINTS_NOT_ENOUGH'	=> 'Usted no tiene suficientes puntos para colocar la recompensa. Puntos mínimos para la recompensa: %d. Tus puntos: %d.'
));
