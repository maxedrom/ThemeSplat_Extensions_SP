<?php
/**
*
* common [Spanish]
*
* @package language
* @version 1.0.1
* @copyright (c) 2013 SiteSplat, (c) ThemeSplat
* @license htp://www.sitesplat.com/
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
	'TRANSLATION_INFO'				=> 'Traducido por <a href="http://wwww.phpbb-es.com/">phpBB España</a>.',
	
	'ABOUT_US_TITLE'            	=> 'Título de Sobre Nosotros',
	'ABOUT_US'            			=> 'Mensaje de Sobre Nosotros',
	'TEASER_TITLE'            		=> 'Título del Teaser',
	'TEASER_TEXT'            		=> 'Texto del Teaser',
	'GOOGLE_ANALYTICS'         		=> 'Código de Google Analytics',
	'TWITTER_SCREEN_NAME'			=> 'Nombre en pantalla de Twitter',
	'TWITTER_ID'            		=> 'ID de Twitter',
	'ADSENSE_HEADER'            	=> 'Adsense de Encabezado',
	'ADSENSE_FOOTER'            	=> 'Adsense de Píe de página',
	'ADSENSE_TOPIC'            		=> 'Adsense de Tema',
	'LOGO_TEXT'                 	=> 'Texto del logo',
	'HIDE_HEADER'              		=> 'Ocultar Sub-Encabezado',
	'HIDE_FOOTER'              		=> 'Ocultar Píe de página',
	'ENABLE_POPUP_LOGIN'			=> 'Habilitar identificación flotante',
	'AVATAR_EFFECT'					=> 'Efectos de avatar en tema',
	'MINI_PROFILE_POSITION'			=> 'Posición de Mini Perfil de Usuario',

	'CALL_ENABLED'					=> 'Habilitar la barra Call to Action (CtA)',
	'CALL_ONLY_REGISTERED'			=> 'Mostrar la barra CtA sólo a usuarios registrados',
	'CALL_TEXT'						=> 'Texto de CtA',
	'CALL_BUTTON_TEXT'			    => 'Texto del botón de CtA',
	'CALL_LINK'						=> 'URL del botón de CtA',

	// Descriptions for Config page
	'ABOUT_US_TITLE_EXPLAIN'   	  	  	=> 'Introduzca el título para el bloque de Sobre Nosotros.',
	'ABOUT_US_EXPLAIN'          		=> 'Introduzca el texto para el mensaje del bloque de Sobre Nosotros. Acepta etiquetas HTML básicas.',
	'TEASER_TITLE_EXPLAIN'          	=> 'Introduzca el título del texto del Teaser del encabezado del foro. Deje esto en blanco para usar el título del teaser por defecto. Por favor, tenga en cuenta que sólo se permite texto plano.',
	'TEASER_TEXT_EXPLAIN'          		=> 'Introduzca el texto del Teaser del encabezado del foro. Deje esto en blanco para usar el texto del teaser por defecto. Por favor, tenga en cuenta que sólo se permite texto plano.',
	'GOOGLE_ANALYTICS_EXPLAIN'			=> 'Introduzca el código completo de Google Analytics. Incluyendo las etiquetas del script, etc.',
	'TWITTER_SCREEN_NAME_EXPLAIN'		=> 'Introduzca el nombre de pantalla de Twitter.',
	'TWITTER_ID_EXPLAIN'        		=> 'Introduzca su número de ID de su Twitter. Para saber su número siga las instrucciones de la documentación del estilo.',
	'ADSENSE_HEADER_EXPLAIN'    		=> 'Introduzca su código de bloque de Google Adsense o su código de banner HTML. Esto se muestra en la sección de ENCABEZADO del Foro.',
	'ADSENSE_FOOTER_EXPLAIN'    		=> 'Introduzca su código de bloque de Google Adsense o su código de banner HTML. Esto se muestra en la sección de PÍE DE PÁGINA del Foro.',
	'ADSENSE_TOPIC_EXPLAIN'     		=> 'Introduzca su código de bloque de Google Adsense o su código de banner HTML. Esto se muestra después del primer mensaje en la página de VIENDO UN TEMA.',
	'LOGO_TEXT_EXPLAIN'        	 		=> 'Introduzca el texto de su logo.',
	'HIDE_HEADER_EXPLAIN'    			=> 'Ocultar la sección Sub-Encabezado, donde se muestra la barra de búsqueda.',
	'HIDE_FOOTER_EXPLAIN'    			=> 'Ocultar el bloque de PÍE DE PÁGINA y sus elementos.',
	'ENABLE_POPUP_LOGIN_EXPLAIN'		=> 'Esto habilita el Inicio de Sesión Modal (flotante) para el foro.',
	'AVATAR_EFFECT_EXPLAIN'				=> 'Cambiar el estilo del marco del avatar.',
	'MINI_PROFILE_POSITION_EXPLAIN'		=> 'Cambiar la posición del Mini Perfil de Usuario en los temas.',

	'BBOOTS_STYLE_TITLE'				=> 'BBOOTS Mini CMS',
	'BBOOTS_STYLE_CONFIG'				=> 'Configuración General',
	'BBOOTS_STYLE_BUTTONS'				=> 'Ajustes del Menú de Encabezado',
	'BBOOTS_STYLE_UPLOAD'				=> 'Logo y Fondo',
	'BBOOTS_STYLE_LINKS'				=> 'Enlaces Favoritos',
	'BBOOTS_STYLE_SOCIAL'				=> 'Redes Sociales',
	'BBOOTS_STYLE_CSS'					=> 'CSS Personalizado',

	'BBOOTS_STYLE_ADD_BUTTON'			=> 'Añadir un nuevo botón',
    'BBOOTS_STYLE_EDIT_BUTTON'			=> 'Editar botón',
	'MENU_BUTTON_NAME'	       			=> 'Nombre del botón',
	'MENU_BUTTON_NAME_EXPLAIN' 			=> 'Puede usar texto plano, o variables de idioma como {L_PRIVATE_MESSAGES}',
	'MENU_BUTTON_DESC'	      		    => 'Descripción del botón',
	'MENU_BUTTON_DESC_EXPLAIN' 			=> 'Texto debajo del título del botón',
	'MENU_BUTTON_URL'		      	    => 'URL',
	'MENU_BUTTON_ICON_EXPLAIN'		    => 'Sólo se utiliza si el botón/enlace es parte de un botón padre',
	'MENU_BUTTON_URL_EXPLAIN'	 		=> 'Puede usar direcciones URL incluyendo protocolo http:// o variables de plantilla como {U_PRIVATEMSGS}. Puede encontrar las variables de plantilla disponibles en el archivo includes/functions.php alrededor de la línea 4545',
	'MENU_DISPLAY'			      	    => 'Mostrar el botón',
	'MENU_EXTERNAL'			       	    => 'El enlace debe abrirse en una nueva ventana',
	'MENU_ONLY_REGISTERED'    		    => 'Mostrar sólo a Usuarios Registrados',
	'MENU_ONLY_GUEST'          			=> 'Mostrar sólo para Invitados',
	'MENU_BUTTON_PARENT'       			=> 'Botón Padre',
	'MENU_BUTTON_PARENT_EXPLAIN' 		=> 'Seleccione el botón padre si desea tener una sección desplegable',
	'MOVE_BUTTON_WITH_SUBS'    			=> 'Este botón no puede ser un sub-botón porque ya contiene sub-botones.',
	'MENU_NAV'         	       			=> 'Menú',
	'MENU_ICON'          			 	=> 'Icono',
	'DELETE_BUTTON_CONFIRM'    			=> '¿Está seguro de querer borrar este botón?',
	'DELETE_SUBBUTTONS_CONFIRM'			=> '¿Está seguro de querer borrar este botón y todos sus sub-botones?',
	'NO_BUTTONS'               			=> 'No hay botón para gestionar',
	'NO_SUBBUTTONS'            			=> 'No hay sub-botón para gestionar',
	'BUTTON_UPDATED'           			=> 'El botón ha sido actualizado correctamente',
	'BUTTON_ADDED'             			=> 'El nuevo botón ha sido añadido correctamente',

	'ENABLE_CUSTOM_LINKS'				=> 'Habilitar entrada por defecto de la extensión en el menú',
	'ENABLE_CUSTOM_LINKS_EXPLAIN'		=> 'Esta opción activará o desactivará el botón principal de extensión del menú en el que todos los enlaces de extensión por defecto normalmente se añaden al sistema de eventos phpBB.',
	'CONFIGURATION_UPDATED'				=> 'Configuración actualizada correctamente.',

	'IMG_UPLOADED'              		=> 'La imagen ha sido subida correctamente',
	'SELECT_IMAGE'              		=> 'Seleccione una imagen',
	'IMG_UPLOAD_EXPLAIN'				=> 'Las extensiones permitidas son png, jpg, jpeg y gif.',
	'IMG_UPLOAD_ERROR'					=> 'Sólo las extensiones png, jpg, jpeg y gif están permitidas.',

	'IMAGE_LOGO' 						=> 'Logo del Sitio',
	'IMAGE_BG' 							=> 'Imagen del fondo del foro',
	'CHECK_TO_DELETE' 					=> 'Marque aquí para borrar, después haga clic en el botón Borrar',
	'IMAGE_DELETED' 					=> 'La imagen ha sido borrada correctamente',
	'CHECK_TO_UPLOAD_BG'				=> 'Marque aquí, sólo para subir imágenes de fondo del foro, (No necesario para el Logo del Sitio)',

	'BBOOTS_STYLE_ADD_LINK'				=> 'Añadir enlace',
    'BBOOTS_STYLE_EDIT_LINK'			=> 'Editar enlace',
	'MENU_LINK_NAME'	       			=> 'Nombre del enlace',
	'MENU_LINK_NAME_EXPLAIN' 			=> 'Puede usar texto plano, o variables de idioma como {L_PRIVATE_MESSAGES}',
	'MENU_LINK_URL'		       			=> 'URL',
	'MENU_LINK_URL_EXPLAIN'	 			=> 'Puede usar direcciones URL incluyendo protocolo http:// o variables de plantilla como {U_PRIVATEMSGS}. Puede encontrar las variables de plantilla disponibles en el archivo includes/functions.php alrededor de la línea 4545',
	'MENU_LINK_DISPLAY'			        => 'Mostrar el enlace',
	'MENU_LINK_EXTERNAL'			    => 'El enlace debe abrirse en una nueva ventana',
	'MENU_LINK_ONLY_REGISTERED'   		=> 'Mostrar sólo a Usuarios Registrados',
	'MENU_LINK_ONLY_GUEST'        		=> 'Mostrar sólo para Invitados',
	'MENU_LINK_NAV'         	    	=> 'Enlaces',
	'MENU_LINK_ICON'          			=> 'Icono',
	'DELETE_LINK_CONFIRM'    			=> '¿Está seguro de querer borrar este enlace?',
	'NO_LINKS'               			=> 'No hay enlace que gestionar',
	'LINK_UPDATED'           			=> 'El enlace ha sido actualizado correctamente',
	'LINK_ADDED'             			=> 'El nuevo enlace ha sido añadido correctamente',

	'BBOOTS_STYLE_ADD_SOCIAL'			=> 'Añadir Red Social',
    'BBOOTS_STYLE_EDIT_SOCIAL'			=> 'Editar Red Social',
	'MENU_SOCIAL_NAME'	       			=> 'Nombre de la Red Social',
	'MENU_SOCIAL_NAME_EXPLAIN' 			=> 'Puede usar texto plano, o variables de idioma como {L_PRIVATE_MESSAGES}',
	'MENU_SOCIAL_URL'		       		=> 'URL',
	'MENU_SOCIAL_URL_EXPLAIN'	 		=> 'Puede usar direcciones URL incluyendo protocolo http:// o variables de plantilla como {U_PRIVATEMSGS}. Puede encontrar las variables de plantilla disponibles en el archivo includes/functions.php alrededor de la línea 4545',
	'MENU_SOCIAL_DISPLAY'			    => 'Mostrar la Red Social',
	'MENU_SOCIAL_ONLY_REGISTERED'   	=> 'Mostrar sólo a Usuarios Registrados',
	'MENU_SOCIAL_ONLY_GUEST'        	=> 'Mostrar sólo para Invitados',
	'MENU_SOCIAL_NAV'         	    	=> 'Redes Sociales',
	'DELETE_SOCIAL_CONFIRM'    			=> '¿Está seguro de querer borrar esta Red Social?',
	'NO_SOCIALS'               			=> 'No hay redes sociales que gestionar',
	'SOCIAL_UPDATED'           			=> 'La Red Social ha sido actualizada correctamente',
	'SOCIAL_ADDED'             			=> 'La nueva Red Social ha sido añadida correctamente',

	'ENABLE_CUSTOM_CSS'					=> 'Habilitar CSS personalizado (custom.css)',
	'ENABLE_CUSTOM_CSS_EXPLAIN'			=> 'Seleccione, Si para habilitar el uso del archivo custom.css',
	'SELECTED_FILE'						=> 'Seleccionar archivo',
	'SELECTED_FILE_EXPLAIN'				=> 'Por favor, tenga en cuenta que la presentación de este formulario puede alterar su archivo custom.css de manera inesperada. Debido a las limitaciones de procesamiento, todas las barras serán eliminados, y los caracteres especiales de HTML (como &amp; nbsp; y tal) serán reemplazados por su carácter original. Si necesita una edición más avanzada, por favor, utilice el FTP para editar los archivos directamente. Usted puede encontrar el archivo del estilo en /FLATBOOTS/theme/custom.css.',
	'CSS_UPDATED'						=> 'CSS actualizado correctamente.',
));
