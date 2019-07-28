<?php
/**
*
* BBmembership extension for the phpBB Forum Software package.
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

if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'MEMBERSHIPS'						=> 'Afiliaciones',
	'MEMBERSHIP_NOTIFICATION_BOUGHT'	=> '<strong>Compró afiliación</strong>: %1$s acaba de adquirir el nivel de afiliación %2$s.',
	'MEMBERSHIP_NOTIFICATION_EXPIRING'	=> '<strong>Expira afiliación</strong>: %1$s, su afiliación está a punto de expirar, en menos de un día.',
));
