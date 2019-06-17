<?php
/**
*
* common [English]
*
* @package BBsvg
* @copyright (c) 2017 SiteSplat All rights reserved
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
	'FORUM_ICONS'	                            => 'Iconos del Foro',
	'BBSVG_NOTICE'						        => '<div style="width:80%;margin:20px auto;"><p>Los ajustes para esta extensión están en <strong>%1$s &#187; %2$s &#187; %3$s</strong>.<br />También puede agregar SVG para los rangos de grupo. <strong>ACP &#187; Usuarios y Grupos &#187; Usuarios &#187; Administrar rangos</strong>.</p></div>',
	'SS_HELPER_NOTY'	                        => 'SiteSplat BBcore no existe!<br />Descarguelo de aca <a href="http://sitesplat.com" target="_blank">BBcore</a> y copie la carpeta BBcore adentro de las extensiones SiteSplat.',
    'ACP_BBSVG_FORUMS'	                        => 'Administración del foro. Seleccione el foro y edite para encontrar la configuración de los iconos de Foro personalizados',
	'ACP_BBSVG_FORUMS_EXPLAIN'	                => 'Si necesita eliminar el círculo gris predeterminado en la lista de temas / foros, puede agregar el siguiente código a su custom.css:',
	
	'VIEWFORUM_ICON_FOLDER_UNREAD'			    => 'Icono de Foro no Leído',
	'VIEWFORUM_ICON_FOLDER_UNREAD_EXPLAIN'	    => 'Ubicación, relativa al directorio raíz de phpBB, de un ícono no leído normal del foro de visualización para asociarse a este foro.',
	'VIEWFORUM_ICON_FOLDER_READ'			    => 'Icono de Foro Leído',
	'VIEWFORUM_ICON_FOLDER_READ_EXPLAIN'	    => 'La ubicación, en relación con el directorio raíz de phpBB, de un ícono de lectura normal del foro para asociarse con este foro.',
	'VIEWFORUM_ICON_LOCK'					    => 'Icono de Foro Bloqueado',
	'VIEWFORUM_ICON_LOCK_EXPLAIN'			    => 'Ubicación, relativa al directorio raíz de phpBB, de un ícono del foro de bloqueo para asociarse a este foro.',
	'VIEWFORUM_ICON_LINK'					    => 'Icono de Foro de Enlaces',
	'VIEWFORUM_ICON_LINK_EXPLAIN'			    => 'La ubicación, relativa al directorio raíz de phpBB, de un ícono del foro de enlaces para asociarse a este foro.',

	'VIEWTOPIC_ICON_LOCK'						=> 'Viewtopic lock icon',
	'VIEWTOPIC_ICON_LOCK_EXPLAIN'				=> 'Ubicación, relativa al directorio raíz de phpBB, de un ícono de viewtopic de bloqueo para asociar a este foro.',
	'VIEWTOPIC_ICON_GLOBAL_UNREAD'				=> 'Viewtopic global announcement unread icon',
	'VIEWTOPIC_ICON_GLOBAL_UNREAD_EXPLAIN'		=> 'Ubicación, relativa al directorio raíz de phpBB, de un ícono de viewtopic no leído del anuncio global para asociar a este foro.',
	'VIEWTOPIC_ICON_GLOBAL_READ'				=> 'Viewtopic global announcement read icon',
	'VIEWTOPIC_ICON_GLOBAL_READ_EXPLAIN'		=> 'Ubicación, relativa al directorio raíz de phpBB, de un anuncio global, lea el ícono de viewtopic para asociarse a este foro.',
	'VIEWTOPIC_ICON_ANNOUNCE_UNREAD'			=> 'Viewtopic announcement unread icon',
	'VIEWTOPIC_ICON_ANNOUNCE_UNREAD_EXPLAIN'	=> 'Ubicación, relativa al directorio raíz de phpBB, de un ícono de viewtopic no leído del anuncio para asociar a este foro.',
	'VIEWTOPIC_ICON_ANNOUNCE_READ'				=> 'Viewtopic announcement read icon',
	'VIEWTOPIC_ICON_ANNOUNCE_READ_EXPLAIN'		=> 'Ubicación, relativa al directorio raíz de phpBB, de un anuncio que se lee en el ícono de viewtopic para asociarse a este foro.',
	'VIEWTOPIC_ICON_STICKY_UNREAD'				=> 'Viewtopic sticky unread icon',
	'VIEWTOPIC_ICON_STICKY_UNREAD_EXPLAIN'		=> 'Ubicación, relativa al directorio raíz de phpBB, de un ícono viewtopic no leído pegajoso para asociar a este foro.',
	'VIEWTOPIC_ICON_STICKY_READ'				=> 'Viewtopic sticky read icon',
	'VIEWTOPIC_ICON_STICKY_READ_EXPLAIN'		=> 'Location, relative to the phpBB root directory, of a sticky read viewtopic icon to associate with this forum.',
	'VIEWTOPIC_ICON_POLL_UNREAD'				=> 'Viewtopic poll unread icon',
	'VIEWTOPIC_ICON_POLL_UNREAD_EXPLAIN'		=> 'Location, relative to the phpBB root directory, of a poll unread viewtopic icon to associate with this forum.',
	'VIEWTOPIC_ICON_POLL_READ'					=> 'Viewtopic poll read icon',
	'VIEWTOPIC_ICON_POLL_READ_EXPLAIN'			=> 'Location, relative to the phpBB root directory, of a poll read viewtopic icon to associate with this forum.',
	'VIEWTOPIC_ICON_MOVED_UNREAD'				=> 'Viewtopic moved unread icon',
	'VIEWTOPIC_ICON_MOVED_UNREAD_EXPLAIN'		=> 'Location, relative to the phpBB root directory, of a moved unread viewtopic icon to associate with this forum.',
	'VIEWTOPIC_ICON_MOVED_READ'					=> 'Viewtopic moved read icon',
	'VIEWTOPIC_ICON_MOVED_READ_EXPLAIN'			=> 'Location, relative to the phpBB root directory, of a moved read viewtopic icon to associate with this forum.',
	'VIEWTOPIC_ICON_NORMAL_UNREAD'				=> 'Icono de no leído',
	'VIEWTOPIC_ICON_NORMAL_UNREAD_EXPLAIN'		=> 'Location, relative to the phpBB root directory, of a normal unread viewtopic icon to associate with this forum.',
	'VIEWTOPIC_ICON_NORMAL_READ'				=> 'Icono de leído',
	'VIEWTOPIC_ICON_NORMAL_READ_EXPLAIN'		=> 'La ubicación, relativa al directorio raíz de phpBB, de un ícono de lectura normal para asociar con este foro.',
));
