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
	'NOTIFICATION_TYPE_UPVOTE'		=> 'Alguien ha dado un voto positivo a tu mensaje',
	'NOTIFICATION_TYPE_DOWNVOTE'	=> 'Alguien ha dado un voto negativo a tu mensaje',
	'NOTIFICATION_TYPE_BEST_ANSWER'	=> 'Alguien ha marcado tu mensaje como la mejor respuesta.',
));
