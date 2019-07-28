<?php
/**
*
* BBadblock extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* @Spanish translation - ThE KuKa - http://www.phpbb-es.com
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
	'ACP_BBADBLOCK'							=> 'BBADBlock',
	'ACP_BBADBLOCK_INDEX_TITLE'				=> 'Ajustes de BBADBlock',
	'ACP_BBADBLOCK_EXPLAIN'					=> 'ADBlocks son molestos, tanto como los anuncios :) para el Administrador del foro y le hará perder ingresos. <br />BBADBlock contrarrestará los usuarios con ADBlock, e interrumpir su experiencia en el foro, para hacer que el usuario ponga en lista blanca a su foro. Opciones inteligentes disponibles, como los mensajes modal, ocultar mensajes, etc.',
	'ACP_BBADBLOCK_ADS_EXPLAIN'				=> '<br />Si ADs no está habilitado, hay que rellenar el nombre de la clase en los que sus anuncios residirán',
	'ACP_BBADBLOCK_BBMEMBERSHIP_EXPLAIN'	=> '<br />Si BBMembership está habilitado, puede utilizar uno de los grupos de usuarios para desactivar el ADBlocker. El grupo de usuarios por defecto debería ser para el miembro a continuación.',
    
	'BBADBLOCK_NOTICE'						=> '<div class="phpinfo"><p>Los ajustes de está extensión están en <strong>%1$s » %2$s » %3$s</strong>.</p></div>',
	'BBADBLOCK_CLASSNAME'					=> 'Nombre de la clase',
	'BBADBLOCK_CLASSNAME_EXPLAIN'			=> 'Nombre de la clase div donde su ADs residirá. <br /> Esto no debería cambiar a menos que sepa lo que está haciendo. <br /> Envuelva sus anuncios dentro de los bloques DIV con la clase introducida aquí. <br />Por defecto el Ads de prueba está en: <br /><strong class="small">- /ext/sitesplat/bbadblock/styles/FLATBOOTS/template/event/overall_footer_content_after.html</strong> <br /><strong class="small">- /ext/sitesplat/bbadblock/styles/FLATBOOTS/template/event/viewtopic_body_postrow_post_after.html</strong>',
	'BBADBLOCK_REDIRECT'					=> 'Página de redirección',
	'BBADBLOCK_REDIRECTE_EXPLAIN'			=> 'URL de redireccionamiento donde el usuario se verá obligado cuando ningún plugin AdBlocker este habilitado. Revise la configuración del servidor sobre sus reglas de reescritura, si algo no está funcionando, o se muestra el error "demasiados cambios de dirección" al usuario. <br />Por ejemplo: <strong>/forum/memberships.php</strong>',
	'BBADBLOCK_MESSAGE'						=> 'Mensaje de Ajax Modal',
	'BBADBLOCK_MESSAGE_EXPLAIN'				=> 'Introduzca el mensaje que desea mostrar a los usuarios que tienen un ADBlocker habilitado',
	'BBADBLOCK_MODAL_ALERT'					=> 'Mostrar Ajax Modal',
	'BBADBLOCK_MODAL_ALERT_EXPLAIN'			=> 'Mostrar el Ajax Modal cuando el usuario está usando un ADBlocker',
	'BBADBLOCK_AUTO_RESET'					=> 'Contador de páginas Autoreset',
	'BBADBLOCK_AUTO_RESET_EXPLAIN'			=> 'Cuando se establece en SI, el plugin cuenta cada visita a una página para cada usuario con ADBlock habilitado y cuando, finalmente el usuario desactiva el ADBlock él/ella tendrá que ver las páginas todas las veces que él/ella ha visualizado anteriormente las páginas con el ADBlock habilitado hasta que la cuenta llegue a cero para ver todos los mensajes. OFF desactiva el contador.<br /> <strong>NOTA</strong>: Esta opción tiene la intención de molestar al usuario y prácticamente le obligó a deshabilitar el ADBlock, o la experiencia foro es extremadamente perturbadora. Úselo bajo su propio riesgo.',
	'BBADBLOCK_EXCLUDE_GROUP'				=> 'Exclusión de grupos BBMembership',
	'BBADBLOCK_EXCLUDE_GROUP_EXPLAIN'		=> 'Grupo de miembros que no se verá afectado por las funciones BBADBlock.',
	'BBADBLOCK_EXCLUDE_HIDE_FORUMS'			=> 'Exclusión de Foro',
	'BBADBLOCK_EXCLUDE_HIDE_FORUMS_EXPLAIN'	=> 'Todos los mensajes excepto el primero no serán mostrados cuando el usuario tenga habilitado un ADBlocker, excepto los foros seleccionados aquí',
	'BBADBLOCK_BLOCKED_SINCE'				=> 'Usando ADBlocker desde',
	'BBADBLOCK_LOG'				            => 'Registro de BBADBlock',
	'BBADBLOCK_LOG_EXPLAIN'				    => 'Este es el registro de todos los usuarios con un Adblocker y el recuento de las páginas visitadas con el Adblock habilitado. Se puede filtrar y eliminar las entradas registradas. <br /><strong>NOTA</strong>: Administradores "Fundadores" Se excluyen de forma predeterminada a cualquier registro, o cualquier opción utilizada anteriormente ;-)',
	'BBADBLOCK_HITS'						=> 'Vistas',
	'BBADBLOCK_NO_USERS'					=> 'No hay usuarios reportados usando un ADBlocker',
	'NOTICE_BBMEMBERSHIP'					=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=31"><strong>BBMembership</strong></a> no está instalada, NO puede usar las opciones de reenvío automático y de grupos de usuarios.',
	'ACP_NOTICE_CLOSE'						=> 'Cerrar',
	
	'NOTICE_BBADBLOCK'						=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=31"><strong>BBMembership</strong></a> no está instalada, NO puede usar las opciones de reenvío automático y de grupos de usuarios.',
	'NOTICE_BBADBLOCK_MINICMS'				=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=18"><strong>Mini CMS</strong></a> no está instalada, NO puede crear posiciones para anuncios dinámicos.',
	'ACP_BBADBLOCK_MANAGE'					=> 'Gestionar BBADBlock',
	'ACP_BBADBLOCK_MANAGE_EXPLAIN'			=> 'Usando este formulario puede añadir, editar, ver y borrar las configuraciones de BBADBlock.',

	'BBADBLOCK_DESCRIPTION'					=> 'Contadores de plugins ADBlock y añade métodos eficaces para combatirlos',
	'BBADBLOCK_DEVELOPERS'					=> 'Desarrolladores',
	'BBADBLOCK_TASKS_1'						=> 'Opciones inteligentes',
	'BBADBLOCK_TASKS_2'						=> 'Opción de foro en lista blanca',
	'BBADBLOCK_TASKS_3'						=> 'Opciones de grupos en lista blanca',
	'BBADBLOCK_TASKS_4'						=> 'Opciones especiales para la extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=31"><strong>BBMembership</strong></a>',
	'BBADBLOCK_TASKS_5'						=> 'Compatible con la extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=18"><strong>Mini CMS</strong></a>, permite establecer 3 anuncios predefinidos.',
	'BBADBLOCK_TASKS_6'						=> '¡Mucho más..!',
	
	'SITESPLAT_COM'		       		    	=> 'http://sitesplat.com',
	'SITESPLAT_COPY'		    			=> '&#169; SiteSplat',
	'LICENSE_INFO'		        			=> 'Propietario - SiteSplat Todos los derechos reservados',
	'EXTENSION_DEVELOPER'	    			=> 'Desarrollador',
	'ACP_BBADBLOCK_NOTICE_CLOSE'		    => 'Cerrar',
	
	'ACP_BBADBLOCK_VERSION'					=> '1.0.5',
	'ACP_BBADBLOCK'							=> 'BBADBlock',
    'ACP_LOADING'			    			=> 'Espere. Cargando... '
));

// Update check stuff
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Descripción',
	'DESCRIPTION_NOTICE'	=> 'Nota de Extensión',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'	=> 'Descripción general de usuarios que utilizan ADBlock',
			'DESCRIPTION_2'	=> 'Alerta de uso de ADBlock',
			'DESCRIPTION_3'	=> 'Ocultar respuestas del tema',
			'DESCRIPTION_4'	=> 'Orden',
		),
		'note' => array(
			'NOTICE_1'		=> 'Se integra con SiteSplat Mini CMS',
			'NOTICE_2'		=> 'Se integra con BBMembership',
			'NOTICE_3'		=> 'Preparado para phpBB 3.2'
		)
	)
));
