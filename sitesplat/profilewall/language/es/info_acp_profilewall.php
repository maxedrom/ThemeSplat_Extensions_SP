<?php
/**
*
* Profile Wall
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
	'ACP_PROFILEWALL'			    	=> 'Profile Wall',
	'SS_HELPER_NOTY'	            	=> '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'PROFILEWALL_NOTICE'	        	=> '<div class="phpinfo"><p>Los ajustes para está Extensión están en <strong>%1$s » %2$s » %3$s</strong>.<br/>Por favor, ¡asegúrese de establecer los permisos de grupo para los usuarios registrados, etc. y/o grupos de Moderadores / Administradores!</strong></p></div>',

	'ACL_U_PROFILE_WALL_VIEW'			=> 'Puede ver comentarios de Perfil',
	'ACL_U_PROFILE_WALL_EDIT'			=> 'Puede editar comentarios de Perfil',
	'ACL_U_PROFILE_WALL_POST'			=> 'Puede publicar comentarios de Perfil',
	'ACL_U_PROFILE_WALL_LIKE'			=> 'Puede usar Me Gusta en comentarios de Perfil',

	'ACL_M_PROFILE_WALL_EDIT'			=> 'Puede editar comentarios de Perfil',
    'ACL_M_PROFILE_WALL_SOFT_DEL'		=> 'Puede borrar comentarios de Perfil por Soft',
	'ACL_M_PROFILE_WALL_VIEW_SOFT_DEL'	=> 'Puede ver comentarios de Perfil borrados por Soft',
	
));
