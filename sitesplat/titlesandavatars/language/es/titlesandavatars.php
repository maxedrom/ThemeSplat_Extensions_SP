<?php
/**
*
* BBAvatars
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Spanish Translation: ThE KuKa ( Raul Arroyo ) - http://www.phpbb-es.com
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
    'BBAVATARS_PARTECIPANTS'	=> 'Participantes del Tema',
	'PARTICIPATE_OTHERS'	    => 'Mostrar todos los participantes',
));
