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
	'PROFILE_COMMENT'		=> 'Comentario de Perfil',
	'PROFILE_COMMENTS'		=> 'Comentarios de Perfil',
	'XS_COMMENT'			=> 'Comentarios',
	'XS_REPLIES'			=> 'Respuestas',

	'WALL'      			=> 'Muro',

	'MESSAGE_NOT_EXISTS'	=> 'No existe este mensaje.',
	'NO_POST_PERMISSION'	=> 'Parece que no tiene permiso para publicar',
    'INFOMSG'			    => '¡ Aviso !',

	'EDIT_NO_PERMISSION'	=> 'No tiene permiso para editar el comentario.',
	'EDIT_NO_POSTED_DATA'	=> 'No hay datos para editar.',
	'SUCCESSFUL_EDIT'		=> 'El mensaje ha sido editado correctamente.',
	'SUCCESSFUL_ADDED'		=> 'El mensaje ha sido añadido correctamente.',
	'EDIT_GET_MUST_AJAX'	=> 'Recuperando mensaje para la edición, se debe hacer a través de AJAX.',
	'MESSAGE_NOT_EXISTS'	=> 'No existe este mensaje.',
	'MESSAGE_TO_SHORT'		=> 'Este mensaje es corto.',

	'POST_COMMENT'			=> 'Enviar Comentario',
	'RESTORE'				=> 'Restaurar',
	'SOFT_DELETED'			=> 'Borrado Soft',

	'AJAX_ISSUE'			=> 'Había un problema AJAX.',

	'IS_SOFT_DELETED'		=> 'Este comentario ha sido borrado por Soft.',
	'IS_EDITED'				=> 'Este mensaje ha sido editado.',
	'S_DEL'					=> 'Borrado Soft',
	'S_RESTORE'				=> 'Restaurar comentario borrado por Soft',
	'S_DEL_CONFIRM'			=> '¿Está seguro de querer borrar este comentario por Soft? Tenga en cuenta que el comentario aún será visible para los Moderadores del Foro.',
	'S_RESTORE_CONFIRM'		=> '¿Está seguro de querer restaurar este comentario?',
	'DELETE_NO_PERMISSION'	=> 'No tiene permiso para borrar comentarios.',

	'LIKE'						=> 'Me Gusta este comentario o respuesta',
	'LIKE_OWN_POST_ERROR'		=> 'No puede usar Me Gusta/No Me Gusta en su propio mensaje.',
	'LIKE_LIKE_TIME_ERROR'		=> '¡No puede usar Me Gusta - No Me Gusta un mensaje tan rápido!',
	'LIKE_DISLIKE_REMOVE_INFO'	=> 'Para eliminar su No Me Gusta, haga clic en el botón de No Me Gusta.',
	'LIKE_LIKE_REMOVE_INFO'		=> 'Para eliminar su Me Gusta, haga clic en el botón de Me Gusta.',
	'LIKE_POST_NO_AUTH'			=> 'No está autorizado para dar Me Gusta/No Me Gusta en este mensaje.',
	'LIKE_MODE_ERROR'			=> 'El modo no existe',
	'LIKE_POST_ERROR'			=> 'El mensaje no existe',
	'LIKES_REMOVED'				=> 'Me Gusta eliminado',
	'LIKES_GIVEN'				=> 'Me Gusta otorgado',	

	'PROFILE_RETURN'		=> 'Volver al Perfil del usuario',
));
