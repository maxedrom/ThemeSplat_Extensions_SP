<?php
/**
*
* @package BBdownloads
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
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
	// ACP Module
	'BBDOWNLOADS_EXPLAIN'		=> 'Bienvenido a BBDescargas. Con esta extensión, podrá crear un sistema de descarga totalmente automatizado para su foro. Administre sus descargas, cree categorías, registros de cambios y diferentes versiones.<br /> Viene con muchas características interesantes, como imágenes para las principales categorías, posibilidad de permitir descargas con puntos obtenidos a través de BBPuntos y más ...<br/>  Asegúrese de verificar también los permisos de descarga y BBPuntos. ¡Y a Disfrutar!',
	'ACP_BBDOWNLOADS'			=> 'BBDescargas',
//	'BBDOWNLOADS_CAT_TIP'		=> '<a title="{L_BBDOWNLOADS_CAT_TIP}"><i class="fa fa-question-circle"></i></a> Select the category beside to edit it or refresh the page to enter a new category here',
	'BBDOWNLOADS_SELECT'		=> 'Seleccionar, Creaar, Cambiar',
	'BBDOWNLOADS_SELECT_BOX'	=> 'Seleccionar categoría',
	'BBDOWNLOADS_SELECT_EXPL'	=> 'Seleccione una categoría y luego presione Enviar para guardar cualquier cambio en el “Crear / Editar categoría” de al lado.',
	'BBDOWNLOADS_CAT_ADD_EXPL'  => 'Recuerde <strong>actualizar la página</strong> antes de crear una nueva categoría. Utilice los botones de enviar y eliminar en consecuencia.',
	'BBDOWNLOADS_DOWNLOADS_EXPL'=> 'Seleccione un artículo a continuación o una categoría en “Seleccionar categoría” para introducir un nuevo artículo.',
	'BBDOWNLOADS_VERSIONS_EXPL'	=> 'Seleccione un elemento arriba de las “Descargas” para introducir una nueva versión.',
	
	'BBDOWNLOADS_CAT_ADD'	    => 'Crear / Editar categoría',
	'ID'		            	=> 'ID',
	'BBDOWNLOADS_DESC'			=> 'Descripción',
	'BBDOWNLOADS_CAT'	    	=> 'Categoría',
	'BBDOWNLOADS_ITEM_DESC'	    => 'Descripción del artículo',
	'DOWNLOADS_PER_PAGE'		=> 'Descargas / Página',
	'DISPLAY'					=> 'Categorías Fancy',
	'PICTURESIZE'				=> 'Tamaño de la imagen',
	'PICTUREX'					=> 'Max. anchura en píxeles',
	'PICTUREY'					=> 'Max. altura en píxeles',
	'VERSION_SIZE'				=> 'Tamaño total de descargas',
	'DAY'						=> 'Día: ',
	'WEEK'						=> 'Semana: ',
	'MONTH'						=> 'Mes: ',
	'SAVE'						=> 'Guardar',
	
	'DOWNLOADS'					=> 'Descargas',
	'DOWNLOAD' 					=> 'Descargar',
	'DEMO_URL'					=> 'URL Demo',
	'OWNER'						=> 'Dueño',
	'ACTIVE'					=> 'Activo',
	'AD_ACTIVE'					=> 'Ad',
	'BBDOWNLOADS_SHOW'			=> 'Mostrar descargadores',
	'LIST_DOWNLOAD'				=> 'Una descarga',
	'LIST_DOWNLOADS'			=> '%s descargas',
	'LIST_VERSION'				=> 'Una versión',
	'LIST_VERSIONS'				=> '%s versiones',
	'SELECT_THIS'				=> 'Seleccione solo las versiones de esta descarga',
	'VERSION_ADD'				=> 'Añadir nueva versión',
	'DEL'						=> 'Borrar',
	
	'VERSIONS'					=> 'Versiones',	
	'VERSION'					=> 'Versión',
	'VERSION_PLACEHOLDER'	    => 'Usar versiones semánticas, IE 1.0.1',
	'CHANGELOG'					=> 'Registro de cambios',
	'FILE'						=> 'Archivo',
	'REMOTE_URL'				=> 'URL Remota',
	'SUPPORTFORUM'				=> 'Foro de soporte',
	'HITS'						=> 'Hits',
	'THEME'						=> 'Tema',
	'PACKAGECHANGE'				=> 'Cambiar al paquete',
	'THEMECHANGE'				=> 'Cambiar al tema',
	
	'TITLE_TO_SHORT'			=> '¡Título muy corto! (min. 3 caracteres)',
	'TEXT_TO_SHORT'				=> 'Texto corto',
	'VERSION_TO_SHORT'			=> '¡Versión muy corta! (min. 3 caracteres)',
	'PARENT_ERROR'				=> 'El padre no puede ser un hijo de sí mismo',
	'DOWNLOAD_SAVED'			=> 'Descarga guardada correctamente',
	'BBDOWNLOADS_CLOSE'			=> 'Cerrar',
	'VERSIONCHECK_DISABLE'		=> '¡La revisión de la versión de extensiones o Clasificados todavía está habilitada!',
	'NOTICES_BBPOINTS'			=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=30"><strong>BBpoints</strong></a> NO esta instalada, NO puede usar ajustes de BBPoints.',
	'NOTICES_CLASSIFIEDS'		=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php"><strong>BBClassifieds</strong></a> NO esta instalada, NO puede usar ajustes de Admin Market.',
	'NOTICES_CLASSIFIEDSADDON'	=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php"><strong>BBClassifiedsAddons</strong></a> NO esta instalada, NO puede usar ajustes de User Market.',
	'NOTICES_CLASSIFIEDSADS'	=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php"><strong>BBClassifiedsAds</strong></a> NO esta instalada, NO puede usar ajustes de Advertisement Market.',


	'SS_HELPER_NOTY'	    	=> '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'BBDOWNLOADS_NOTICE'		=> '<div class="phpinfo"><p>Los ajustes de la extensión están en <strong>%1$s » %2$s » %3$s</strong>.</p></div>',
	
	
	'BBDOWNLOADS_ONE'		    => '1',
	'BBDOWNLOADS_TWO'		    => '2',
	'BBDOWNLOADS_THREE'		    => '3',
	'BBDOWNLOADS_ONE_DESC'		=> 'Comencemos aquí. En esta sección es donde agrega las categorías (se ordenarán alfabéticamente de manera automática), agregue fondos, ajuste la configuración y también tenga una descripción general de la descarga con este súper genial gráfico integrado.<br > Puede comenzar editando las categorías y subcategorías de demostración actuales o simplemente crear una nueva. Una vez hecho esto, tendrá que guardarlo presionando el botón “Enviar” a continuación.<br />Por ejemplo, a continuación agregue un nombre de categoría y la descripción, luego presione enviar. Si la opción Categorías Fancy está habilitada, agregue una imagen de fondo y luego presione el botón de enviar para guardar la nueva categoría. Ahora continúe desde el paso número 2.',
	'BBDOWNLOADS_TWO_DESC'		=> 'Ahora que ha agregado su nueva categoría (y/o subcategoría), haga clic en el botón “Añadir nueva descarga” para ingresar la información principal de descarga y luego presione guardar en la página siguiente.<br /> En este momento, después de introducir la información de descarga, como el título, la descripción e incluso una imagen de descarga, puede continuar desde el paso número 3.',
	'BBDOWNLOADS_THREE_DESC'    => 'Después de introducir correctamente la información anterior, ahora es el momento de añadir la versión del archivo y adjuntar el archivo zip (también puede usar una URL remota, como por ejemplo un enlace directo de descarga Github).<br/> Seleccione un archivo de descarga desde arriba (si no ve un archivo determinado, puede que necesite seleccionar de la categoría principal anterior y luego ingrese el archivo) luego haga clic en el botón “Añadir nueva versión” a continuación.<br /> Desde ahí, podrá añadir el número de versión, el archivo, la descripción del registro de cambios, etc. Puede añadir todas las versiones que necesite, y el sistema de control de versiones se encargará de la convención de nomenclatura de archivos y del sistema de almacenamiento.',
	'BBDOWNLOADS_DOWN'          => 'Nombre del archivo',
	'BBDOWNLOADS_DEMO_URL'		=> 'URL demo si esta disponible',
	'BBDOWNLOADS_PICTURE_UP'    => 'Seleccione y suba su imagen/logo aquí. Sólo PNG o JPG',
	'BBCLASSIFIEDS_PICTURE_UP'  => 'Seleccione y suba sus imágenes slider (max. 4) aquí. Sólo PNG o JPG',
	'BBDOWNLOADS_REMOTE_URL'    => 'Introduzca una URL remota, Github, enlace Amazon, etc., .zip ',
	'BBDOWNLOADS_PAGE_EXPLAIN'  => 'El máximo de archivos por página',
	'BBDOWNLOADS_FANCY_EXPLAIN'	=> 'Habilite el modo de Categoría Fancy que permite un diseño de cuadrícula con imágenes de fondo',
	'BBDOWNLOADS_SIZE_EXPLAIN'	=> 'Este es el tamaño de la imagen de fondo. Deje el valor predeterminado si tiene dudas.',
	'BBDOWNLOADS_CHART'	        => 'Resumen de estadísticas',
	'BBDOWNLOADS_CHART_EXPLAIN'	=> 'Una tendencia general rápida y útil de las descargas',
	'SITESPLAT_COM'		        => 'http://sitesplat.com',
	'SITESPLAT_COPY'		    => '&#169; SiteSplat',
	'LICENSE_INFO'		        => 'Proprietario - SiteSplat Todos los derechos reservados',
	'EXTENSION_DEVELOPER'	    => 'Desarrollador',
	'ACP_NOTICE_CLOSE'			=> 'Cerrar',
	'ACP_BBDOWNLOADS_VERSION'   => '1.0.4',
	'ACP_LOADING'		        => 'Cargando... Espere.',
	'FORUM_CONTENT'		        => 'Contenido del foro',
	'EXT_BBD_DESCRIPTION_PAGE'	=> 'Sistema de descarga completo para su foro phpBB',
	'EXT_BBD_TASKS_1'			=> 'Permisos especiales de grupos',
	'EXT_BBD_TASKS_2'			=> 'Categorías habilitadas para imágenes',
	'EXT_BBD_TASKS_3'			=> 'Verifique los otros complementos Premium en <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'EXT_BBD_TASKS_4'			=> 'Control de versión del archivo',
	'EXT_BBD_TASKS_5'			=> 'BBPuntos habilitados. Obtenga BBPuntos aquí: <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'EXT_BBD_TASKS_6'			=> 'Preparado para phpBB 3.2',
	'FILE_BBPOINTS'				=> 'BBPuntos',
	'ADD_DOWNLOAD'				=> 'Añadir nueva descarga',
	'ACP_CATEGORIES'			=> 'Categorías',
	'ACP_BBDOWNLOADS_LOGS'		=> 'Registros de BBDownload',
	
));

// Description of Donations extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Descripción',
	'DESCRIPTION_NOTICE'	=> 'Notas de la extensión',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Gestión de descargas',
			'DESCRIPTION_2'		=> 'Control de versión',
			'DESCRIPTION_3'		=> 'Logos',
			'DESCRIPTION_4'		=> 'Estadísticas de descargas',
		),
		'note' => array(
			'NOTICE_1'			=> 'Preparador para phpBB 3.2',
		)
	)
));
