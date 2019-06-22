<?php
/**
 *
 * Subject Check. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, SiteSplat
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'SUBJECT_CHECK_SIMILAR_TOPIC'	=> array(
		1	=> 'El contenido de su tema es similar a un tema ya existente. Verifíquelo y/o responda allí en lugar de crear un nuevo tema.',
		2	=> 'El contenido de su tema es similar a unos temas ya existentes. Échales un vistazo y/o responde allí en lugar de crear un nuevo tema.',
	),
	'SUBJECT_CHECK_STRICT_TOPIC'	=> array(
		1	=> 'El contenido de su tema es similar a un tema ya existente. Responde a este en lugar de crear un nuevo tema.',
		2	=> 'El contenido de su tema es similar a unos temas ya existentes. Responda al que mejor se adapte a su mensaje en lugar de crear un nuevo tema.',
	),

	// One of these two strings will be appended to the above strings, so they need a leading space or some other separator.
	'SUBJECT_CHECK_NEW_WINDOW'			=> ' (Los enlaces se abrirán en una nueva ventana.)',
	'SUBJECT_CHECK_SAME_WINDOW'			=> ' (Los enlaces se abriran en la misma ventana.)',

	// AJAX
	'SUBJECT_CHECK_WORKING'				=> 'Buscando temas con títulos similares...',
));
