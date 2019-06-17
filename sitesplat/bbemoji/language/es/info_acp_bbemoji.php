<?php
/**
*
* @package BBemoji
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
	'ACP_BBEMOJI'		=> 'BBEmoji',
	'SS_HELPER_NOTY'	=> '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'BBEMOJI_NOTICE'	=> '<div class="phpinfo"><p>No hay configuraciones específicas para esta extensión. Escriba dos puntos en la página de publicación o en el formulario de respuesta rápida, como este ":" para obtener sugerencias de iconos.<br />Los emoji pueden desactivarse a nivel de usuario a través de <strong>PCU &#187; Preferencias de Foro &#187; Editar preferencias de visualización &#187; "Mostrar smilies como imágenes"</strong></p></div>',
));
