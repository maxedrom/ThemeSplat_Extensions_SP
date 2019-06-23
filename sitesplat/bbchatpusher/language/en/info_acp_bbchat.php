<?php
/**
 *
 * BBchat
 * @copyright (c) 2018 sitesplat.com All rights reserved
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
	'ACP_BBCHAT_TITLE'		=> 'BBchat',
	'ACP_BBCHAT_SETTINGS'	=> 'BBchat Settings',
	'ACP_BBCHAT_ROOMS'		=> 'BBchat Rooms',

	// Wizard
	'KEYS'		=> 'Keys',
	'KEYS_DESC'	=> 'In order to run BBchat, we need to know your Instance Locator and Secret Key obtained from Pusher. If you don\'t have them yet:
						<ol>
							<li>head to <a href="https://dash.pusher.com/authenticate" target="_blank">dash.pusher.com</a></li>
							<li>in CHATKIT card click CREATE button</li>
							<li>as Instance name, insert anything, preferably the name of your board</li>
							<li>click CREATE</li>
							<li>you can find your keys under CREDENTIALS card</li>
						</ol>',
	'SITESPLAT_BBCHATPUSHER_IL'					=> 'Instance Locator',
	'SITESPLAT_BBCHATPUSHER_KEY'				=> 'Secret Key',
	'KEYS_ERROR'								=> 'The keys you inserted are not valid: %s.',
	'EMPTY_INSTANCE_LOCATOR'					=> 'Instance Locator is empty',
	'EMPTY_SECRET_KEY'							=> 'Secret Key is empty',
	'KEYS_INVALID'								=> 'Keys are invalid',
	'SUPERUSER'									=> 'Superuser',
	'SUPERUSER_DESC'							=> 'Now we will create a superuser that will handle all the sensitive tasks that require Secret Key to be used such as creating a rooms, allowing users to join the room, etc. You can see the user identified as "admin" in <a href="https://dash.pusher.com/" target="_blank">Pusher\'s dash</a> under INSTANCE INSPECTOR card after you select your instance.',
	'SITESPLAT_BBCHATPUSHER_SUPERUSER_CREATE'	=> 'Create a superuser to manage rooms',
	'CREATE_SUPERUSER'							=> 'Create superuser',
	'COULD_NOT_FETCH_SUPERUSER_DATA'			=> 'We were unable to fetch information about superuser from the Pusher servers. It\'s probably only temporary problem, try again later, please. Below you can find the response from Pusher server which can be used to solve the problem when it persists:<br><br>%s<br><br><a href="%s">Try again</a>',
	'SUPERUSER_CREATE_ERROR'					=> 'We were unable to create a superuser. Below you can find the response from Pusher server which can be used to solve the problem when it persists:<br><br>%s<br><br><a href="%s">Try again</a>',
	'USERS'										=> 'Users',
	'USERS_DESC'								=> 'Now we need to send Pusher some information about the users of this board. This will take some time, so do not close this window and be patient. While we process the users, your board will be off-line to prevent any inconsistencies.',
	'SITESPLAT_BBCHATPUSHER_PROCESS_USERS'		=> 'Send Pusher information about the users',
	'PROCESS_USERS'								=> 'Process users',
	'USERS_PROCESSING'							=> 'Processing users...',
	'USERS_PROCESSING_FAILED_TITLE'				=> 'Users processing failed.',
	'USERS_PROCESSING_FAILED'					=> 'Do not worry, let\'s try again.<br><br><a href="%s" class="button2">Try again</a>',
	'USERS_CREATE_ERROR'						=> 'Error message: %s.<br><br>Do not worry, let\'s try again.<br><br><a href="%s" class="button2">Try again</a>',
	'WIZARD_COMPLETE'							=> '<b>Congratulations!</b><br><br>Your BBchat has been configured successfully. Now head to the Rooms module (link in the left menu) and after you are happy with the rooms you created, enable the extension on this page.',

	'SITESPLAT_BBCHAT_ANNOUNCEMENT'				=> 'BBchat announcement',
	'SITESPLAT_BBCHAT_ANNOUNCEMENT_EXPLAIN'		=> 'This will be displayed above the BBchat. You can use HTML.',
    'SETTINGS_WELCOME'							=> 'BBchat Wizard',
	'SETTINGS_WELCOME_EXPLAIN'					=> 'Welcome to the BBchat setup wizard. Make sure to follow the steps carefully in order to setup your chat instance correctly.',
	'SETTINGS_NO_STEPS'							=> 'These below are BBchat General Settings. Don\'t forget to check the BBchat <strong>"Group Permission"</strong> under: <strong>"Users and Groups"</strong>, <strong>"Group Permissions"</strong>.<br />Also, keep in mind you can refresh the user BBchat data under: <strong>"Users and Groups"</strong>, <strong>"Manage Users"</strong>, select the username, then from the "Basic tools" dropdown select the "regenerate BBchat user data". <br />This is useful in case for example the user was moved to X custom group and its default color might have changed.<br /> BBchat also comes with some expansions pack. If certain SiteSplat premium extensions are installed support will be detected and added. <br />For example, Auto Embed with "BBembed", Markdown syntax with "BBmarkdown", Toxic language prevention with "BBprospective", User mentions (@username) with "BB@mention", User personal Status with "BBstatus" etc etc.',
	
	// Settings
	'SITESPLAT_BBCHATPUSHER'		    	=> 'Enable BBchat',
	'SITESPLAT_BBCHATPUSHER_EXPLAIN'    	=> 'Enable or disable BBchat Globally',
	'DEFAULT_COVER'							=> 'Default cover',
	'DEFAULT_COVER_EXPLAIN'					=> 'This cover will be displayed when no room is selected. Common image formats accepted and you can also use .gif and .svg. The cover is great to show off your creativity and your brand. You decide :)',
	'SITESPLAT_BBCHAT_MSG_LAYOUT'			=> 'Messages layout',
	'SITESPLAT_BBCHAT_MSG_LAYOUT_EXPLAIN'	=> 'Choose the messages layout. Modern bubbles (WhatsApp, Telegram) style is default. List style is compact and feels like the old good IRC chat :-)',
	'ALTERNATE'								=> 'Alternate',
	'LIST'									=> 'List',
	'SEND_SOUND'							=> 'Default sound for sent messages',
	'SEND_SOUND_EXPLAIN'					=> 'This is global default sound for sent messages. Users can personalize it via UCP',
	'RECEIVE_SOUND'							=> 'Default sound for received messages',
	'RECEIVE_SOUND_EXPLAIN'					=> 'This is global default sound for received messages. Users can personalize it via UCP',
	'SITESPLAT_BBCHAT_GIPHY_API'			=> 'Giphy API key',
	'SITESPLAT_BBCHAT_GIPHY_API_EXPLAIN'	=> 'Enter Giphy API key to enable GIFs in your chat. Create a new App on: <a href="https://developers.giphy.com" target="_blank">GIPHY New App</a>. Leave empty to disable this feature.',
	'SITESPLAT_BBCHAT_SUPERUSER_NAME'		=> 'Superuser name',
	'SITESPLAT_BBCHAT_SUPERUSER_AVATAR'		=> 'Superuser avatar absolute URL',

	// Rooms
	'SAVING_POSITIONS'				=> 'New positions are being saved, please, do not leave the page.',
	'SAVING_POSITIONS_ERROR'		=> 'We could not save new positions. Check your connection and try again.',
	'POSITIONS_SAVING_LEAVE_WARN'	=> 'New positions are still not saved. If you leave now, new order will not be permanently saved.',
	'ROOM'							=> 'Room',
	'ACP_BBCHAT_ROOMS_EXPLAIN'		=> 'Here is where you setup your chat rooms. BBchat does the heavy lifting for you and makes the magic happen. Private rooms, custom CSS, custom room images and much more. Go ahead you can cry of joy now. :-)<br />NOTE: After you wiped your tears of joy, keep the following in mind: <a href="https://pusher.com/chatkit/faq" target="_blank">Chat limitations</a>',
	'NO_ROOMS'						=> 'There are no rooms, yet. Add one right now!',
	'ADD_ROOM'						=> 'Add new room',
	'ROOM_NAME'						=> 'Room name',
	'ROOM_NAME_EXPLAIN'				=> 'This is how the room will be displayed to the users.',
	'ROOM_DESC'						=> 'Room description',
	'ROOM_DESC_EXPLAIN'				=> 'This will be displayed to the users. keep it short though :)',
	'ROOM_CLASSES'					=> 'Room CSS classes',
	'ROOM_CLASSES_EXPLAIN'			=> 'Here you can specify CSS classes that will be applied on this room. Then you can use the theme custom.css to make your own adjustments. For example, you might want to tweak the room background, messages layout, colors etc for each room. Go nuts! Enjoy the freedom of customization.',
	'ROOM_ANNOUNCEMENT'				=> 'Room announcement',
	'ROOM_ANNOUNCEMENT_EXPLAIN'		=> 'This can be used to present users with an announcement, note, rules, etc.',
	'ROOM_IMAGE'					=> 'Room image',
	'ROOM_IMAGE_EXPLAIN'			=> 'This image will be used to more attractive look of the room in the rooms list. SVG format accepted as well.',
	'REMOVE_IMAGE'					=> 'Remove this image',
	'ROOM_COVER'					=> 'Room cover',
	'ROOM_COVER_EXPLAIN'			=> 'This image will be used as a background when an user chats in this room. SVG format accepted as well.',
	'REMOVE_COVER'					=> 'Remove this cover',
	'ROOM_GROUPS'					=> 'Groups',
	'ROOM_GROUPS_EXPLAIN'			=> 'Only members of selected groups will be able to see and use this room. Yes Sir, finally private rooms that work :)',
	// error messages
	'NAME_REQUIRED'						=> 'The Room name is required.',
	'NAME_TOO_LONG'						=> 'The Room name is too long.',
	'DESC_TOO_LONG'						=> 'The Room description is too long.',
	'CLASSES_TOO_LONG'					=> 'The Room classes are too long. Maximum of 255 characters is supported.',
	'GROUPS_AT_LEAST_ONE'				=> 'You must select at least one group.',
	'ACP_BBCHAT_ROOM_API_ERROR'			=> 'Pusher API returned an error: %s',
	'ACP_BBCHAT_ROOM_REMOVAL_ERROR'		=> 'Room removal was not successful: %s',
	'ACP_BBCHAT_IMAGE_REMOVAL_ERROR'	=> 'The Image could not be deleted.',
	'ACP_BBCHAT_COVER_REMOVAL_ERROR'	=> 'The Cover could not be deleted.',
	'ACP_BBCHAT_FETCH_ROOMS_PROBLEM'	=> 'We are unable to fetch room data from Chatkit servers. Try again later please.',

	// trigger_error messages
	'ACP_BBCHAT_SETTING_SAVED'			=> 'BBchat settings have been saved.',
	'ACP_BBCHAT_ROOM_ADDED'				=> 'New room has been added.',
	'ACP_BBCHAT_ROOM_EDITED'			=> 'The room has been edited.',
	'ACP_BBCHAT_ROOM_REMOVE_CONFIRM'	=> 'Are you sure you want to remove the selected room? You will loose all message history of the room with this action.',
	'ACP_BBCHAT_ROOM_REMOVED'			=> 'The Room has been removed.',

	// user administration
	'USER_ADMIN_SITESPLAT_BBCHATPUSHER_REGENERATE'	=> 'Regenerate BBchat user data',
	'PUSHER_REGEN_FAILED'							=> 'Regeneration of BBchat user data failed: %s.',
	'PUSHER_REGEN_SUCCESS'							=> 'Regeneration of BBchat user data was successful.',


	// topic alerts
	'ACP_BBCHAT_TOPIC_ALERTS'		=> 'BBchat Topic Alerts',
	'TOPIC_ALERTS'					=> 'Topic alerts',
	'TOPIC_ALERTS_EXPLAIN'			=> 'Setup custom Topic alert messages to display in the chat rooms. You can select alerts based on X forum for X room. For example Special Moderators alerts for the Moderators only room, etc etc.',
	'NO_TOPIC_ALERTS'				=> 'There are no topic alerts. Add one now!',
	'ADD_TOPIC_ALERT'				=> 'Add new topic alert',
    'ROOM_FORUMS_ALERT_EXPLAIN'		=> 'Select the forum to feed the alert from',
	'ROOM_FORUMS_ALERT_TO_EXPLAIN'	=> 'Now select the room to display the alert to',
	'ACP_BBCHAT_TOPIC_ALERT_ADDED'	=> 'New topic alert has been added.',

	// logs
	'LOG_SITESPLAT_BBCHATPUSHER_BAN'	=> '<strong>Banned user from BBchat room</strong><br />» %s for %s',
	'BAN_LENGTH'	=> [
		60		=> '%d minutes',
		3600	=> '%d hours',
		86400	=> '%d days',
		604800	=> '%d weeks',
		2629743	=> '%d months',
	],

	// ACP main
	'REGENERATE_BBCHAT'			=> 'Regenerate BBchat users',
	'REGENERATE_BBCHAT_EXPLAIN'	=> 'This will ensure all users have correct username, avatar and color in BBchat. Board will be disabled while processing.',
	'USERS_UPDATE_ERROR'		=> 'Error message: %s.<br><br>Do not worry, let\'s try again.',
));
