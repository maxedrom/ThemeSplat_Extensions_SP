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
	'BBMEMBERSHIP'						=> 'Afiliaciones',

	'BBMEMBERSHIP_POINTS'  				=> 'Puntos',
	'CONTINUE_ON_BBPOINTS'				=> 'con BBPuntos',
	'CONNECTING_ON_BBPOINTS'			=> 'Validar con BBPuntos',
	'CONTINUE_ON_PAYPAL'				=> 'con PayPal',
	'CONNECTING_ON_PAYPAL'				=> 'Conexión con PayPal',
	'BBMEMBERSHIP_DEPOSIT_DISCLAIMER'   => '**Para afiliaciones superiores a $100, por favor, póngase en contacto con el <a href="./memberlist.php?mode=contactadmin">Administrador del Foro</a>',
	'BBMEMBERSHIP_STATUS'		        => 'Condición de miembro actual',
	'BBMEMBERSHIP_EXPIRED_INFO'			=> '¡Expirado!',
	'BBMEMBERSHIP_TAX_TEXT'			    => 'Incluye impuestos y/o tasas',
	'BB_CURRENCY_ZERO_ZERO'			    => '00',
	'BB_CURRENCY_ZERO_ZERO_DEC'			=> '.00',

	'MEMBERSHIP_LEVEL'					=> 'Nivel de Afiliación',
	'MEMBERSHIP_UNLIMITED'				=> 'Ilimitado',
	'MEMBERSHIP_SUCCESS'				=> '¡Gracias por suscribirse con una afiliación! Su transacción será validada en breve.',
	'MEMBERSHIP_FAILED_POINTS'			=> '¡Usted no tiene suficientes puntos para esta afiliación!',
	'MEMBERSHIP_FAILED_PP'				=> 'Hubo un error con la transacción. Por favor, póngase en contacto con el Administrador del foro',
	'MEMBERSHIP_DOUBLE'					=> 'Usted ya ha comprado un paquete',
	'PRIVATE_BOARD'					    => 'FORO PRIVADO',
	'BBMEMBERSHIP_CLUBMODE'				=> 'Para acceder al foro tendrá que comprar una afiliación válida. Este foro es privado y está disponible sólo para los miembros premium.'
));
