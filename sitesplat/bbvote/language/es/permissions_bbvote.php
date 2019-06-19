<?php
/**
 *
 * @package BBvote
 * @copyright (c) 2019 SiteSplat All rights reserved
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
	'ACL_U_SITESPLAT_BBVOTE_BYPASS_MIN_POINTS'	=> 'Puede pasar por alto los límites mínimos de votos arriba y abajo (BBvote)',
	'ACL_U_SITESPLAT_BBVOTE_BEST_ANSWER_SELF'	=> 'Puede marcar y desmarcar la mejor respuesta en sus temas (BBvote)',
	'ACL_U_SITESPLAT_BBVOTE_BEST_ANSWER'		=> 'Puede marcar y desmarcar la mejor respuesta. (BBvote)',
	'ACL_F_SITESPLAT_BBVOTE_VOTING_ALLOWED'		=> 'Puede utilizar el sistema de votación BBvote',
	'ACL_U_SITESPLAT_BBVOTE_VOTING'				=> 'Puede utilizar el sistema de votación BBvote',
));
