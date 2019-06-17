<?php
/**
*
* BBpoints extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat All rights reserved
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

$lang = array_merge($lang, array(
	'ACP_POINTS'							=> 'BBpoints',
	'ACP_POINTS_INDEX_TITLE'				=> 'Ajustes BBpoints',
	'ACP_POINTS_INDEX_EXPLAIN'				=> 'Asigne un punto por tema, publicación o palabras o asígnelos por foro a través de la Gestión de Foros. También puede excluir foros de BBpoints.<br /> Otorgue puntos a los grupos que elija o incluso a un solo usuario. Sincronice y descanse según su deseo. ¡Diviértete y haz que tu baord sea único e interesante para tus usuarios!<br /><br /><strong>NOTA</strong>: La función Ocultar tema, permite a un usuario establecer una cantidad mínima de puntos para que el tema sea visible para el próximo usuario. Debe establecerse por permiso del grupo de foro. "El usuario puede esconder su propio tema" ',
    'ACP_ENABLE_POINTS'					    => 'Habilitar BBpoints',
	
	'POINTS_NAME'							=> 'Simbolo de puntos (o nombre)',
	'POINTS_NAME_EXPLAIN'					=> 'Elija el símbolo de moneda. Esto se mostrará en diferentes lugares del foro<br /> La posición izquierda y derecha también se puede seleccionar.<br /> Puede usar fácilmente su propio nombre de punto personalizado editando una línea del archivo de idioma ubicado en:<br /> <strong>root/ext/sitesplat/bbpoints/language/bbpoints_common.php</strong>',
	
	'EXT_SYMBOL'							=> 'Símbolo de extensión',
	'EXT_SYMBOL_EXPLAIN'					=> 'Elige el símbolo para esta extensión',
	
	'ACP_POINTS_EXPLAIN'					=> 'Establezca la cantidad de puntos que un usuario recibirá en general. Estos valores se anularán si se ingresa un valor diferente en la gestión del foro. <strong>ACP > FORUMS > Your forum</strong> A continuación, haga clic en editar para los foros existentes o encuentre la configuración de BBpoints para los nuevos foros.',
	'ACP_POINTS_PER_EXPLAIN'				=> 'Establezca la cantidad de puntos que un usuario recibirá por inicio de sesión, registro o en su cumpleaños. Establecer en 0 para apagar.',

	'POINTS_PERLOGIN'						=> 'Puntos por inicio de sesión',
	'POINTS_PERREGISTER'					=> 'Puntos por nuevos registros',
	'POINTS_PERBIRTHDAY'					=> 'Puntos por cumpleaños',
	
	'ENABLE_STATS'							=> 'Habilitar estadisticas',
	'ENABLE_STATS_EXPLAIN'					=> 'Habilitar o deshabilitar estadísticas generales',
	'BAR_STATS'								=> 'Mostrar la barra de progreso en el índice',
	'BAR_STATS_EXPLAIN'						=> 'Muestre una barra de progreso y su objetivo de cantidad de puntos en la página de índice',
	
	'BBPOINT_STATS'							=> 'Mostrar estadísticas de puntos en la página de índice',
	'BBPOINT_STATS_EXPLAIN'					=> 'Mostrar estadísticas de usuario en la página de índice',

	'TRANSFER_NOTIFY'						=> 'Permitir transferencia',
	'TRANSFER_NOTIFY_EXPLAIN'				=> 'Permitir y notificar al usuario cuando alguien le envía puntos',
	'POINTS_GROUP_TRANSFER_NO_AMOUNT'		=> 'Debes establecer la cantidad de puntos a transferir',
	'POINTS_GROUP_TRANSFER_SUCCESS'			=> 'La transferencia se ha procesado con éxito',
	'POINTS_GROUP_TRANSFER_NO_USERS'		=> 'No hay usuarios en este grupo',
	'POINTS_COMMENTS'						=> 'Permitir comentarios',
	'POINTS_COMMENTS_EXPLAIN'				=> 'Permitir que el usuario deje el comentario sobre la transferencia de puntos',

	'ACP_POINTS_VERSION'	                => '1.2.0',
    'ACP_LOADING'			                => 'Espere. Cargando...',
	'ACP_SIDEBAR_NOTICE_CLOSE'			    => 'Cerrar',

	'SITESPLAT_COM'		                    => 'http://sitesplat.com',
	'SITESPLAT_COPY'		                => '&#169; SiteSplat',
	'LICENSE_INFO'		                    => 'Proprietary - SiteSplat All rights reserved',
	'EXTENSION_DEVELOPER'			        => 'Developer',
	
	'BBPOINTS_NOTICE'						=> '<div style="width:80%;margin:20px auto;"><p>The setting for this extension are in <strong>%1$s » %2$s » %3$s</strong>.<br />Don\'t forget to check Forum Group Permissions and also the Forums Management options!</p></div>',
	
	'POINTS_DESCRIPTION'					=> 'BBpoints allows your forum members to have fun and collect points for determined actions...',
	'POINTS_TASKS_1'						=> 'Points per topic, post, words, upon new registrations, birthdays and more!',
	'POINTS_TASKS_2'						=> 'Transfer/donate points to other users',
	'POINTS_TASKS_3'						=> 'Granular points control configurable for each forum',
	'POINTS_TASKS_4'						=> 'Synchronize and reset points',
	'POINTS_TASKS_5'						=> 'UCP Overview of your points with log',
	'POINTS_TASKS_6'						=> 'Synchronization with cron tasks and compatible with <a href="https://www.phpbb.com/customise/db/extension/cronstatus/">Cron Status</a> extension',


	'FORUM_PERPOST'						       => 'Points per post',
	'FORUM_PERPOST_EXPLAIN'			           => 'Set how much points users will receive for creating a new post.',
	'FORUM_PERPOST_FORUM_EXPLAIN'			   => 'Set how much points users will receive for creating a new post in this forum. If you set 0, default option will be used.',
	'FORUM_PERWORD'						       => 'Points per word',
	'FORUM_PERWORD_EXPLAIN'			           => 'Set how much points users will receive for every word in the post.',
	'FORUM_PERWORD_FORUM_EXPLAIN'			   => 'Set how much points users will receive for every word in the post in this forum. If you set 0, default option will be used.',
	'FORUM_PERTOPIC'					       => 'Points per topic',
	'FORUM_PERTOPIC_EXPLAIN'		           => 'Set how much points users will receive for creating a new topic.',
	'FORUM_PERTOPIC_FORUM_EXPLAIN'		       => 'Set how much points users will receive for creating a new topic in this forum. If you set 0, default option will be used.',
	'POINTS_TRANSFER'					       => 'Allow users to transfer points',
	'POINTS_TRANSFER_EXPLAIN'		           => 'Allow users to transfer their points to another user',
	
	'POINTS_CONFIG_SUCCESS'					   => 'BBPoints settings have been updated successfully',
	
	'POINTS_GROUP_TRANSFER'                    => 'Transferir puntos a usuarios grupales o individuales',
	'POINTS_GROUP_TRANSFER_EXPLAIN'            => 'Comience a escribir el nombre de usuario al que desea enviar los puntos o seleccione el grupo',
	'POINTS_GROUP_TRANSFER_PM_ERROR'           => 'Debe ingresar el asunto y el mensaje para enviar el MP al grupo.',
	'POINTS_GROUP_TRANSFER_GROUP'              => 'Grupo',
	'POINTS_GROUP_TRANSFER_AMOUNT'             => 'Cantidad',
	'POINTS_GROUP_TRANSFER_AMOUNT_EXPLAIN'     => 'Ingrese la cantidad que desea transferir al grupo o usuario',
	'POINTS_SMILIES'                           => 'Smilies',
	'POINTS_GROUP_TRANSFER_PM_TITLE'           => 'Asunto del mensaje personal',
	'POINTS_GROUP_TRANSFER_PM_TITLE_EXPLAIN'   => 'Ingrese un Asunto sobre la transferencia (Opcional)',
	'POINTS_GROUP_TRANSFER_PM_COMMENT'         => 'Texto del mensaje personal',
	'POINTS_GROUP_TRANSFER_PM_COMMENT_EXPLAIN' => 'Ingrese un mensaje sobre la transferencia (Opcional)',
	'POINTS_GROUP_TRANSFER_FUNCTION'           => 'Función',
	'POINTS_GROUP_TRANSFER_ADD'                => 'Añadir',
	'POINTS_GROUP_TRANSFER_SET'                => 'Conjunto',
	'POINTS_GROUP_TRANSFER_REMOVE'             => 'Eliminar',
	
	'SYNC_POINTS_CONFIRM'						=> '¿Estás seguro de que quieres sincronizar todos los puntos?<br />Nota: Esto no se puede deshacer!',
	'SYNC_POINTS'								=> 'Sincronizar puntos de usuarios',
	'LOG_RESYNC_SUCCESS'                    	=> 'BBPoints ha sido restablecido con éxito',
	'RESET_POINTS_CONFIRM'						=> '¿Estás seguro de que quieres restablecer todos los puntos?<br />Nota: Esto no se puede deshacer!',
	'RESET_POINTS'								=> 'Restablecer puntos de usuarios',
	
	'RESET_POINTS_EXPLAIN'						=> '¡Esta acción no se puede deshacer! restablecerá los puntos de los usuarios',
	'SYNC_POINTS_EXPLAIN'				        => 'Calcula todos los criterios de puntos establecidos anteriormente para todos los usuarios.<br />Puede demorar varios minutos y depende de la cantidad de usuarios y publicaciones que sus anfitriones baord.<br /> NO interrumpa el proceso una vez iniciado.',
	
));
