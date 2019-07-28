<?php
/**
*
* Steam
*
* @copyright (c) 2016 SiteSplat All rights reserved
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
	'AUTH_PROVIDER_OAUTH_SERVICE_STEAM'	=> 'Steam',
    
	'STEAM_OPTIONS'		        => 'Opciones de Steam',
	'STEAM_OPTIONS_CHECKBOXES'  => 'Elija qué opciones mostrar en el banner de la firma que se muestra en los temas',
	'STEAM_OPTIONS_TEXT_BIO'	=> '¿Describa brevemente su perfil de Steam o tal vez algo pegadizo sobre reclutar jugadores? ;)',
	'STEAM_OPTIONS_TEXT_BIO_HOL'=> 'Biografía del jugador o lema...',
	// UCP preference
	'STEAM_IN_TOPIC_PROFILE'	=> 'Mostrar datos de Steam en su perfil viendo un tema',
	// signature
	
	'STEAM_SIG_ENABLE'		    => 'Habilitar banner de Steam',
	'STEAM_SIG_USERNAME'	    => 'Habilitar nombre en el banner',
	'STEAM_SIG_AVATAR'		    => 'Habilitar avatar en el banner',
	'STEAM_SIG_LVL'			    => 'Habilitar nivel en el banner',
 	'STEAM_SIG_RPG'			    => 'Habilitar juegos recientemente jugados en el banner',
    'STEAM_SIG_DESC'		    => 'Habilitar resumen del jugador en banner',
	'STEAM_SIG_LIGHT'		    => 'Usar banner de esquema de colores claros',
	
	// viewtopic
	'STEAM_STATUS'				=> 'Estado en Steam',
	'STEAM_USERNAME'			=> 'Nombre en Steam',
	'STEAM_AVATAR'				=> 'Avatar en Steam',
	'ON_STEAM'				    => 'En Steam',

	// memberlist
	'STEAM_BADGES'		    	=> 'Insignias en Steam',
	'STEAM_PLAYER_LEVEL'		=> 'Nivel en Steam',
	'STEAM_PLAYER_NAME'		    => 'Nombre en Steam',
	
	'STEAM_PLAYER_GAMES'        => 'Juegos en Steam',
	'STEAM_PLAYER_RECENT_GAMES'	=> 'Recientemente jugó en Steam',
	'STEAM_PLAYER_STATUS'		=> 'Estado en Steam',
	
	'STEAM_PLAYER_AVATAR'		=> 'Avatar en Steam',
	
	'STEAM_MINUTES'		        => 'minutos',
	'STEAM_GAMES_OWNED'		    => 'Mostrar todos los juegos de propiedad',
	
	// player state
	'STEAM_OFFLINE'	        	=> 'Desconectado',
	'STEAM_ONLINE'				=> 'Conectado',
	'STEAM_BUSY'				=> 'Ocupado',
	'STEAM_AWAY'				=> 'Fuera',
	'STEAM_SNOOZE'				=> 'Durmiendo',
	'STEAM_LFT'					=> 'Buscando comerciar',
	'STEAM_LTP'					=> 'Buscando jugar',
));
