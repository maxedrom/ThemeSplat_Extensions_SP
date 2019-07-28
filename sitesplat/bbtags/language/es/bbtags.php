<?php
/**
*
* BBtags
*
* @copyright (c) 2015 SiteSplat All rights reserved
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
	'BBTAGS'	            		=> 'Etiquetas',
	'BBTAGS_AUTO_SUGGEST'			=> 'Auto Aconsejar',
	'BBTAGS_TAG_SPEC'	    		=> 'Caracteres: [a-z 0-9 + # - .] Delimitar las etiquetas por punto y coma, o pulse Enter',

	'BBTAGS_ENTER_TAGS_PLACEHOLDER'	=> 'Introduzca sus Tags...',
	'TOPICTIME'		        		=> 'Fecha de tema activo'
));
