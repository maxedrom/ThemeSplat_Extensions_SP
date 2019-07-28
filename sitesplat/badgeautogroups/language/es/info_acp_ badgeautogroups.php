<?php
/**
*
* Badge Award extension for the phpBB Forum Software package.
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
	'BADGEAUTO_TYPE_AVATAR'			=> 'Premio e Insignia Avatar',
	'BADGEAUTO_TYPE_BADGES'			=> 'Premio e Insignia Insignias',
	'BADGEAUTO_TYPE_CROSS_BADGE'	=> 'Premio e Insignia Insignias Cruzadas',
	'BADGEAUTO_TYPE_CUSTOM'			=> 'Premio e Insignia Personalizada',
	'BADGEAUTO_TYPE_DONATIONS'		=> 'Premio e Insignia Donaciones',
	'BADGEAUTO_TYPE_LIKEDD'			=> 'Premio e Insignia  LikeBB',
	'BADGEAUTO_TYPE_PROFILEWALL'	=> 'Premio e Insignia Muro de Perfil',
	'BADGEAUTO_TYPE_SIGNATURE'		=> 'Premio e Insignia Firma',
	'BADGEAUTO_TYPE_TOPICS'			=> 'Premio e Insignia Temas',
	'BADGEAUTO_TYPE_ZEBRA_FOES'		=> 'Premio e Insignia Ignorados',
	'BADGEAUTO_TYPE_ZEBRA_FRIENDS'	=> 'Premio e Insignia Amigos',

	'BADGE_AUTOGROUPS_NOTICE'		=> '<div style="width:80%%;margin:20px auto;"><p>Los ajustes para esta extensión están en %1$s » %2$s » %3$s.<br />¡Por favor, tenga en cuenta que las normas de extensiones Paypal Donation y/o phpBB Ajax LikeBB sólo están disponibles si estas extensiones están habilitadas!</p></div>'
));
