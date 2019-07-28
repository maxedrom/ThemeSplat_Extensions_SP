<?php
/**
*
* Badge Award extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat <http://www.sitesplat.com>
* @license SiteSplat 2015 all rights reserved
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
	'BADGE_TYPE_BOOKMARKED'		=> 'Favoritos',
	'BADGE_TYPE_CROSS_BADGE'	=> 'Insignia Cruzada',
	'BADGE_TYPE_POLLS'					=> 'Encuestas',
	'BADGE_TYPE_REPORTS'				=> 'Reportes',
	'BADGE_TYPE_SUBSCRIBED'		=> 'Suscritos',
	'BADGE_TYPE_TOPICS'					=> 'Temas',

	'BADGEAUTO_TYPE_BOOKMARKED'	=> 'Premio e Insignia Favoritos',
	'BADGEAUTO_TYPE_CROSS_BADGE'	=> 'Premio e Insignia Cruz',
	'BADGEAUTO_TYPE_POLLS'					=> 'Premio e Insignia Encuestas',
	'BADGEAUTO_TYPE_REPORTS'			=> 'Premio e Insignia Reportes',
	'BADGEAUTO_TYPE_SUBSCRIBED'		=> 'Premio e Insignia Suscritos',
	'BADGEAUTO_TYPE_TOPICS'				=> 'Premio e Insignia Temas',

	'BOOKMARKED_EXPLAIN'	=> 'Premio e Insignia para los autores con ususarios marcado como Favorito',
	'CROSS_BADGE_EXPLAIN'	=> 'Premio e Insignia para normas específicas',
	'POLLS_EXPLAIN'					=> 'Premio e Insignia para los autores de una encuesta',
	'REPORTS_EXPLAIN'			=> 'Premio e Insignia para los que más reportan',
	'SUBSCRIBED_EXPLAIN'		=> 'Premio e Insignia para los autores de temas con usuarios Suscritos',
	'TOPICS_EXPLAIN'				=> 'Premio e Insignia para creadores de temas',

	'ACP_BADGE_RULESLIST'	=> 'Lista de Normas',
	'ACP_BADGE_RULESLIST_EXPLAIN'	=> 'Seleccione multiples normas pulsando CTRL y clic.',
	'BADGE_PREMIUM_NOTICE'				=> '<div style="width:80%%;margin:20px auto;"><p>Los ajustes para esta extensión están en %1$s » %2$s » %3$s.</p></div>',
));
