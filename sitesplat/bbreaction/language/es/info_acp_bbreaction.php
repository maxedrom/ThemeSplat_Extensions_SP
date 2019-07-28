<?php
/**
*
* BBreaction.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
* Spanish Translation by ThE KuKa (Raúl Arroyo) - http://www.phpbb-es.com
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
	'ACP_BBREACTION'			            => 'BBReaction',
	'ACP_BBREACTION_EXPLAIN'	            => 'Gestionar sus tipos de reacciones. Elija para voto múltiple y/o tipo de porcentaje. Mover hacia arriba o hacia abajo para ordenar sus tipos de reacción. Una vez que un tipo ha sido votado, no puede eliminarlo hasta que desactive ese tipo de reacción. <br />Eliminando un tipo de reacción también eliminará todos los votos. Si desea conservar los votos, simplemente desactive el tipo de reacción. Los tipos de reacción desactivados no se calcularán en el resultado de las estadísticas.',
    'ACP_BBREACTION_MANAGE'		            => 'Gestionar BBReaction',
	
	'BBREACTION_META_DESCRIPTION'			=> 'Premie a los usuarios con insignias basadas en reglas personalizadas y predeterminadas',
	'BBREACTION_META_DEVELOPERS'			=> 'Desarrolladores',
	'BBREACTION_META_TASKS_1'				=> 'Hace que los mirones sean útiles para algo, y les da un medio de interacción',
	'BBREACTION_META_TASKS_2'				=> 'Mejora la calidad de los mensajes (los autores quieren evitar calificaciones negativas)',
	'BBREACTION_META_TASKS_3'				=> 'Hace que sea fácil obtener reacciones sobre el mensaje, pero sin la molestia de escribir un comentario completo',
	'BBREACTION_META_TASKS_4'				=> 'Compatible con la extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php">BBAwards</a> que permite premios personalizados de insignias.',
	'BBREACTION_META_TASKS_5'				=> 'Botones configurables (cuantos, que texto, iconos, negativo o positivo, animación, etc.)',
	'BBREACTION_META_TASKS_6'				=> '¡Mucho más..!',
	
	'ACP_BBREACTION_VERSION'	            => '1.2.0',
	'ACP_BBREACTION'			            => 'BBReaction',
    'ACP_LOADING'			                => 'Espere. Cargando...',
	'ACP_SIDEBAR_NOTICE_CLOSE'			    => 'Cerrar',

	'SITESPLAT_COM'		                    => 'http://sitesplat.com',
	'SITESPLAT_COPY'		                => '&#169; SiteSplat',
	'LICENSE_INFO'		                    => 'Proprietario - SiteSplat Todos los derechos reservados',
	'EXTENSION_DEVELOPER'			        => 'Desarrollador',
	
	'NOTICE_BBEMOJI'						=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=29"><strong>BBEomji</strong></a> no está instalada, NO puede usar los Emojis como reacciones.',
	'ACP_BBREACTION_DELETE_LOG'				=> 'Tipo de reacción eliminada',
	'ACP_BBREACTION_ACTIVE_LOG'				=> 'Reaction %s is %s',
	'ACP_ACTIVE'							=> 'activada',
	'ACP_DO_ACTIVATE'						=> 'Activar',
	'ACP_DEACTIVE'							=> 'desactivada',
	'ACP_DO_DEACTIVATE'						=> 'Deactivar',
	'ACP_MULTIVOTE'							=> 'Voto múltiple',
	'ACP_PERCENT'							=> 'Porcentaje / #',
	'ACP_PROGRESSBAR'						=> 'Barra de progreso',
	'ACP_MEMBERLIST_STAT'					=> 'Estadística',
	'ACP_DISPLAY_TOP'						=> 'Posición de las estadísticas del tema',
	'ACP_BBREACTION_SAVE_GENERAL'			=> 'Guardar opciones',
	'ACP_BBREACTION_CREATE_TYPE'			=> 'Crear tipo de reacción',
	'ACP_BBREACTION_STATISTICS'				=> 'Estadística de BBReaction',

	'ACP_BBREACTION_ADD'					=> 'Añadir tipo de reacción',
	'ACP_BBREACTION_EDIT'					=> 'Editar tipo de reacción',
	'ACP_BBREACTION_DELETE_CONFIRM'			=> '¿Borrar tipò de reacción y todos los votos?',
	'ACP_BBREACTION_NAME'					=> 'Nombre de reacción',
	'ACP_BBREACTION_NAME_EXPLAIN'			=> 'Ponga un nombre corto para explicar el tipo de esta reacción',
	'ACP_BBREACTION_DESCRIPTION'			=> 'Descripción',
	'ACP_BBREACTION_DESCRIPTION_EXPLAIN'	=> 'Descripción del tipo, sólo para uso interno',
	'ACP_BBREACTION_SYMBOL'					=> 'Icono Glyph',
	'ACP_BBREACTION_SYMBOL_EXPLAIN'			=> 'Icono Font Awesome Glyph en el botón de reacción. Agregue un segundo parámetro para la animación spinner. <br />Por ejemplo; <strong>fa-spin</strong>. Más información <a href="https://fortawesome.github.io/Font-Awesome/examples/#animated">Animated Icons</a>',
	'ACP_BBREACTION_NEGATIVE'				=> 'Reacción positiva',
	'ACP_BBREACTION_NEGATIVE_EXPLAIN'		=> 'Marque este tipo de reacción como Positiva o Negativa. Positivo tendrá color verde y Negativo tendrá color rojo.',

	'ACP_BBREACTION_SEPERATOR'				=> 'Seperador',
	'ACP_BBREACTION_SEPERATOR_EXPLAIN'		=> 'Dibuja una regla de separación a la izquierda de este botón',
	'ACP_BBREACTION_NOTIFY'					=> 'Notificar',
	'ACP_BBREACTION_NOTIFY_EXPLAIN'			=> 'Envía una notificación al autor cuando hay una nueva reacción',
	
	'ACP_BBREACTION_NAME_USED'				=> 'Nombre ya en uso',
	'ACP_BBREACTION_SAVED_LOG'				=> 'Tipo de reacción guardado',
	'ACP_BBREACTION_SAVED_LOG'				=> 'Tipo de reacción añadido',
	'ACP_BBREACTION_SUBMIT_SUCCESS'			=> 'Tipo de reacción guardado',
	'ACP_BBREACTION_DELETE_SUCCESS'			=> 'Tipo de reacción y votos borrados correctamente',
	'ACP_BBREACTION_DELETE_LOG'				=> 'Tipo de reacción %s y votos borrados correctamente',
	
	'ACP_BBREACTION_USED'					=> 'Votado',
	'ACP_REACTIONS'							=> 'BBReaction',
	'ACP_BBREACTION_EMPTY'					=> 'No hay registros de BBreaction',

	'SS_HELPER_NOTY'	                    => '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'BBREACTION_NOTICE'	                    => '<div style="width:80%;margin:20px auto;"><p>Los ajustes de esta extensión están en <strong>%1$s &#187; %2$s &#187; %3$s.</strong><br />Asegúrese de verificar los Permisos de Grupo y de ajustarlo según sea necesario. Las reacciones predeterminadas tienen la notificación del usuario ya habilitada.</p></div>',

	// BBemoji
	'ACP_BBREACTION_EMOJI'			=> 'BBEmoji',
	'ACP_BBREACTION_EMOJI_EXPLAIN'	=> 'Elija un BBEmoji como ícono. Comience escribiendo :.',
));
