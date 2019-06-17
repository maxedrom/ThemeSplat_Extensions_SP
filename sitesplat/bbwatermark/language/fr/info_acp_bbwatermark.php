<?php
/**
*
* @package BBwatermark
* @copyright (c) 2016 SiteSplat (http://sitesplat.com)
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
	'BBWATERMARK_PATH'			    => 'BBwatermark',
	'BBWATERMARK_PATH_EXPLAIN'	    => 'Path aboslu vers une image watermark sur votre serveur ou laisser vide pour utiliser un watermark bas&eacute; sur pseudo et url du board. Uniquement des .png ! (ex: ext/sitesplat/bbwatermark/styles/FLATBOOTS/images/watermark.png)<br />. Attention le watermark doit &ecirc;tre en format PNG8. Vous pouvez convertir vos en PNG facilement ici <a href="http://compresspng.com/" target="blank">www.compresspng.com</a>',
	'LOG_BBWATERMARK_INSTALLED'		=> '<strong>BBwatermark correctement install&eacute;</strong>',
	'LOG_BBWATERMARK_DEINSTALLED'	=> '<strong>BBwatermark correctement d&eacute;install&eacute;</strong>',

	'LOG_BBWATERMARK_NOT_REPLACED'	=> '<strong>Probl&ecirc;me de d&eacute;sinstallation BBwatermark</strong><br />Impossible de remplacer les fichier(s)<br />» %s',
	'LOG_BBWATERMARK_NOT_UPDATED'	=> '<strong>Probl&ecirc;me d\'installation BBwatermark</strong><br />Impossible de remplacer les fichier(s)<br />» %s',
	'BBWATERMARK_NOTICE'		    => '<div class="phpinfo"><p>Les options de cette extension sont dans <strong>%1$s » %2$s » %3$s.</strong></p></div>',

));


