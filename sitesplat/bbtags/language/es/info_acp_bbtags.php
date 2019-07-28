<?php
/**
*
* BBtags
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
	'ACP_BBTAGS'						=> 'BBTags',
	'ACP_BBTAGS_EXPLAIN'				=> 'Gestione sus etiquetas<br />Borrar o editar etiquetas de temas actuales. Gestione sus pre-etiquetas para el Auto Aconsejar en el tema.',
	'BBTAGS_MIN_LENGTH'					=> 'Min. longitud de etiqueta',
	'BBTAGS_MIN_LENGTH_EXPLAIN'			=> 'Establezca la longitud mínimo de caracteres por etiqueta',
	'BBTAGS_MAX_TAGS'					=> 'Max. cantidad de Tags',
	'BBTAGS_MAX_TAGS_EXPLAIN'			=> 'Establezca la cantidad máxima de etiquetas por tema',
	'BBTAGS_ON_INDEX'					=> 'Nube de BBTags en el índice',
	'BBTAGS_ON_INDEX_EXPLAIN'			=> 'Muestra una nube de etiquetas en la página índice del foro',
	'PRE_BBTAGS'						=> 'Pre BBTags',
	'PRE_BBTAGS_EXPLAIN'				=> 'Muestra el Auto Aconsejar etiqueta cuando el usuario empieza a escribir',
	'SAVE'								=> 'Guardar',
	
	'TAG'								=> 'Etiqueta',
	'QTY'								=> 'Qty',
	'PAGEBACK'							=> 'Página anterior',
	'PAGEFURTHER'						=> 'Página siguiente',
	'BBTAGS_NO_TAGS'					=> 'No se encontraron BBTags',

	'SS_HELPER_NOTY'					=> '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'BBTAGS_NOTICE'						=> '<div class="phpinfo"><p>Los ajustes de la extensión estan en <strong>%1$s » %2$s » %3$s</strong>.<br />No se olvide de revisar/ajustar los <strong>User Permission Roles</strong> debajo de <strong>Permisos &#187; Permisos de Roles &#187; Roles de Usuario (seleccione el Rol y edite) &#187; Varios (pestaña): "Puede gestionar BBTags"</strong>.</p></div>',

    'ACP_BBTAGS_MANAGE'					=> 'Gestionar BBTags',
	'ACP_BBTAGS_MANAGE_EXPLAIN'			=> 'Usando este formulario puede añadir, editar, ver y borrar configuraciones de BBTags.',

	'BBTAGS_DESCRIPTION'				=> 'Siguiente nivel de frescura y un paso más cerca de WordPress con las clásicas Etiquetas',
	'BBTAGS_DEVELOPERS'					=> 'Desarrolladores',
	'BBTAGS_TASKS_1'					=> 'Permisos de grupos',
	'BBTAGS_TASKS_2'					=> 'Ajustes de mínimo y máximo en Etiquetas',
	'BBTAGS_TASKS_3'					=> 'Módulo PCA para gestionar sus etiquetas y ajustes',
	'BBTAGS_TASKS_4'					=> 'Nube de Etiquetas',
	'BBTAGS_TASKS_5'					=> 'Soporte integrado para la extensión BBPreview <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'BBTAGS_TASKS_6'					=> '¡Mucho más..!',
	
	'SITESPLAT_COM'		       		    => 'http://sitesplat.com/',
	'SITESPLAT_COPY'		    		=> '&#169; SiteSplat',
	'LICENSE_INFO'		        		=> 'Propietario - SiteSplat Todos los derechos reservados',
	'EXTENSION_DEVELOPER'	    		=> 'Desarrollador',
	'ACP_BBTAGS_NOTICE_CLOSE'			=> 'Cerrar',
	
	'ACP_BBTAGS_VERSION'				=> '1.1.0',
	'ACP_BBTAGS'						=> 'BBTags',
    'ACP_LOADING'			    		=> 'Espere. Cargando...',
	
));
