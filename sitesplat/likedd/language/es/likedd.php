<?php
/**
*
* phpBB Ajax likeBB.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Spanish Translation: ThE KuKa ( Raul Arroyo ) - http://www.phpbb-es.com
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
	'NOTIFICATION_TYPE_SITESPLAT.LIKEDD.NOTIFICATION.TYPE.LIKEDD_ADDED'	=> 'Hay alguien al que le gusta, o no le gusta su mensaje',	

	'LIKE_MODE_ERROR'			=> 'No existe el modo',
	'LIKE_POST_ERROR'			=> 'No existe el mensaje',
	'LIKE_POST_NO_AUTH'			=> 'No está autorizado para marcar si le gusta o no le gusta este mensaje.',
	'LIKE_OWN_POST_ERROR'		=> 'No puede marcar si le gusta o no le gusta su propio mensaje.',
	'LIKE_DISLIKE_OFF_INFO'		=> 'No des por culo. La opción de no me gusta, está deshabilitada',
	'LIKE_LIKE_TIME_ERROR'		=> '¡No puede marcar Me Gusta o No Me Gusta tan rápido!',
	'LIKE_DISLIKE_REMOVE_INFO'	=> 'Para eliminar su No Me Gusta, haga clic en el botón de No Me Gusta.',
	'LIKE_LIKE_REMOVE_INFO'		=> 'Para eliminar su Me Gusta, haga clic en el botón de Me Gusta.',
	'LIKE_USER_INFO_LIKE'		=> 'Me Gusta',
	'LIKE_USER_INFO_DISLIKE'	=> 'No Me Gusta',
	'ADDED'						=> 'añadido',
	'REMOVED'					=> 'eliminado',
	'INFOMSG'					=> '¡Aviso!',

	'LIKEDD_NOTIFICATION_EVENT_ADDED'	=> '<strong>Actualización de Me Gusta / No Me Gusta</strong>:<br />Un %1$s ha sido %2$s ha su mensaje por %3$s.',
	'LIKE_USER_INFO_REMOVED'			=> 'Su %s de este mensaje ha sido eliminado.',
	'LIKE_USER_INFO_APPRECIATE'			=> '%s agradece su Me Gusta en su mensaje.',
	'LIKE_USER_INFO_APPRECIATE_STRONG'	=> '<div class="ld-ajax"><strong>%s</strong> agradece su Me Gusta en su mensaje.</div>',
	'LIKE_POST_INFO_DISLIKE'			=> 'Mensaje por %s no ha gustado.',
	'LIKE_POST_INFO_DISLIKE_STRONG'		=> '<div class="ld-ajax">Mensaje por <strong>%s</strong> no ha gustado.</div>',
	'TO_MANY_DISLIKES'		            => 'Este contenido ha recibido demasiados No Me Gusta. Haga clic en <a class="label label-warning label-dsk" href="javascript:void(0)" data-toggle="collapse" data-target=".dkd-wrapper-%s">MOSTRAR</a> para ver',

	'LIKES_OTHERS'				=> 'Otros',   
    'LIKES_LIKE_THIS'			=> 'Le gusta esto',   
    'LIKES_LIKERS'				=> 'A quién le ha gustado este mensaje',
	'LIKES_AND'					=> 'y',
	'LIKES_LIKED_LAST'       	=> '¡Le gusta esto!',
	'LIKES_LINK_OTHER_TOOLTIP'	=> 'Descubre a quién le gusta esto',
	'LIKES_TOP_LIST'			=> 'Estadísticas TOP 10 Me Gusta / No Me Gusta',

	'LIKE_ACTIVITY_UCP_EMPTY'	=> 'No hay actividad. ¿A que estás esperando? :-)',

	'LIKES_PAGE_TITLE'          => 'Lista TOP',   
    'LIKES_TABLE_TITLE'   	    => 'Tabla de Líderes',   
    'LIKES_AUTHOR'       	    => 'Autor',
	'LIKES_POST_SUBJECT'       	=> 'Mensaje/Asunto',
	'LIKES_LIKES_DISLIKES'      => 'Me Gusta/No Me Gusta',

	'LIKES_SORT_TITLE'       	=> 'Ordenar por Me Gusta/No Me Gusta',
	'LIKES_SORT_LIKES'       	=> 'Me Gusta',
	'LIKES_SORT_DISIKES'       	=> 'No Me Gusta',

	'LIKES_SORT_DATE'       	=> 'Ordenar por fecha',
	'LIKES_SORT_POSTS_AMT'    	=> 'Ordenar por mensaje',

	'NO_LIKES'					=> '¡No se encontraron Me Gusta!',

	'UCP_LD_GIVEN'              => 'Dado',   
    'UCP_LD_RECEIVED'   	    => 'Recibido',
	'LIKES_GIVEN'				=> 'Me Gusta dados',   
    'LIKES_RECEIVED'			=> 'Me Gusta recibidos',   
    'DISLIKES_GIVEN'			=> 'No Me Gusta dados',
    'DISLIKES_RECEIVED'			=> 'No Me Gusta recibidos',
	'LIKE_REMOVED'				=> 'Me Gusta eliminado',
	'DISLIKE_REMOVED'			=> 'No Me Gusta eliminado',
    'LIKES_LIKE_IT'				=> 'Me Gusta esto',   
    'LIKES_LIKE'				=> 'Me Gusta',
    'LIKES_DISLIKE_IT'			=> 'No Me Gusta esto',
    'LIKES_DISLIKE'				=> 'No Me Gusta',
    'LIKES_DISLIKE_REMOVED'		=> 'Me Gusta / No Me Gusta eliminado',
	'LIKES_ALL_LIKES'			=> 'de todos los Me Gusta',
	'LIKES_ALL_DISLIKES'		=> 'de todos los No Me Gusta',

	'AND'						=> 'y',
	'OTHERS'					=> 'otros',
	'LIKED_THIS'				=> 'le gusta esto',

	'LIKES_FORUM_OVERVIEW'		=> 'Foro en General',
	'LIKES_TOPIC_OVERVIEW'		=> 'Tema en General',
	'LIKES_POSTS_OVERVIEW'		=> 'Mensaje en General',
	'LIKES_USER_OVERVIEW'		=> 'Usuario en General',

	'UCP_LIKEDD_TITLE'			=> 'Información de Me Gusta / No Me Gusta',
	'UCP_LIKEDD_EXPLAIN'		=> 'Información General sobre todos los Me Gusta y No Me Gusta que ha recibido',
));
