<?php
/**
*
* phpBB Ajax likeBB.
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
	'LIKEBB_NOTICE'				    => '<div style="width:80%%;margin:20px auto;"><p>Los ajustes para está extensión están en <strong>%1$s » %2$s » %3$s.</strong><br /></p></div>',
	'ACP_LIKEDD_TITLE'				=> 'phpBB Ajax LikeBB',
	'LIKEDD_DISLIKE_OFF'			=> 'Deshabilitar la función No Me Gusta',
    'LIKEDD_DISLIKE_OFF_EXPLAIN'	=> 'Enciendo o Apaga el botón de No Me Gusta en los mensajes',
	'LIKEDD_LIKE_STYLE'				=> 'Estilo de sus botones Me Gusta / No Me Gusta',
    'LIKEDD_LIKE_STYLE_EXPLAIN'		=> 'Vista previa del botón Me Gusta / No Me Gusta<br /> NOTA: La clase <strong>btn-l-cst</strong> le permite tener su propio CSS personalizado definido. Asegúrese de añadir esto en su hoja de estilo custom.css',
	'LIKEDD_LIKE_ICON'				=> 'Ajustar su icono de Me Gusta / No Me Gusta',
	'LIKEDD_LIKE_ICON_EXPLAIN'		=> 'Elija su icono para los botones de Me Gusta / No Me Gusta',
	'LIKEDD_LIKE_LIST'				=> 'Habilitar la Lista de Me Gusta',
    'LIKEDD_LIKE_LIST_EXPLAIN'		=> 'Enciende o Apaga la lista de Me Gusta viendo un tema',
	'LIKEDD_MAX_DISLIKES'			=> 'Max. No Me Gusta',
	'LIKEDD_MAX_DISLIKES_EXPLAIN'	=> 'Max. No Me Gusta hasta que el mensaje se oculta a la vista. 0 cambia la función en Apagado',
	'LIKEDD_LIKE_GLOBAL'			=> 'Me Gusta / No Me Gusta en Anuncios Globales',
	'LIKEDD_LIKE_GLOBAL_EXPLAIN'	=> 'Enciende o Apaga Me Gusta / No Me Gusta en Anuncios Globales',
	'LIKEDD_LIKE_LOCKED'			=> 'Me Gusta / No Me Gusta en Temas Cerrados',
	'ACL_U_LIKEDD'					=> 'Puede usar el sistema de Me Gusta/No Me Gusta',
	'LIKEDD_LIKE_LOCKED_EXPLAIN'	=> 'Enciende o Apaga Me Gusta / No Me Gusta en Temas Cerrados',
	'SS_HELPER_NOTY'				=> '¡No existe el SiteSplat BBCore!<br />Descargue el <a href="http://sitesplat.com" target="_blank">BBCore</a> y copie la carpeta BBCore en su carpeta de extensión sitesplat.',
));
