<?php
/**
*
* info_acp_bbcore [Spanish]
*
* @package language
* @version $Id$
* @copyright (c) 2014 SiteSplat.com
* @Spanish Translation (c) 2015 ThE KuKa - www.phpbb-es.com
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
    
	'ACP_SITESPLAT_UPDATE_MANAGER'  => 'Gestor de actualizaciones de SiteSplat',
    'VERSION_INSTALLED'  			=> 'Versión instalada',
	'NEW_BOOTS_VERSION'				=> 'Nueva versión %s disponible',
	'VERSIONNUMBERS'				=> 'Versión instalada: %s, descargar la nueva versión desde el servidor: <a style="color:#fff;" href="%s" title="Descargar" target="_blank">%s</a>',
	'SS_RAPID_DISABLE'				=> 'SS Desactivación rápida',
	'SS_RAPID_DISABLE_TLT'		    => 'Deshabilitar (todas) las extensiones de SiteSplat inmediatamente. ¡¡¡Haga una copia de seguridad primero!!!',
	
	'DOWNLOAD_MSG'					=> 'La versión actual <span class="label label-success">%s</span> puede ser descargada desde ThemeForest: <a href="%s" title="Descargar" target="_blank">%s - phpBB3</a>',
	'CHANGE_LOG_MSG'				=> 'El registro de cambios está aquí: <a href="%s" target="_blank">%s (phpBB3.1) Registro de cambios</a>',
	'SUPPORT_FORUM_MSG'				=> 'El foro de soporte se encuentra en la página oficial de la Comunidad: <a href="%s" title="Visitar" target="_blank">http://www.sitesplat.com</a>',
	'COLORIZE_MSG'					=> 'El servicio de coloreado está aquí: <a href="http://www.sitesplat.com/phpBB3/themer.php" target="_blank">Colorear</a> (Asegúrese de que está identificado)',
	'NO_VERSIONINFO'				=> '¡No hay información de versión disponible en este momento, vuelve a intentarlo en unos minutos!',

    'LOG_FILES_CHANGED'				=> '<strong>BBCore ha cambiado los siguientes %s archivos para usted:</strong><br />» %s',
	'LOG_THEME_INSTALLED'			=> '<strong>BBCore instalado correctamente</strong>',
	'LOG_FILES_CHANGED_FAILED'		=> '<strong>BBCore no se ha instalado correctamente</strong><br />» ¡Algunas funciones no funcionarán!',
	'LOG_THEME_UNINSTALLED'			=> '<strong>BBCore desinstalado correctamente</strong>',

    'LOG_FILE_NOT_REPLACED'		    => '<strong>BBCore no puede reemplazar el archivo original por usted:</strong><br />» %s',
    'LOG_FILE_NOT_UPDATED'		    => '<strong>BBCore no puede actualizar los siguientes %s archivos por usted:</strong><br />» %s',

	'LOG_BBCORE_INSTALLED'			=> '<strong>Sitesplat BBCore instalado correctamente</strong>',
	'LOG_BBCORE_UNINSTALLED'		=> '<strong>Sitesplat BBCore desinstalado correctamente</strong>',

	'LOG_BBCORE_NOT_REPLACED'		=> '<strong>Sitesplat BBCore no se instaló correctamente</strong><br />No pudo reemplazar los siguientes archivos<br />» %s',
	'LOG_BBCORE_NOT_UPDATED'		=> '<strong>Sitesplat BBCore no se instaló correctamente</strong><br />No pudo actualizar los siguientes archivos<br />» %s',

	'ACP_BBCORE_MSG_FILES_FAIL'		=> '¡NO todos los archivos fueron editados! Por favor, cambie manualmente los archivos mencionados en el LOG de Administrador en la pestaña MANTENIMIENTO.',
	'ACP_BBCORE_MSG_SETTINGS'		=> 'Ya está, no hay ajustes de configuración para está extensión.<br />Sin embargo, no todas las actualizaciones se implementaron adecuadamente debido a los permisos de archivos del servidor, o archivos que faltan. <br />Vea el LOG de Administrador para más detalles.<br /><br />Por favor, actualice los archivos manualmente para disfrutar de todas las funciones.',
	'BBCORE_ERROR_DISABLE'		    => 'No se puede deshabilitar BBCore de SiteSplat debido a otras extensiones de SiteSplat estan habilitadas.<br />Debe deshabilitar las extensiones de SiteSplat primero. (Puede utilizar la desactivación rápida para desactivar todas las extensiones de SiteSplat de una vez.)<br /><br /><div style="margin: 0px auto; width: 50%%;"><strong>» %s</strong></div>'
));
