<?php
/**
*
* Minecraft Avatar Extension - minotar.net API
*
* @copyright (c) 2015 SiteSPlat <info@sitesplat.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'ALLOW_SITESPLAT_MINECRAFTAVATARMINOTAR_AVATAR_DRIVER_MINECRAFTMINOTAR'	=> 'Habilitar avatares Minecraft vía Minotar API',
	'AVATAR_MINOTAR_ON_REGISTRATION'										=> 'Habilitar avatares Minecraft vía Minotar API en el registro',

	'SITESPLAT_MINECRAFTAVATARMINOTAR_MINECRAFTMINOTAR_TITLE'	            => 'Minecraft vía Minotar API',
	'SITESPLAT_MINECRAFTAVATARMINOTAR_MINECRAFTMINOTAR_EXPLAIN'	            => 'Seleccione la opciones preferidas a continuación',

	'MINOTAR_AVATAR_NAME'	           => 'Nombre de usuario Minecraft',
	'MINOTAR_OPTIONS'		           => 'Tipo',
	'AVATAR_MINOTAR_NAME_EXPLAIN'	   => 'Introduzca su nombre de usuario de Minecraft',
	'AVATAR_MINOTAR_OPTIONS_EXPLAIN'   => 'Seleccione un tipo de avatar',
	
	'MINOTAR_OPTION_AVATAR'	           => 'Avatar',
	'MINOTAR_OPTION_HELM'	           => 'Avatar con timón',
	'MINOTAR_OPTION_SKIN'	           => 'Piel',

	'MINOTAR_SITESPLAT'	               => 'Extensión Minecraft Minotar por <a href="http://www.sitesplat.com"><strong>SiteSplat.com</strong> <img class="decoded" alt="http://www.sitesplat.com" src="https://minotar.net/avatar/clone1018/24.png"></a>'
));
