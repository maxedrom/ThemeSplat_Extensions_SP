<?php
/**
 *
* @package BBprefix
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
 *
 */

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_BBPREFIX_MANAGEMENT'		=> 'Administración de BBPrefix',
	'ACP_BBPREFIX_MANAGE'			=> 'Gestionar BBPrefix',
	
	'ACP_BBPREFIX_MANAGE_EXPLAIN'	=> 'En esta página, puede gestionar los prefijos de tema se su foro. El uso de variables en su prefijo es posible. Los BBCodes personalizados también son soportados, para que pueda crear prefijos divertidos y flexibles. <br />También se pueden excluir los foros y grupos del uso de prefijos. ¡¡¡Que te diviertas!!!',
    'BBPREFIX_MANAGE_EXONE'	        => '<h3>Icono Font Awesome podría ser:</h3> <br /><br /><strong>Uso de BBCode:</strong> <code>[fa-bug][/fa-bug]</code> <br /><strong>Reemplazo HTML</strong> <code>&lt;i class=&quot;fa fa-bug&quot;&gt;&lt;/i&gt;</code> <br /><strong>Uso del prefijo:</strong> <code>[fa-bug][/fa-bug]</code>',
	'BBPREFIX_MANAGE_EXTWO'	        => '<h3>Etiquetas Bootstrap podría ser:</h3> <br /><br /><strong>Uso de BBCode:</strong> <code>[label-warning][/label-warning]</code> <br /><strong>Reemplazo HTML</strong> <code>&lt;span class=&quot;label label-warning&quot;&gt;MyTextHere&lt;/span&gt;</code> <br /><strong>Uso del prefijo:</strong> <code>[label-warning][/label-warning]</code> ',
	'BBPREFIX_MANAGE_EXTHREE'	    => '<h3>Imagen BBCode podría ser:</h3> <br /><br /><strong>Uso de BBCode:</strong> <code>[img-owl][/img-owl]</code> <br /><strong>Reemplazo HTML</strong> <code>&lt;img src=&quot;https://cdn2.iconfinder.com/data/icons/thesquid-ink-40-free-flat-icon-pack/64/owl-20.png&quot;&gt;</code> <br /><strong>Uso del prefijo:</strong> <code>[img-owl][/img-owl]</code>',
	
	
	'TITLE_EXPLAIN_TIPS'			=> 'Trucos y uso:',
	'TITLE_EXPLAIN_TIPS_EXPLAIN'	=> 'Las variables permitidas actualmente son: (<strong>{DATE}</strong>, <strong>{POSTER}</strong> y <strong>{USERNAME}</strong>)<br /> Los BBCodes personalizados tendrían que ser creados primero, y luego el BBCode puede ser utilizado, por ejemplo, de la siguiente manera:',
	'TITLE_EXPLAIN_TIPS_STAR'	    => '<small>**Cree su BBCode personalizado en PCA > MENSAJES > BBCodes. </small>',
	
	'BBPREFIX_NOTICE'				=> '<div class="phpinfo"><p>Los ajustes de está extensión estan en <strong>%1$s » %2$s » %3$s</strong>.</p></div>',

	'ACP_BBPREFIX'					=> 'Prefijos de Tema',
	'PREFIX_NAME'					=> 'Nombre de prefijo',
	'PREFIX_PARSED'					=> 'Prefijo',
	'EX_FORUMS'						=> 'Foros excluidos',
	'USED'							=> 'Usado',
	'ADD_PREFIX'					=> 'Nuevo prefijo',

	'BBPREFIX_TITLE'				=> 'Prefijo',
	'BBPREFIX_TITLE_EXPLAIN'		=> 'Esto es lo que realmente se visualiza delante del título del tema. BBCode es soportado. <br />Se pueden usar ciertas variables, que serán sustituidas con los datos reales cuando se aplique el prefijo. <br />Vea <strong>Uso de prefijo</strong> debajo de <strong>Trucos y Uso</strong> sobre cómo utilizar el prefijo creado a partir del BBCode',
	'BBPREFIX_NAME'					=> 'Nombre de prefijo',
	'BBPREFIX_NAME_EXPLAIN'			=> 'Este es un identificador único para ayudar a diferenciar los prefijos.',
	'BBPREFIX_ON_INDEX'				=> 'Prefijo en la lista del tema',
	'BBPREFIX_ON_INDEX_EXPLAIN'		=> 'Muestra los prefijos en el índice y viendo un foro. Si un prefijo no está permitido, no será mostrado en estas páginas donde se muestran los títulos de los temas.<br />Esto es particularmente útil cuando hay muchos prefijos en uso y, por tanto, podrían estorbar en la lista de temas.<br /><br />',
	'BBPREFIX_FORUMS'				=> 'Foros excluidos',
	'BBPREFIX_FORUMS_EXPLAIN'		=> 'Especifique que foros están excluidos del uso de este prefijo.',
	'BBPREFIX_GROUPS'				=> 'Grupos',
	'BBPREFIX_GROUPS_EXPLAIN'		=> 'Especifique que grupos pueden aplicar este prefijo.',

	'DELETE_PREFIX'					=> '¿Está seguro de querer borrar el prefijo especificado?',
	'DELETE_PREFIX_CONFIRM'			=> 'Se borrarán el prefijo y todas sus instancias. Esto no se puede deshacer.',
	
	'BBPREFIX_EMPTY_ERROR'			=> 'Nombre y/o prefijo vacío',
	'BBPREFIX_NAME_ERROR'			=> 'Este prefijo ya está en uso',
	'BBPREFIX_TITLE_ERROR'			=> 'Este prefijo ya existe',
	
	'PREFIX_ADDED_SUCCESS'			=> 'El prefijo ha sido añadido correctamente.',
	'PREFIX_EDITED_SUCCESS'			=> 'El prefijo ha sido actualizado correctamente.',
	'PREFIX_DELETED_SUCCESS'		=> 'El prefijo ha sido borrado correctamente.',
	'NO_PREFIX_ID_SPECIFIED'		=> 'Debe especificar un ID de prefijo válido.',
	
	'BBPREFIX_DESCRIPTION'			=> 'Añade algunos prefijos potentes y elegantes a los temas de los foros',
	'BBPREFIX_DEVELOPERS'			=> 'Desarrolladores',
	'BBPREFIX_TASKS_1'				=> 'Opciones inteligentes',
	'BBPREFIX_TASKS_2'				=> 'BBCode habilitado',
	'BBPREFIX_TASKS_3'				=> 'Soporta imágenes, texto, etiquetas de cualquier cosa que pueda colocar en un BBCode',
	'BBPREFIX_TASKS_4'				=> 'Exclusiones de foros',
	'BBPREFIX_TASKS_5'				=> 'Exclusiones de grupos',
	'BBPREFIX_TASKS_6'				=> '¡Mucho más..!',
	
	'SITESPLAT_COM'		       		=> 'http://sitesplat.com',
	'SITESPLAT_COPY'		    	=> '&#169; SiteSplat',
	'LICENSE_INFO'		        	=> 'Propietario - SiteSplat Todos los derechos reservados',
	'EXTENSION_DEVELOPER'	    	=> 'Desarrollador',
	'ACP_BBPREFIX_NOTICE_CLOSE'		=> 'Cerrar',
	
	'ACP_BBPREFIX_VERSION'			=> '1.0.5',
	'ACP_BBPREFIX'					=> 'BBPrefix',
    'ACP_LOADING'			    	=> 'Espere. Cargando...'
]);

// Description misc
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'				=> 'Descripción',
	'DESCRIPTION_NOTICE'			=> 'Nota de extensión',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'			=> 'Prefijos múltiples',
			'DESCRIPTION_2'			=> 'Limitado por grupos y/o foros',
			'DESCRIPTION_3'			=> 'Uso de variables',
			'DESCRIPTION_4'			=> 'Estadísticas',
		),
		'note' => array(
			'NOTICE_1'				=> 'Versión PHP > 5.4',
			'NOTICE_2'				=> 'Preparado para phpBB 3.2'
		)
	)
));
