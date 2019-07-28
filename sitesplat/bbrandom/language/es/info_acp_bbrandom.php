<?php
/**
*
* @package BBrandom
* @copyright (c) 2016 SiteSplat All rights reserved
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
	'ALLOW_RGRAVATAR'	        => 'Permitir Gravatars aleatorios',
	'DEFAULT_RGRAVATAR'	        => 'Establecer Gravatar aleatorio por defecto para nuevos usuarios',
	'DEFAULT_RGRAVATAR_EXPLAIN'	=> 'Esto asignará un gravatar aleatorio para nuevos usuarios registrados<br />Esta opción también estará disponible en PCU &#62; Perfil &#62; Editar avatar',
	'DEFAULT_CUAVATAR'	        => 'Establecer Avatar por defecto para nuevos usuarios',
	'DEFAULT_CUAVATAR_EXPLAIN'	=> '¡Debe subir las imágenes que desea utilizar como avatares aleatorios en <strong>root/images/avatars/random/</strong> antes de usuar esta función!<br /> Esto es sólo para los nuevos usuarios registrados, y no estará disponible en PCU &#62; Perfil &#62; Editar avatar',

	'SS_HELPER_NOTY'	        => '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'BBRANDOM_NOTICE'	        => '<div class="phpinfo"><p>El ajuste de está extensión esta en <strong> PCA &#62; Configuración del foro &#62; Ajustes de avatar</strong>, y en <strong>PCA &#62; Usuarios y Grupos &#62; Administrar Usuarios &#62; Usuario &#62; Avatar</strong>.<br />Cada usuario también es capaz de elegir si él o ella quiere utilizar un avatar aleatorio desde PCU &#62; Perfil &#62; Editar avatar. Los avatares personalizados deben ser subidos en <strong>root/images/avatars/random/</strong></p></div>',
	'BBRANDOM_SITESPLAT'	    => '<i class="icon fa fa-info-circle"></i>Extensión Random Avatars por <a href="http://www.sitesplat.com" title="Professional Web Development"><strong>SiteSplat.com</strong></a> construido para <a href="https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat" title="Professional Premium Themes"><strong>Estilos SiteSplat</strong></a>',
));

// Description of extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Descripción',
	'DESCRIPTION_NOTICE'	=> 'Nota de Extensión',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Gravatars aleatorios',
			'DESCRIPTION_2'		=> 'Para cada usuario',
			'DESCRIPTION_3'		=> 'Hospedados gravatar.com',
		),
		'note' => array(
			'NOTICE_1'			=> 'Preparado para phpBB 3.2'
		)
	)
));
