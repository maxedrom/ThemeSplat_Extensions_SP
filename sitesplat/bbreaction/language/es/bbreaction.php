<?php
/**
*
* BBreaction.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
* Spanish Translation by ThE KuKa (Raúl Arroyo) - http://www.phpbb-es.com
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

$lang = array_merge($lang, array(
	'BBREACTION'						=> 'BBReaction',
	'BBREACTION_TOP_LIST'				=> 'Lista Top de reacciones',
	'BBREACTION_OTHERS'				    => '¿Otros?',
	
	'BBREACTION_WHAT'					=> '¿Cuál es su reacción?',
	'BBREACTION_MODE_ERROR'				=> 'El modo no existe',
	'BBREACTION_POST_ERROR'				=> 'El mensaje no existe',
	'BBREACTION_POST_NO_AUTH'			=> 'No está autorizado a reaccionar a este mensaje.',
	'BBREACTION_OWN_POST_ERROR'			=> 'No puede reaccionar a su propio mensaje.',
	'BBREACTION_TIME_ERROR'				=> '¡No puede reaccionar a un mensaje tan rápido!',
	'BBREACTION_REMOVED'				=> 'Su reaación ha sido eliminada',
	'REMOVED'							=> 'eliminada',
	'BBREACTION_ADDED'					=> 'Su reaación ha sido guardada',
	'ADDED'								=> 'añadida',
	'INFOMSG'						    => '¡Aviso!',
	
	'REACTIONS_POSITIVE'				=> 'Reacciones positivas',
	'REACTIONS_NEGATIVE'				=> 'Reacciones negativas',
	
	'REACTIONS_FORUM_OVERVIEW'			=> 'Visión general del Foro',
	'REACTIONS_TOPIC_OVERVIEW'			=> 'Visión general del Tema',
	'REACTIONS_POSTS_OVERVIEW'			=> 'Visión general del Mensaje',
	'REACTIONS_USER_OVERVIEW'			=> 'Visión general del Usuario',
	
	'BBREACTION_GIVVEN'					=> 'Dado',
	'BBREACTION_RECIEVED'				=> 'Recibido',
	'BBREACTION_NO_RECORDS'				=> 'No hay reacciones disponibles todavía',
	'UCP_BBREACTION_EXPLAIN'			=> 'Una visión general de las reacciones dadas y recibidas',
	'ACL_U_BBREACTION'					=> 'Puede usar BBReaction',
	
	'NOTIFICATION_TYPE_SITESPLAT.BBREACTION.NOTIFICATION.TYPE.REWARD_ADDED'	=> 'Alguien reaccionó con su mensaje',
	
	'BBREACTION_NOTI_EVENT_ADDED'		=> '<strong>Actualización de BBreaction</strong>:<br />Una reacción ha sido %1$s a su mensaje por %2$s.',
));
