<?php
/**
 *
 * @package BBvote
 * @copyright (c) 2019 SiteSplat All rights reserved
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
	'ACP_BBVOTE_TITLE'							=> 'BBvote',
	'ACP_BBVOTE_SETTINGS'						=> 'Ajustes BBvote',
	'ACP_BBVOTE_SETTINGS_EXPLAIN'				=> 'Bienvenido a BBvote! Esta es la página de configuración. Puede ajustar el comportamiento a sus necesidades en cualquier momento. <br /> No te olvides de configurar los <strong>3 permisos principales</strong> para BBvote o las cosas NO funcionarán como se esperaba en su instalación inicial ya que algunos permisos están configurados para ser deshabilitados por defecto.<br /><strong>Permisos de grupo</strong> (quien puede hacer que), <strong>Permiso de grupo de foro</strong> (¿Quién puede usar el sistema BBvote?) y finalmente <strong>Configuraciones generales del foro</strong> habilitar / deshabilitar por foro (habilitar BBvote en el foro X)',
	'SITESPLAT_BBVOTE_DOWNVOTE_MIN_POINTS'		=> 'Puntos mínimos para rebotar',
	'SITESPLAT_BBVOTE_DOWNVOTE_MIN_POINTS_EXPL'	=> 'Seleccione los puntos de reputación mínimos que el usuario ya debería tener para permitir que el usuario rechace una publicación.<br />Esto es útil para filtrar a algunos usuarios que solo podrían rechazar una publicación solo por intenciones maliciosas.',
	
	'SITESPLAT_BBVOTE_UPVOTE_MIN_POINTS'		=> 'Puntos mínimos para ascender',
	'SITESPLAT_BBVOTE_UPVOTE_MIN_POINTS_EXPL'	=> 'Seleccione los puntos de reputación mínimos que el usuario ya debería tener para permitirle a un usuario votar un post.',
	
	'SITESPLAT_BBVOTE_POINTS_AWARDED'			=> 'Número de puntos que se otorgarán por la publicación marcada como la mejor respuesta',
	'SITESPLAT_BBVOTE_POINTS_AWARDED_EXPL'		=> 'Establezca la cantidad de puntos que se otorgarán para las publicaciones marcadas como la mejor respuesta',
	
	'SITESPLAT_BBVOTE_UP_POINTS_AWARDED'		=> 'Número de puntos que se otorgarán por voto positivo',
	'SITESPLAT_BBVOTE_UP_POINTS_AWARDED_EXPL'	=> 'Premios x cantidad de puntos por el voto positivo recibido.',
	
	'SITESPLAT_BBVOTE_DOWN_POINTS_AWARDED'		=> 'Número de puntos que se eliminarán para voto negativo',
	'SITESPLAT_BBVOTE_DOWN_POINTS_AWARDED_EXPL'	=> 'Elimina x cantidad de puntos por el voto negativo recibido',
	
	'SITESPLAT_BBVOTE_REMOVE_VOTE'				=> 'Permitir a los usuarios eliminar el voto ya emitido',
	'SITESPLAT_BBVOTE_POINTS_IN_VIEWTOPIC'		=> 'Mostrar puntos de usuario en mini-perfil de viewtopic',
	'SITESPLAT_BBVOTE_POINTS_IN_MEMBERLIST'		=> 'Mostrar puntos de usuario y gráficos en el perfil de usuario',
	'SITESPLAT_BBVOTE_BOUNTY_ALLOWED'			=> 'Permitir carteles para establecer recompensas para la mejor respuesta',
	'SITESPLAT_BBVOTE_BOUNTY_ALLOWED_EXPL'		=> 'Permita que los carteles establezcan una recompensa temática para mayores posibilidades de obtener la atención de otros usuarios para una mejor respuesta posible.',
	
	'SITESPLAT_BBVOTE_BOUNTY_MIN'				=> 'Puntos mínimos para ser colocado como una recompensa',
	
	'SITESPLAT_BBVOTE_BOUNTY_VIEWFORUM'			=> 'Mostrar etiqueta de recompensa en la lista de temas del foro X',
	'SITESPLAT_BBVOTE_BOUNTY_VIEWFORUM_EXPL'	=> 'Esto habilitará o inhabilitará la etiqueta de recompensa en la lista de temas del foro X',
	
	'SITESPLAT_BBVOTE_CLONE_BEST_ANSWER'		=> 'Muestra la mejor respuesta debajo de la primera publicación.',
	'SITESPLAT_BBVOTE_CLONE_BEST_ANSWER_EXPL'	=> 'Esto muestra la mejor respuesta debajo de la primera publicación, útil para los nuevos lectores que simplemente quieren ver cuál fue la mejor respuesta recomendada de inmediato sin leer todo el hilo.',
	
	'SITESPLAT_BBVOTE_CLONE_VOTE_BUTTONS'		=> 'Mostrar botones de votación en la mejor respuesta clonada',
	'SITESPLAT_BBVOTE_CLONE_VOTE_BUTTONS_EXPL'	=> 'Habilitar o deshabilitar los botones de votación predeterminados en la publicación de mejor respuesta clonada',
	
	'SITESPLAT_BBVOTE_AJAX_INTERVAL'			=> 'Ajax actualiza los votos en segundos',
	'SITESPLAT_BBVOTE_AJAX_INTERVAL_EXPL'		=> 'Esto permite una actualización casi en tiempo real de los votos arriba / abajo, para que el usuario pueda ver las interacciones mientras ocurre',
	
	'SITESPLAT_BBVOTE_NEGATIVE_NOTIFICATION'	=> 'Número de puntos negativos para activar la notificación del moderador',
	'SITESPLAT_BBVOTE_NEGATIVE_NOTIFICATION_EXPL'   => 'Este umbral activará una notificación de moderador que les pedirá que verifiquen la publicación que recibió una cantidad determinada de votos negativos.',
	
	'SITESPLAT_BBVOTE_NEGATIVE_OPACITY_LIMIT'	=> 'Número de puntos negativos para disminuir la opacidad del post.',
	'SITESPLAT_BBVOTE_NEGATIVE_OPACITY_LIMIT_EXPL'	=> 'Esto hará que una publicación de "fantasmas" se vea como recibió demasiados votos en contra y tal vez ni siquiera valga la pena para los usuarios prestar atención a.',
	
	'ACP_BBVOTE_SETTING_SAVED'					=> 'Se ha guardado la configuración de BBvote.',

	'ENABLE_VOTING_SYSTEM'			=> 'Habilitar el sistema de votación de BBvote',
	'ENABLE_VOTING_SYSTEM_EXPLAIN'	=> 'Esto habilitará BBvote en este foro.',
));
