<?php
/**
*
* @package BBgdpr
* @copyright (c) 2018 SiteSplat All rights reserved
* @license Proprietary
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
	'BULK_EMAILS'				=> 'Mails',
	'BULK_EMAILS_EXPLAIN'		=> 'Al marcar esta casilla, usted acepta que los administradores de este foro pueden enviar correos electrónicos a usted. Se requiere la aceptación para permitir el registro. Los correos electrónicos son necesarios ya que la activación del foro u otros correos electrónicos de seguridad importantes se envían a los usuarios.',

	'PRIVACY_POLICY'			=> 'Privacidad',
    'PRIVACY_POLICY_EXPLAIN'    => 'Al marcar esta casilla, confirma que está de acuerdo con la Política de privacidad de este foro, que se acaba de mostrar en la página de términos. También puede encontrar la Política de privacidad una vez que haya iniciado sesión. Se requiere la aceptación para permitir el registro.',
	'REG_UNDRSTD'	        	=> 'Entiendo y estoy de acuerdo',
	
	'AGREEMENTS_REQUIRED'		=> 'Debes aceptar los correos electrónicos masivos (no es spam) y la política de privacidad',
	
	'BULK_EMAILS_QUICK_AGREE'				=> 'Mails del Foro',
	'PRIVACY_POLICY_QUICK_AGREE'				=> 'GDPR del Foro',
	
));
