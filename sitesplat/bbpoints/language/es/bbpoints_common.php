<?php
/**
*
* BBpoints extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
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
	'BBPOINTS'						=> 'Puntos', // This is the forum point name. You can edit it to reflect your own point name.
	'YOUR_BBPOINTS'					=> 'Tus puntos',
	'BB_AMOUNT'			    		=> 'Cantidad',
	'BB_PAID_UP'			    	=> 'Pagado',
	'TOPIC_HIDDEN'					=> 'Tema oculto. Requiere un pago',
	'WAS_HIDDEN'					=> 'Este es un tema pagado',
	'BBPOINTS_HIDE_TOPIC'	        => 'Puntos Min.',
	'BBPOINTS_HIDE_TOPIC_EXPLAIN'	=> 'Ingrese los Puntos Mínimos requeridos para que el siguiente usuario lea este tema. <br />(Los puntos serán transferidos a su cuenta)',
	'TRANSFER_NOTI'					=> 'Has recibido una donación de %1$s de %2$s',

	'NOTIFICATION_TYPE_SITESPLAT.BBPOINTS.NOTIFICATION.TYPE.TRANSFER' => 'Alguien te transfirió puntos',
));
