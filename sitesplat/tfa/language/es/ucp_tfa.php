<?php
/**
*
* @package Two Factor Authentication
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'TFA_NO_KEYS'				=> 'Ninguna Clave',
		'TFA_NO_KEY_FOUND'			=> 'No se encontró la clave de autenticación de dos factores. Descargue la aplicación Google Authenticator en su dispositivo móvil y asocie la cuenta ingresando una nueva clave. <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="blank"><i class="fa fa-android"></i> Android</a> &#47; <a href="https://itunes.apple.com/ca/app/google-authenticator/id388497605" target="blank"><i class="fa fa-apple"></i> Apple</a>',
		'TFA_KEYS'					=> 'En esta página puede administrar sus claves de autenticación de dos factores. Si pierde las llaves, asegúrese de quitar la clave de su autenticador. Puede restablecer su clave con la función de olvidar contraseña, luego podrá iniciar sesión nuevamente y crear una nueva clave.',
		'TFA_NO_MODE'				=> 'Sin modo de AUTENTICACION',
		'TFA_KEYS_DELETED'			=> 'Las claves seleccionadas han sido borradas.',
		'TFA_NEW'                   => 'Agregar Nueva Clave',
		'TFA_ERROR'					=> 'Se ve que algún error ha ocurrido...',
		'TFA_REG_FAILED'			=> 'La Registración ha Fallado con Errores: ',
		'TFA_REG_EXISTS'			=> 'La clave proporcionada ya habia sido registrada en su cuenta',
		'TFA_ADD_KEY'				=> 'Registrar Nueva Clave',
		'TFA_KEY_ADDED'				=> 'Su clave de suguridad ha sido agregada y ya puede ser usada.',
		'TFA_INSERT_KEY'			=> 'Ingrese su clave de seguridad y presione sobre el boton de la Clave.',
		'TFA_REGISTERED'			=> 'Clave Registrada',
		'TFA_LAST_USED'				=> 'Ultima Clave Usada',
		'TFA_LOGIN_FROM'			=> 'Ultimo acceso desde',
		'TFA_MODULE_NOT_FOUND'		=> 'El modulo seleccionado  (%s) no ha sido encontrado',
		'TFA_MODULE_NO_REGISTER'	=> 'El modulo seleccionado no acepta Claves para su registro',
		'TFA_SELECT_NEW'			=> 'Agregar Nueva Clave',
		'TFA_ADD_NEW_OTP_KEY'		=> 'Agregar una nueva Clave OTP a su cuenta',
		'TFA_ADD_OTP_KEY_MAIN'	    => 'Escanee el Código QR debajo con la App de Google Authenticator desde <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="blank"><i class="fa fa-android"></i> Android</a> &#47; <a href="https://itunes.apple.com/ca/app/google-authenticator/id388497605" target="blank"><i class="fa fa-apple"></i> Apple</a>, o también puede utilizar la clave generada abajo.<br /> Una vez realizado, ingrese el codigo proporcionado por su Aplicación de Autenticación para asociar su Cuenta.',
		'TFA_OTP_KEY'				=> 'Clave Generada Aqui, luego clic en Aprobar',
		'TFA_ADD_OTP_KEY_EXPLAIN'	=> '<span>%s</span>',
		'TFA_OTP_INVALID_KEY'		=> 'Clave inválida.',
		'TFA_KEYTYPE'				=> 'Tipo de Clave',
		'TFA_KEY_NOT_USED'			=> 'No ha sido utilizada todavía',
	)
);
