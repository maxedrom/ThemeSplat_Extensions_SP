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
	'ACP_BADGE_MANAGE'					=> 'Gestionar Premios e Insignias',
	'ACP_BADGE_MANAGE_EXPLAIN'			=> 'Usando este formulario puede añadir, editar, ver y borrar configuraciones de Premios e Insignias.',

	'BADGE_DESCRIPTION'					=> 'Usuarios premiados con Insignias adjudicadas por varias tareas',
	'BADGE_DEVELOPERS'					=> 'Desarrolladores',
	'BADGE_TASKS_1'						=> 'Varias normas posibles',
	'BADGE_TASKS_2'						=> 'Normas personalizadas',
	'BADGE_TASKS_3'						=> 'Más Insignias por norma son posibles',
	'BADGE_TASKS_4'						=> 'Sincronizar con cron',
	'BADGE_TASKS_5'						=> 'Ampliable con funciones de la extensión Auto Group y muchas más normas Premium. La comprobación de las normas de suscripción en <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'BADGE_TASKS_6'						=> '¡Mucho más..!',

	'SITESPLAT_COM'		       			=> 'http://sitesplat.com',
	'SITESPLAT_COPY'		    		=> '&#169; SiteSplat',
	'LICENSE_INFO'		        		=> 'Propietario - SiteSplat Todos los derechos reservados',
	'EXTENSION_DEVELOPER'	    		=> 'Desarrollador',
	'ACP_SIDEBAR_NOTICE_CLOSE'			=> 'Cerrar',

	'ACP_BBAWARDS_VERSION'				=> '1.3.8',
	'ACP_BBAWARDS'						=> 'BBAwards',
    'ACP_LOADING'			    		=> 'Espere. Cargando...',

	'ACP_BADGE_ADD'						=> 'Añadir un Premio e Insignia',
	'ACP_BADGE_EDIT'					=> 'Editar un Premio e Insignia',

	'AVATAR_EXPLAIN'					=> 'Premio e Insignia a los usuarios con avatar',
	'BADGES_EXPLAIN'					=> 'Premio e Insignia adicional a los miembros con un mínimo de otras Insignias',
	'BIRTHDAYS_EXPLAIN'					=> 'Premio e Insignia a los miembros con cumpleaños',
	'CUSTOM_EXPLAIN'					=> 'Premio e Insignia a los usuarios que usted quiera',
	'DONATION_EXPLAIN'					=> 'Premio e Insignia para los Donantes',
	'LIKEDD_EXPLAIN'					=> 'Premio e Insignia a los usuarios con Me Gusta/No Me Gusta dados o recibidos',
	'MEMBERSHIP_EXPLAIN'				=> 'Premio e Insignia a los usuarios de este grupo',
	'POSTS_EXPLAIN'						=> 'Premio e Insignia a los que más escriben',
	'PROFILEWALL_EXPLAIN'				=> 'Premio e Insignia por comentarios de perfil',
	'SIGNATURE_EXPLAIN'					=> 'Premio e Insignia a los usuarios con firma',
	'WARNINGS_EXPLAIN'					=> 'Premio e Insignia a los usuarios con advertencias',
	'ZEBRA.FOES_EXPLAIN'				=> 'Premio e Insignia a los usuarios ignorados',
	'ZEBRA.FRIENDS_EXPLAIN'				=> 'Premio e Insignia a los usuarios amigos',

	'ACP_BADGE_AVAILABLE'				=> 'Insignias disponibles',
	'ACP_BADGE_AVAILABLE_EXPLAIN'		=> 'Insignias disponibles en su sistema,<br />cernerse para normas asignadas a la Insignia.',
	'ACP_BADGE_RULE_NAME'				=> 'Norma de Insignia',
	'ACP_BADGE_RULE_NAME_EXPLAIN'		=> 'Nombre de esta norma de Insignia.',
	'ACP_BADGE_RULE_DESCRIPTION'		=> 'Descripción-Norma',
	'ACP_BADGE_RULE_DESCRIPTION_EXPLAIN'	=> 'Descripción para esta norma',
	'ACP_BADGE_IMAGE'					=> 'Imagen de Insignia',
	'ACP_BADGE_IMAGE_EXPLAIN'			=> 'Seleccione una imagen de Insignia para esta norma',
	'ACP_BADGE_CONDITION_NAME'			=> 'Tipo de Premio e Insignia',
	'ACP_BADGE_CONDITION_NAME_EXPLAIN'	=> 'Elija el tipo de condición en la que los usuarios obtendrán esta Insignia.',
	'ACP_BADGE_USERLIST'				=> 'Seleccione usuario(s) para esta Insignia',
	'ACP_BADGE_USERLIST_EXPLAIN'		=> 'Seleccione multiples usuarios pulsando <samp>CTRL</samp> y haciendo clic.',
	'ACP_BADGE_MIN_VALUE'				=> 'Valor Min.',
	'ACP_BADGE_MIN_VALUE_EXPLAIN'		=> 'Los usuarios podrán obtener esta Insignia si superan el valor mínimo.',
	'ACP_BADGE_MAX_VALUE'				=> 'Valor Max.',
	'ACP_BADGE_MAX_VALUE_EXPLAIN'		=> 'Los usuarios perderán esta Insignia si superan el valor máximo. Deje este campo en blanco si no desea esto.',
	'ACP_BADGE_VALUE'					=> 'Valor Min-Max',
	'ACP_BADGE_LIKE_DISLIKE'			=> 'Premio de Me Gusta - No Me Gusta',
	'ACP_BADGE_LIKE_DISLIKE_EXPLAIN'	=> 'Elija si desea contar Me Gusta o No Me Gusta',
	'ACP_BADGE_LIKE'					=> 'Me Gusta',
	'ACP_BADGE_DISLIKE'					=> 'No Me Gusta',
	'ACP_BADGE_GIVEN'					=> 'Adjudicadas',
	'ACP_BADGE_RECIEVED'				=> 'Recibidas',
	'ACP_BADGE_PROFILEWALL'				=> 'Profilewall',
	'ACP_BADGE_PROFILEWALL_EXPLAIN'		=> 'Elija si desea contar de comentarios y respuestas, o Me Gusta en el Muro de Perfil',
	'ACP_BADGE_COMMENTS_REPLIES'		=> 'Comentarios y Respuestas',
	'ACP_BADGE_LIKES'					=> 'Me Gusta en el Muro de Perfil',

	'ACP_BADGE_NOTIFY'					=> 'Notificar al usuario',
	'ACP_BADGE_NOTIFY_EXPLAIN'			=> 'Enviar una notificación a los usuarios después de haber sido Premiado.',
	'ACP_BADGE_NOTICE_CLOSE'			=> 'Cerrar Notificación',

	'ACP_BADGE_UPLOAD'					=> 'Subir Insignia',
	'ACP_BADGE_UPLOAD_EXPLAIN'			=> 'Subir su Insignia, debe ser un archivo de imagen de tipo jpg, jpeg, gif o png',

	'ACP_BADGE_CREATE_RULE'				=> 'Crear un nuevo Premio Insignia',
	'ACP_BADGE_SUBMIT_SUCCESS'			=> 'Premio e Insignia configurado correctamente.',
	'ACP_BADGE_DELETE_CONFIRM'			=> '¿Está seguro de querer borrar esta configuración de Premio e Insignia?',
	'ACP_BADGE_DELETE_SUCCESS'			=> 'Premio e Insignia eliminado correctamente.',
	'ACP_BADGE_EMPTY'					=> 'No hay Premios e Insignia.',
	'ACP_BADGE_NO_IMAGE'				=> 'Insignia no disponible',
	'ACP_BADGE_INVALID_VALUE'			=> '¡El valor máximo esta por debajo del valor mínimo!',
	'ACP_BADGE_NAME_USED'				=> '¡El nombre de la norma ya se utiliza, o está vacía!',
	'NOTICE_LIKEDD'						=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=22"><strong>LikeBB</strong></a> no esta instalada, No se puede utilizar la regla de tipo LikeBB.',
	'NOTICE_DONATIONS'					=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=20"><strong>Forum Donation</strong></a> no esta instalada, No se puede utilizar la regla de tipo Donación.',
	'NOTICE_PROFILEWALL'				=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=13"><strong>Profile Wall</strong></a> no esta instalada, No se puede utilizar la regla de tipo Profile Wall.',
	'NOTICE_PREMIUM'				    => 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=25"><strong>Premium Rules</strong></a> no esta instalada, No se puede utilizar la regla de tipo Extra Premium.',
));
