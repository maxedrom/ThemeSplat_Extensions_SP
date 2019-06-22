<?php
/**
 *
 * Subject Check. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, SiteSplat
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	// ACP labels
	'ACP_SUBJECT_CHECK_TITLE'		=> 'Subject Check',
	'SUBJECT_CHECK_ENABLE'			=> 'Habilitar comprobacion del tema',
	'SUBJECT_CHECK_ENABLE_EXPLAIN'	=> 'Desactivar esta función la deshabilitará en todos los foros..',
	'SUBJECT_CHECK_BYPASS'			=> 'Permitir el bypass',
	'SUBJECT_CHECK_BYPASS_EXPLAIN'	=> 'El desvío permite que una persona publique su tema incluso después de que se le presente una lista de temas similares.',
	'SUBJECT_CHECK_STRICT'			=> 'Habilitar modo estricto',
	'SUBJECT_CHECK_STRICT_EXPLAIN'	=> 'Solo busca temas que tengan palabras idénticas.',
	'SUBJECT_CHECK_AJAX'			=> 'Habilitar el modo AJAX',
	'SUBJECT_CHECK_AJAX_EXPLAIN'	=> 'Muestra los resultados sin requerir una carga de página separada.',
	'SUBJECT_CHECK_LOCKED'			=> 'Consultar temas bloqueados',
	'SUBJECT_CHECK_LOCKED_EXPLAIN'	=> 'Revisar temas bloqueados al revisar temas.',
	'SUBJECT_CHECK_POP'				=> 'Abrir enlaces de temas en una nueva ventana',
	'SUBJECT_CHECK_POP_EXPLAIN'		=> 'Abre los enlaces de temas enumerados en una nueva ventana del navegador.',
	'SUBJECT_CHECK_ADMIN'			=> 'Anulación del administrador',
	'SUBJECT_CHECK_ADMIN_EXPLAIN'	=> 'Permitir que los administradores publiquen sin verificar temas.',
	'SUBJECT_CHECK_MOD'				=> 'Anulación del moderador',
	'SUBJECT_CHECK_MOD_EXPLAIN'		=> 'Permitir a los moderadores publicar sin revisar los temas.',
	'SUBJECT_CHECK_COMMON'			=> 'Revisar palabras comunes',
	'SUBJECT_CHECK_COMMON_EXPLAIN'	=> 'Las palabras comunes normalmente son ignoradas cuando se comparan temas.',
	'SUBJECT_CHECK_FORUMS'			=> 'Revisa todos los foros',
	'SUBJECT_CHECK_FORUMS_EXPLAIN'	=> 'Comprobar todos los foros en lugar de solo el que se está publicando.',
	'SUBJECT_CHECK_FNAMES'			=> 'Mostrar nombres de foro',
	'SUBJECT_CHECK_FNAMES_EXPLAIN'	=> 'Muestra los nombres de los foros delante de cada tema que se encuentra.',
	'SUBJECT_CHECK_LIMIT'			=> 'Número máximo de temas para mostrar',
	'SUBJECT_CHECK_LIMIT_EXPLAIN'	=> 'Establecer en 0 para temas ilimitados.',
	'SUBJECT_CHECK_ACTIVE'			=> 'Consultar temas activos dentro de estos días.',
	'SUBJECT_CHECK_ACTIVE_EXPLAIN'	=> 'Solo verificar los temas que hayan visto actividad dentro de este número de días. Establecer en 0 para ilimitado.',
	'SUBJECT_CHECK_COUNT'			=> 'Recuento de entradas',
	'SUBJECT_CHECK_COUNT_EXPLAIN'	=> 'Los temas de los usuarios que se encuentran arriba del conteo de publicaciones no se verifican para temas similares. Introduce 0 para deshabilitar.',
	'SUBJECT_CHECK_BYPASS_EXACT'	=> 'Si no existe una coincidencia exacta',

	'ACP_SUBJECT_CHECK_SETTING_SAVED'	=> 'Se ha guardado la configuración de Subject Check.',
	
	'ACP_SUBCHECK_SETTINGS'		    => 'Ajustes',
	'ACP_SUBCHECK'					=> 'Subject Check',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore no existe!<br />Descargar el <a href="http://sitesplat.com" target="_blank">BBcore</a> y copia la carpeta BBcore en la carpeta de la extensión de tu sitesplat.',
	'SUBCHECK_NOTICE'	            => '<div class="phpinfo"><p>Los ajustes para esta extensión están en <strong>%1$s &#187; %2$s &#187; %3$s</strong>. <br />No olvide revisar/configurar el permiso para cada foro si es necesario. <strong>ACP &#187; FOROS &#187; Editar foro &#187; Habilitar subject check</strong></p></div>',

	// ACP labels for individual forums
	'SUBJECT_CHECK_FORUM'			=> 'Habilitar subject check',
	'SUBJECT_CHECK_FORUM_EXPLAIN'	=> 'Revisar contenido de nuevos temas contra temas existentes.',
));
