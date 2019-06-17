<?php
/**
* @maxedrom [Español]
* BBopengraph
*
* @copyright (c) 2015 SiteSplat All rights reserved
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
	'BBOPENGRAPH_TITLE'				=> 'Configuración de BBopengraph',
	'BBOPENGRAPH_FB_ID'				=> 'ID de Facebook ',
	'BBOPENGRAPH_FB_ID_EXPLAIN'		=> 'Puede recuperar esta información mirando la URL de su foto de perfil en Facebook.',
	'BBOPENGRAPH_FB_APPID'			=> 'ID de la Aplicación de Facebook',
	'BBOPENGRAPH_FB_APPID_EXPLAIN'	=> 'Ingrese su ID de aplicación de SDK de Facebook. Puedes crear una nueva aplicación a través de este enlace: <a href="https://developers.facebook.com/docs/opengraph/getting-started" target="blank">https://developers.facebook.com/docs/opengraph/</a> <br />Si se ingresa la ID de la aplicación, el script se inyectará después de la etiqueta del cuerpo del foro.<br />La configuración del SDK se puede utilizar para realizar tareas comunes, como el botón Me gusta, los comentarios del muro, etc..<br /> Configure y agregue complementos externos de Facebook aquí:<a href="https://developers.facebook.com/docs/plugins/" target="blank">https://developers.facebook.com/docs/plugins/</a>',
	'BBOPENGRAPH_TW_ID'				=> 'ID de Twitter ',
	'BBOPENGRAPH_TW_ID_EXPLAIN'		=> 'Esta es tu cuenta de twitter. No es necesario añadir el signo @. Si las tarjetas de twitter ingresadas se crearán cuando el contenido sea compartido.',
	'BBOPENGRAPH_IMAGE'				=> 'Ruta de la Imagen',
	'BBOPENGRAPH_IMAGE_EXPLAIN'		=> 'Ruta relativa (de phpbbroot, ej. Imagenes / spacer.gif) a su imagen, si no se encuentran adjuntos de temas, el marcador de posición provisto se usará en el tema. Esto también es necesario para el indice de su página. <br /> Requerimentos de la Imagen: <a href="https://developers.facebook.com/docs/sharing/best-practices#images" target="blank">https://developers.facebook.com/docs/sharing/best-practices#images</a>',
	
    'BBOPENGRAPH_NOTICE'			=> '<div class="phpinfo"><p>La configuración de esta extension esta en %1$s » %2$s » %3$s.</p></div>',
));

// Description of Upload extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		   		=> 'Descripción',
	'DESCRIPTION_NOTICE'	   		=> 'Nota de la Extensión',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'			=> 'Opción',
			'DESCRIPTION_2'			=> 'Opciones generales',
			'DESCRIPTION_3'			=> 'Posteo & Configuración de Mensajes',
			'DESCRIPTION_4'			=> 'Configuracion Default para todos los usuarios',
		),
		'note' => array(
			'NOTICE_1'				=> '3.2 preparado.',
		)
	)
));
