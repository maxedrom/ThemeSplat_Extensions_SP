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
'TFA' => 'Autenticación de dos factores',
'TFA_REQUIRED_KEY_MISSING' => 'El administrador de este foro requiere que haya agregado una clave de autenticación de dos factores para acceder a partes (limitadas) de este foro, sin embargo, actualmente no tiene claves (compatibles) registradas en su cuenta. Puede agregar una nueva clave de seguridad <a href="%s"> aquí </a>.
<br /> Por razones de seguridad, la placa ha sido desactivada hasta que agregue una clave de seguridad a su cuenta. Es posible que se le solicite que ingrese su contraseña mientras agrega una clave de seguridad ',
// Controlador
'TFA_SOMETHING_WENT_WRONG' => 'Ocurrió algo inesperado. Por favor, inténtelo de nuevo más tarde',
'ERR_NO_MATCHING_REQUEST' => 'No se encontró una solicitud coincidente',
'ERR_NO_MATCHING_REGISTRATION' => 'No se encontró un registro coincidente',
'ERR_AUTHENTICATION_FAILURE' => 'Falló la autenticación',
'ERR_UNMATCHED_CHALLENGE' => 'El desafío de registro no coincide',
'ERR_ATTESTATION_SIGNATURE' => 'La firma del certificado no coincide',
'ERR_ATTESTATION_VERIFICATION' => 'El certificado de certificación no se puede validar',
'ERR_BAD_RANDOM' => 'No se puede obtener una buena fuente de aleatoriedad',
'ERR_COUNTER_TOO_LOW' => 'Contador demasiado bajo',
'ERR_PUBKEY_DECODE' => 'Fallo en la descodificación de la clave pública',
'ERR_BAD_UA_RETURNING' => 'Error devuelto por el agente de usuario',
'ERR_OLD_OPENSSL' => 'OpenSSL debe ser al menos la versión 1.0.0, esto es% s',
'UNKNOWN_ERROR' => 'Ocurrió un error desconocido durante la validación de su clave de seguridad. Por favor, inténtelo de nuevo más tarde.',

'ERR_TFA_NO_REQUEST_FOUND_IN_SESSION' => 'No se encontró ninguna solicitud en la sesión actual. ¿Has enviado a través de una página diferente? ',
'TFA_TFA_NOT_REGISTERED' => 'La clave de seguridad utilizada no se registró en su cuenta',

'TFA_NO_ACCESS' => 'Parece que no tienes acceso a esta página?',
'TFA_UNABLE_TO_UPDATE_SESSION' => 'No se puede actualizar la sesión. Por favor, póngase en contacto con el administrador de la junta ',
'TFA_DISABLED' => 'La autenticación de dos factores ha sido deshabilitada',

'TFA_OTP_KEY_LOG' => 'Ingrese la clave generada en el Autenticador de Google y luego presione enviar',
'TFA_OTP_KEY_LOG_EXPLAIN' => 'Ingrese el código de verificación generado por la aplicación de autenticador desde su teléfono para iniciar sesión en su cuenta de manera segura.',
'TFA_INCORRECT_KEY' => 'La clave provista fue incorrecta.',
'TFA_NO_KEY_PROVIDED' => 'No se proporcionó ninguna clave',
'TFA_KEY_REQUIRED' => 'Por favor ingrese su clave de seguridad',

'TFA_OTP' => 'OTP',
	)
);
