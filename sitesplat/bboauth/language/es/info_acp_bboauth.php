<?php
/**
*
* BBOAuth
*
* @maxedrom [Spanish]
* @copyright (c) 2018 SiteSplat All rights reserved
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
	'ACP_BBOAUTH'					=> 'BBoauth',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore no existe!<br />Descarguelo del siguiente link <a href="http://sitesplat.com" target="_blank">BBcore</a> y copie la carpeta de BBcore adentro de la carpeta de las Extensiones de Sitesplat.',
	'BBOAUTH_NOTICE'	            => '<div class="phpinfo"><p>La coniguracion de esta extension se encuentra en <strong>%1$s &#187; %2$s &#187; %3$s</strong>. <br />Seleccione "Oauth" luego, agregue la key apropiada para cada uno de los proveedores para poder activarlos.<br />Autogroup y otras opciones son:: <strong>ACP &#187; Configuración de Foro &#187; Configuracion de Registro de Usuario  &#187; BBoauth.<br />Cree el tipo de autenticacion usando los siguientes proveedores: <a href="https://www.coinbase.com/settings/api" target="_blank">Coinbase</a>, <a href="https://discordapp.com/developers/applications/#top" target="_blank">Discord</a>, <a href="https://www.dropbox.com/developers/apps" target="_blank">Dropbox</a>, <a href="https://developer.github.com/apps/building-oauth-apps/creating-an-oauth-app/" target="_blank">Github</a>, <a href="https://www.instagram.com/developer/" target="_blank">instagram</a>, <a href="https://api.slack.com/apps" target="_blank">Slack</a>, <a href="https://api.razer.com/projects/" target="_blank">Razer ID</a>, <a href="https://console.developers.google.com/apis/credentials" target="_blank">Google</a></strong></p></div>',

	'BBOAUTH_AUTOREGISTER'			=> 'Automaticamente registre con OAuth',
	'BBOAUTH_AUTOREGISTER_EXPLAIN'	=> 'Configure en Sí para omitir el proceso de registro cuando un usuario intenta iniciar sesión con el servicio OAuth. BBoauth obtendrá toda la información necesaria del servicio OAuth (nombre de usuario y correo electrónico) y generará una contraseña aleatoria para el usuario. También se envía un correo electrónico de bienvenida al usuario con la contraseña..<br/> Atención: Algunos proveedores no divulgarán cierta información sobre el usuario que intenta registrarse. Si no se proporciona el correo electrónico o el nombre de usuario, no será posible el registro automático. Sin embargo, en tales casos, BBoauth completará previamente cualquier información disponible en la etapa de registro para facilitar la tarea al usuario. El nuevo usuario también iniciará sesión automáticamente si la "Activación de la cuenta" está configurada en: "Sin activación (acceso inmediato)", que es el método recomendado, ya que asumimos que el usuario no es un Bot cuando pasa por la red social. cuenta de medios primero.',
	'BBOAUTH_GROUP'					=> 'Grupos para los usuarios de OAuth',
	'BBOAUTH_GROUP_EXPLAIN'			=> 'Los usuarios que usen la función de inicio de sesión de OAuth se agregarán automáticamente al grupo seleccionado elegido aquí.',
));

