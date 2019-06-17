<?php
/**
* @maxedrom [Español]
* @package BBembed
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
	'ACP_BBEMBED'					=> 'BBembed',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore no existe!<br />Descargalo de <a href="http://sitesplat.com" target="_blank">BBcore</a> y copia la carpeta de BBcore adentro de la carpeta the extensiones sitesplat.',
	'BBEMBED_NOTICE'	            => '<div class="phpinfo"><p>No hay configuraciones específicas para esta extensión. Publique enlaces directos en las publicaciones y BBembed mostrará automáticamente los videos.</p></div>',
));

