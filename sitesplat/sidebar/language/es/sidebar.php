<?php
/**
*
* @package BBSidebar
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
* @Spanish Translation: ThE KuKa - http://www.phpbb-es.com
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
	'ACP_SIDEBAR_SLOTS'	=> 'Barra Lateral',
	'NEWEST_TOPICS'		=> 'Nuevos Mensajes',
	'NO_TOPIC_EXIST'	=> 'No hay mensajes para ver',
	'TOP_POSTERS'		=> 'TOP Usuarios Activos',
	'NEWEST_USERS'		=> 'Nuevos Usuarios',
	'IN'                => 'En',
    'BBPOINTS_TRANSFER' => 'Transferir puntos',

	'SIDEBAR_ALL_TIME'	=> 'Siempre',
	'SIDEBAR_DAILY'		=> 'Hoy',
	'SIDEBAR_WEEKLY'	=> 'Semana',
	
	'BORN'				=> 'Cumpleaños',
	'NEW_DOWNLOADS'		=> 'Nuevas',
	'POP_DOWNLOADS'		=> 'Popular',

	'CALENDAR'			=> 'Calendario',
	'CLOCK'				=> 'Reloj',
	'LIKEDD'			=> 'Últimos Me Gusta',
	
	'LAST_BADGES'		=> 'Últimas Insignias',	
	'SIDEBAR_BADGE'		=> 'Nombre de la Insignia',
	'SIDEBAR_DATE'		=> 'Fecha',
	'LAST_BBREACTIONS'	=> 'Últimas BBReacciones',
	'SIDEBAR_REACTION'	=> 'Tipo de reacción',
	'BBPOINTS'			=> 'BBPuntos',
	'POLL'				=> 'Última Encuesta',
	'NEWSLETTER'		=> 'Boletín de Noticias',
	'SIGN_IN_NEWS'		=> 'Ingrese en nuestro boletín',
	'SUBSCRIBE_BTN'		=> 'Suscribirse',
	'DOWNLOADS'			=> 'Descargas',
	
	'INFOMSG'			=> 'Información',
	'VOTE_NOT_POSIIBLE'	=> 'No es posible cambiar de voto',
	'VOTE_SAVED'		=> 'Su voto ha sido guardado',
	'VOTE_CHANGED'		=> 'Su voto ha sido cambiado',
	'NOT_FOUND'			=> 'No se encuentra su encuesta',

	'STAFF'				=> 'Equipo conectado',
	'UNKNOWN'			=> 'Desconocido',

	'DONATIONS'			=> 'Donaciones',
	'DONATE_ALSO'		=> '¿Preparado para donar? ¡Increíble! aqui tiene.',
	'MEMBERSHIPS'		=> 'Membresías',
	'MEMBERSHIPS_CTA'	=> '¿No tienes su paquete de membresía todavía?',
	'HOT_TOPICS'		=> 'Temas calientes'
));
