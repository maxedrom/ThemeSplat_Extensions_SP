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
	'BBADBLOCK_MSG'		   => 'Está utilizando un AdBlocker, lo respetamos, pero necesitamos los anuncios funcionando correctamente :-/',
	'BBADBLOCK_MSG_POST'   => 'Este mensaje está oculto porque está utilizando un Adblock. Lo entendemos, pero necesitamos los anuncios funcionando. Por favor, ponga nuestro sitio en la lista blanca.',
	'BBADBLOCK_TOGO'	   => 'páginas para ir'
));
