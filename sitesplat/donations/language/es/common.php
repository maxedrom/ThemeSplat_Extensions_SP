<?php
/**
* @maxedrom [Español]
* @package BBdonations
* @copyright (c) 2016 SiteSplat All rights reserved
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
	'DONATIONS'						=> 'Donaciones',
	'DONATION'						=> 'Donación',
    'DONATIONS_INDEX'				=> 'Donaciones',
	'DONATION_DISABLED'				=> 'Las Donaciones estan desactivadas',
	'DONATIONS_DONATE'  			=> 'Donar',
    'DONATIONS_CONTACT_PAYPAL'		=> 'Por Favor espere…',
    'DONATIONS_AMOUNT'  			=> 'Cantidad',
    'DONATIONS_DATE'				=> 'Fecha',
	'DONATIONS_CUSTOM_MESSAGE'		=> 'Deje un Mensaje',
    'DONATIONS_SUCCESS' 			=> 'La donación fue realizada con éxito',
    'DONATIONS_CANCELLED' 			=> 'La donación fue cancelada',
    'DONATIONS_ERROR' 				=> 'Hubo un error en la Donación',
	
	'DONATIONS_THANK_YOU'			=> 'Gracias por apoyar a nuestra comunidad!',
	'DONATIONS_PREMIUM'				=> 'Las Donaciones con una cantidad de <strong>%s</strong> o más son agregagas a un grupo espacial con beneficios exclusivos del Foro.<br />Rango personalizado, color y mucho más!',
	'DONATIONS_MESSAGE'				=> 'Participe en nuestro éxito y juntos hagamos de nuestra comunidad la mejor',
	'DONATION_STEP_1'				=> '1',
	'DONATION_STEP_2'				=> '2',
    'DONATION_STEP_3'				=> '3',
	'DONATION_STEP_4'				=> '4',
	
	'DONATION_STEP_1_INNER'		    => 'Indique la cantidad a depositar',
	'DONATION_STEP_2_INNER'		    => 'Continuar de forma Segura en PayPal',
    'DONATION_STEP_3_INNER'	        => 'Volver a Nuestro Foro',
	'DONATION_STEP_4_INNER'		    => 'A disfrutar!',
	
	'DONATION_DEPOSIT_DISCLAIMER'   => '**Pague con Seguridad en PayPal y en <a href="https://www.coinbase.com/join/54c7b129d41344b592000006" target="_blank">CoinBase</a>',
	'DONATION_MY_CREDITS'		    => 'Usted ya ha realizado una Donación',
	
	'DONATIONS_NOGUESTS'		    => 'Nuestra Comunidad, requiere que inicie sesión antes de proceder con una donación.',
	'DONATIONS_TRANSACTION'		    => 'Transacciones',
	'DONATIONS_TRAN'		        => 'Transacción ',
	'DONATIONS_SENDER'		        => 'Remitente',
	'DONATIONS_DIGIT'		        => '.00',
	'DONATIONS_DONORS'		        => 'Donaciones Recientes',
	'DONATIONS_MSG_PLACEHOLDER'		=> 'Mensaje corto opcional...',
	
	'CONTINUE_ON_PAYPAL'		    => 'PayPal',
	'CONTINUE_ON_BITCOINS'		    => 'Bitcoin',
	'CONNECTING_ON_PAYPAL'		    => 'Conectando con PayPal',
	'BBDONATION_COPY'		        => 'BBdonation Construido con',
	'SITESPLAT_EXT_COPY'	        => 'Desarrollo web profesional y temas premium',
	
	'UCP_DONATION_TITLE'			=> 'Resumen de Donación',
	'UCP_DONATIONS_EXPLAIN'         => 'Su registro de transacciones de donación',
	'DONATION_ACTIVITY_UCP_EMPTY'   => 'Usted no presenta transacciones'
));
