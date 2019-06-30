<?php
/**
*
* @package BBgdpr
* @copyright (c) 2018 SiteSplat All rights reserved
* @license Proprietary
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
	'UCP_PRIVACY'	=> 'Privacy',

	'UCP_REVIEW'				=> 'Revisar datos personales',
	'UCP_REVIEW_EXPLAIN'		=> 'A continuación encontrará los detalles de sus datos personales que almacenamos en este sitio. No olvide consultar la pestaña del perfil aquí para ver otra información personal.',
	'REG_DATE'					=> 'Fecha y hora de registro',
	'COOKIE_CHANGED_MIND'		=> '¿Has cambiado de idea? <a href="%s">Aceptar cookies</a>.',
	'REG_IP'					=> 'Registro de IP',
	'USER_IPS'					=> 'Dirección IP que has usado',

	'UCP_DOWNLOAD'				=> 'Descargar Datos',
	'UCP_DOWNLOAD_EXPLAIN'		=> 'A continuación, puede descargar todos los datos que este foro almacena sobre usted o sus publicaciones solamente. Se le proporcionará un archivo ZIP que contiene <samp>posts/</samp> con otros subdirectorios estructurados de esta manera: el primer directorio es el ID del foro, dentro hay otros subdirectorios con el nombre del ID del tema en este foro. Dentro de estos directorios se encuentran los archivos HTML nombrados como sello de tiempo de UNIX de tiempo cuando creó la publicación. Si elige descargar todos sus datos, se le proporcionará otro archivo llamado <samp>personal.txt</samp> donde puede encontrar todos los datos personales que esta pizarra almacena sobre usted..',
     
	'UCP_DOWNLOAD_BTN_POSTS'	=> 'Descargar Mensajes',
	'UCP_DOWNLOAD_BTN_DATA'		=> 'Descargar su Información Personal',
	'UCP_USER_NO_POSTS'			=> 'No tienes mensajes para descargar.',
	
	'UCP_DELETE'				=> 'Eliminar Cuenta',
	'CANNOT_DELETE_ACCOUNT'		=> 'No puedes borrar tu cuenta porque eres el fundador de este foro.',
	'DELETE_MY_ACCOUNT_TEXT'	=> 'Puede utilizar este formulario para eliminar su propia cuenta. Una vez completado, todos sus datos personales y privados se eliminarán de este sitio y ya no podrá iniciar sesión.',
	'REALY_DELETE'				=> 'Realmente deseo borrar mi cuenta.',
	'UNDERSTAND_DELETE'			=> 'Entiendo que esta acción no se puede deshacer.',
	'DELETE_MY_POSTS'			=> 'También eliminar mis publicaciones (las publicaciones se convertirán en publicaciones invitadas con un nombre falso al azar si no se seleccionan).',
	'ENTER_PASSWORD'			=> 'Ingrese su contraseña',
	'ENTER_PASSWORD_EXPLAIN'	=> 'Esta es la misma contraseña que está usando actualmente para su cuenta.',
	'ENTER_PASSWORD_HERE'		=> 'escriba su contraseña aquí ...',
	'DELETE_FINAL'				=> 'Confirmación Final',
	'DELETE_FINAL_CONFIRM'		=> '<p>Gracias por ser miembro de este sitio. Lamentamos verte marchar.</p><p>Su solicitud de eliminación de cuenta ha sido validada. Esta es una confirmación final y no se puede deshacer. ¿Estás seguro de que deseas eliminar de forma permanente tu cuenta?</p>',

	'FOUNDER_ERROR'				=> 'Los fundadores no pueden utilizar el proceso de auto eliminación.',
	'REALLY_ERROR'				=> 'Debe confirmar que realmente desea eliminar su cuenta.',
	'UNDERSTAND_ERROR'			=> 'Debe confirmar que entiende que este proceso no se puede deshacer.',
	'PASSWORD_ERROR'			=> 'La contraseña que ingresaste no fue correcta.',
	'GOODBYE_ERROR'				=> 'Tu cuenta ha sido eliminada.',

	'REQUEST_FOR_DELETION_SUBJECT'	=> 'Solicitud de eliminación de cuenta - GDPR',
	'REQUEST_FOR_DELETION_BODY'		=> 'Solicito borrar mi cuenta.',
	'DELETE_REQUEST_REALLY'			=> 'Confirmación Final',
	'DELETE_REQUEST_REALLY_CONFIRM'	=> '<p>Gracias por ser miembro de este sitio. Lamentamos verte marchar.</p><p> Su solicitud de eliminación de cuenta ha sido validada. Esta es una confirmación final. ¿Está seguro de que desea solicitar a los administradores de este foro que eliminen permanentemente su cuenta?</p>',
	'REQUEST_FOR_DELETION_SENT'		=> 'Su solicitud ha sido enviada con éxito a los administradores. Ellos se encargarán de su solicitud tan pronto como sea posible.',
));
