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

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BADGE_MANAGE'			    => 'Premios e Insignias',
	'BADGE_MANAGE_EXPLAIN'		=> 'Una visión general de todas las Insignias adjudicadas.',
	'BADGE_RECENT'				=> 'Premios Recientes',
	'BADGE_USER'				=> 'Premios e Insignias del Usuario',
	'BADGE_INTRO_TITLE'		    => '¡Insignias encima de usted!',
	'BADGE_INTRO_TEASER_BODY'	=> 'Tanto si ha ganado una competición, ayudó en todo, o incluso sólo se unió a nosotros, estamos felices de celebrar su contribución a nuestra comunidad.',
	'BADGE_INTRO'	            => 'Tanto si ha ganado una competición, ayudó en todo, o incluso sólo se unió a nosotros, estamos felices de celebrar su contribución a nuestra comunidad.',
	'BADGE_AWARDS_TOPIC'	    => 'Premios',
	'BADGE_WALL_TITLE'	        => 'Mi muro de colección de Premios',

	'UCP_BADGE_TITLE'			=> 'Premios e Insignias',
	'UCP_BADGE_EXPLAIN'			=> 'Una visión general de Insignias asignadas a usted.',

	// Conditions
	'BADGE_TYPE_AVATAR'			=> 'Avatar',
	'BADGE_TYPE_BADGES'			=> 'Insignias adjudicadas',
	'BADGE_TYPE_BIRTHDAYS'		=> 'Edad del usuario',
	'BADGE_TYPE_CUSTOM'			=> 'Personalizado',
	'BADGE_TYPE_DONATIONS'		=> 'Donaciones',
	'BADGE_TYPE_LIKEDD'			=> 'LikeBB',
	'BADGE_TYPE_MEMBERSHIP'		=> 'Días como usuario',
	'BADGE_TYPE_POSTS'			=> 'Mensajes',
	'BADGE_TYPE_PROFILEWALL'	=> 'Muro de Perfil',
	'BADGE_TYPE_SIGNATURE'		=> 'Firma',
	'BADGE_TYPE_WARNINGS'		=> 'Advertencias',
	'BADGE_TYPE_ZEBRA_FOES'		=> 'Ignorado',
	'BADGE_TYPE_ZEBRA_FRIENDS'	=> 'Amigos',

	'BADGE_USED'				=> 'usado',
	'BADGE_BETWEEN'				=> 'entre',
	'BADGE_AND'					=> 'y',
	'BADGE_MORE'				=> 'igual o mayor que',
	'MORE_BADGES'				=> '<a class="badge-more" href="%1$s"><span class="hidden-xs">&#43;%2$s más</span><i class="visible-xs-inline-block fa fa-plus-circle"></i></a>',

	// Notifications
	'BADGE_NOTIFICATION_EVENT_ADDED'	=> '<strong>Premio actualizado</strong>:<br />Ha sido añadida una nueva Insignia llamada %1$s.',
	'BADGE_NOTIFICATION_EVENT_REMOVED'	=> '<strong>Premio actualizado</strong>:<br />Ha sido eliminada la Insignia %1$s.',
	'BADGE_WHOHOO'						=> '¡Woohoo, hay una nueva Insignia brillante para celebrar!<hr><strong>Acaba de desbloquear una nueva Insignia</strong>, vaya a <a href="%1$s">su página de Insignias</a> to see them all!',

	// Misc
	'BADGE_LINK_AD'	                    => 'Sistema BBAwards por SiteSplat',
	'BADGE_LINK_AD_TITLE'	            => 'Estilos y Extensiones Premium Profesionales'
));
