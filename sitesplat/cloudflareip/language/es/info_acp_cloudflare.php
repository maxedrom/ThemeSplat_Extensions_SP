<?php
/**
*
* Cloudflare IP
*
* @copyright (c) 2016 SiteSplat All rights reserved
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
	'ACP_CLOUDFLARE'		=> 'Cloudflare IP',
	'ACP_CLOUDFLARE_EXPLAIN'		=> 'Bienvenido a la configuración de Cloudflare. Una vez que ingrese su correo electrónico, clave de API y dominio de Cloudflare, podrá configurar el modo de desarrollo y borrar el caché de este lugar.',
	'SS_HELPER_NOTY'		=> '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
	'CLOUDFLARE_NOTICE'		=> '<div class="phpinfo"><p>No hay configuraciones específicas para esta extensión. Las direcciones IP ahora están todas normalizadas y serán la IP de los usuarios reales. ¡Disfrute!<br />Usted puede ser expulsado del PCA después de hacer clic fuera de esta página. Es totalmente normal ya que su IP actual se normaliza. Deberá ingresar de nuevo y listo.</p></div>',
	
	'CLOUDFLARE_FETCH_FAILED'			=> 'No se pueden obtener datos de Cloudflare. Por favor, verifique su correo electrónico, clave de API y dominio. Errores devueltos desde Cloudflare:<br><br>%s',
	'CLOUDFLARE_SETTINGS_SAVED'			=> 'Se ha guardado la configuración local de Cloudflare.',
	'CLOUDFLARE_DEV_MODE_FAILED'		=> 'El cambio de modo de desarrollo de Cloudflare fue fallido:<br><br>%s.',
	'CLOUDFLARE_DEV_MODE_SUCCESS'		=> 'El cambio de modo de desarrollo de Cloudflare fue exitoso.',
	'CLOUDFLARE_CLEAR_CACHE_FAILED'		=> 'El borrado del caché de Cloudflare no fue exitoso:<br><br>%s.',
	'CLOUDFLARE_CLEAR_CACHE_SUCCESS'	=> 'El borrado de caché de Cloudflare fue exitoso.',

	'CLOUDFLARE_EMAIL'						=> 'Email de la cuenta Cloudflare',
	'CLOUDFLARE_API_KEY'					=> 'API Key',
	'CLOUDFLARE_API_KEY_EXPLAIN'			=> 'Inicie sesión en su cuenta de Cloudflare y visite la página de su cuenta. Verá la sección "Clave de API". Haga clic en "Ver clave de API" junto a "Clave de API global" y copie la clave aquí.',
	'CLOUDFLARE_DOMAIN'						=> 'Dominio',
	'CLOUDFLARE_DOMAIN_EXPLAIN'				=> 'Ingrese el dominio de su foro según la entrada de CF (no se necesita el protocolo de URL completo). Por lo general es como: "domain.com".',
	'CLOUDFLARE_DEVELOPMENT_MODE'			=> 'Modo Desarrollador',
	'CLOUDFLARE_DEVELOPMENT_MODE_EXPLAIN'	=> 'El modo de desarrollo le permite ingresar temporalmente al modo de desarrollo de sus sitios web si necesita realizar cambios en su sitio. Esto evitará la caché acelerada de CloudFlare y ralentizará su sitio, pero es útil si está realizando cambios en el contenido que se puede almacenar en caché (como imágenes, css o JavaScript) y le gustaría ver esos cambios de inmediato. Una vez ingresado, el modo de desarrollo durará 3 horas y luego se desactivará automáticamente.',
	'CLOUDFLARE_CLEAR_CACHE'				=> 'Limpiar Cache',
	'CLOUDFLARE_CLEAR_CACHE_EXPLAIN'		=> 'Eliminar TODOS los archivos de la caché de CloudFlare',

	'CLOUDFLARE_CF_CLEAR_CACHE'	=> 'Borrar el caché de CloudFlare',

	'LOG_PURGE_CLOUDFLARE_CACHE'	=> '<strong>El Cache de CloudFare ha sido borrado</strong>',
	
));

