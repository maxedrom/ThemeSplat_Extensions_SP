<?php
/**
*
* @package BBSidebar
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
* @Spanish Translation: ThE KuKa - http://www.phpbb-es.com
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
	// ACP
	'ACP_SIDEBAR_TITLE'					=> 'Ajustes de la Barra Lateral',
	'AD_SIDEBAR_EXPLAIN'				=> 'Configurar las opciones y bloques de BBSidebar. Hay muchas configuraciones posibles y con el uso de los bloques personalizados no hay límites, ya que soporta HTML. También puede optar por activar o desactivar completamente los bloques para dispositivos móviles y tabletas.<br/> Por favor, tenga en cuenta, <strong>que la actividad de bloques se almacena en caché durante 5 min.</strong> para mejorar el rendimiento del servidor. Para ver los cambios inmediatos, tendrá que purgar el caché del foro desde el PCA > General > Purgar el caché.',

	'ACP_SIDEBAR_HEADSUP'				=> 'Aviso',
	'ACP_SIDEBAR_HEADSIP_EXPLAIN'		=> '<strong>Personalizado</strong> es un tipo de bloque que permite usar HTML. <br /><strong>Equipo conectado</strong> es un tipo de bloque que muestra el equipo conectado en su foro. Cree un nuevo grupo llamado "Staff" o "Equipo" desde "Usuarios y Grupos" &#187; "Administrar Grupos" &#187; "Crear nuevo grupo" y luego ingrese el nombre de usuario de las personas que desea mostrar como equipo en línea para el bloque.<br /><strong>Temas calientes</strong> es un tipo de bloque que sigue el ajustes del foro de "temas populares" desde: "Mensajes" &#187; "Configuración de mensajes" &#187; "Publicación" &#187 "Umbral para Tema Popular"<br /><strong>Otros bloques</strong> otros tipos de bloques están disponibles después de que se haya habilitado el complemento Premium correspondiente. Puede encontrar muchos complementos premium aquí: <a href="http://www.sitesplat.com/phpBB3/marketplace.php"><strong>Marketplace</strong></a>.',

	'ACP_SIDEBAR_CONFIG'				=> 'BBSidebar',
	'ACP_SIDEBAR_OPTIONS'				=> 'Opciones de BBSidebar',
	'ACP_SIDEBAR_SETTINGS'				=> 'Ajustes de BBSidebar',
	'ACP_SIDEBAR_SAVED'					=> 'Cambios guardados',

	'ACP_SIDEBAR_SLOTS'					=> 'Espacios de la Barra Lateral',
	'ACP_SIDEBAR_SLOTS_EXPLAIN'			=> 'Establecer el número de ranuras o espacios que desea usar. El máximo es de 10',
	'ACP_SIDEBAR_SLOT' 					=> 'Ranura activa',

	'ACP_SIDEBAR_PANEL_PAGES'			=> 'Ver la barra lateral en la página de ajustes',
	'ACP_SIDEBAR_PANEL_PAGES_EXPLAIN'	=> 'Habilitar o deshabilitar la barra lateral en las páginas de PCU y PCM',
	'ACP_SIDEBAR_ALL_PAGES'				=> 'Ver la barra lateral en todas las páginas',
	'ACP_SIDEBAR_ALL_PAGES_EXPLAIN'		=> 'Establecer en ON para tener los bloques laterales en cualquier página del foro',
	'ACP_SIDEBAR_SHUFFLE'				=> 'Bloques aleatorios',
	'ACP_SIDEBAR_SHUFFLE_EXPLAIN'		=> 'Establecer en ON para aleatorizar los bloques en cada actualización de página',

	'ACP_SIDEBAR_WIDTH'			        => 'Anchura de la barra lateral',
	'ACP_SIDEBAR_WIDTH_EXPLAIN'			=> 'Elija la anchura por defecto de la barra lateral',

	'ACP_SIDEBAR_HEIGHT' 				=> 'Altura dinámica:',
	'ACP_SIDEBAR_HEIGHT_EXPLAIN' 		=> 'Si la altura dinámica esta en ON, la altura del foro se tomará en consideración y los bloques laterales <strong>nunca serán más largos</strong> que el foro.',
	'ACP_SIDEBAR_HEIGHT_N' 				=> 'No',

	'ACP_SIDEBAR_WIDTH_15'				=> '15%',
	'ACP_SIDEBAR_WIDTH_20'				=> '20%',
	'HOWMANY'							=> '¿Cuántos registros mostrar?',
	'HOWMANY_EXPLAIN'					=> 'Establecer el número de registros que desea mostrar. El máximo es de 10',
	'IGNORE'							=> 'Ignorar',
	'IGNORE_EXPLAIN'					=> 'Excluir usuarios, Administradores y Moderadores globales de la Barra Lateral. (NO de los bloques)',
	'IGNORE_USERS'						=> 'Ignorar Usuarios Inactivos',
	'IGNORE_FOUNDER'					=> 'Ignorar Fundadores',
	'IGNORE_ADMINS_MODS'				=> 'Ignorar Administradores y Moderadores',

	'ACP_TITLE_SLOT'					=> 'Título del Espacio',
	'ACP_TITLE_SLOT_EXPLAIN'			=> 'Insertar el título del espacio',
	'ACP_SIDEBAR_TEXT'					=> 'Insertar el código HTML',
	'ACP_SIDEBAR_TEXT_EXPLAIN'			=> 'Código HTML',

	'ACP_SIDEBAR_TYPE'					=> 'Interruptor de Barra Lateral',
	'ACP_SIDEBAR_TYPE_EXPLAIN'			=> 'Mostrar barra lateral a la izquierda o derecha',
	'LEFT'								=> 'Lado izquierdo',
	'RIGHT'								=> 'Lado derecha',
	'SHOW_MOBILE'						=> 'Mostrar en Móvil',
	'SHOW_TABLET'						=> 'Mostrar en Tablet',
	'SHOW_TYPE'							=> 'Tipo de bloque',

	'SIDEBAR_DESCRIPTION_PAGE'			=> 'Página con barra lateral',
	'SIDEBAR_DESCRIPTION_PAGE_OVERVIEW'	=> 'Una barra lateral para su foro, conmutable y configurable',
	'SIDEBAR_DESCRIPTION_PAGE_STATUS'	=> 'Izquierda - Derecha, Anchura y bloques predefinidos',
	'SIDEBAR_DESCRIPTION_PAGE_ABILITY'	=> 'Muy personalizable',
	'SIDEBAR_DEVELOPERS'				=> 'Desarrolladores',

	'SIDEBAR_TYPE_NOT_EXIST'			=> 'El tipo de barra lateral `%1$s` no existe.',
	'NOTICE_BADGE'					    => 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=24"><strong>BBAwards</strong></a> no esta instalada, NO puede usar el bloque de tipo BBAwardws.',
	'NOTICE_BBDONATION'					=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=44"><strong>BBDonation</strong></a> no esta instalada, NO puede usar el bloque de tipo Donaciones.',
	'NOTICE_BBMEMBERSHIP'				=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=31"><strong>BBMembership</strong></a> no esta instalada, NO puede usar el bloque de tipo Membresías.',
	'NOTICE_BBPOINTS'					=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=22"><strong>BBPoints</strong></a> no esta instalada, NO puede usar el bloque de tipo BBPoints.',
	'NOTICE_BBREACTION'					=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=27"><strong>BBReaction</strong></a> no esta instalada, NO puede usar el bloque de tipo BBReaction.',
	'NOTICE_LIKEDD'						=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=22"><strong>LikeBB</strong></a> no esta instalada, NO puede usar el bloque de tipo LikeBB.',
	'NOTICE_NEWSLETTER'					=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=21"><strong>E-mail Subscribers</strong></a> no esta instalada, NO puede usar el bloque de tipo E-mail Subscribers.',
	'NOTICE_BBDOWNLOAD'					=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php"><strong>BBdownload</strong></a> no esta instalada, NO puede usar el bloque de tipo BBDonwload.',
	'SIDEBAR_NOTICE'					=> '<div style="width:80%;margin:20px auto;"><p>Los ajustes de esta extensión están en <strong>%1$s » %2$s » %3$s</strong>.</p></div>',
	'SS_HELPER_NOTY'					=> '¡El añadido BBCore no existe!<br />Descargue el <a href="#">BBCore</a> y copie la carpeta en la carpeta de extensiones sitesplat.',

	'SIDEBAR_TYPE_BBPOINTS'				=> 'Puntos BB',
	'SIDEBAR_TYPE_LAST_BADGES'			=> 'Últimas Insignias',
	'SIDEBAR_TYPE_LAST_BBREACTIONS'		=> 'Últimas Reacciones BB',
	'SIDEBAR_TYPE_LAST_MEMBERS'			=> 'Últimos Miembros',
	'SIDEBAR_TYPE_LIKEDD'				=> 'Últimos Me Gusta',
	'SIDEBAR_TYPE_BIRTHDAY'				=> 'Cumpleaños',
	'SIDEBAR_TYPE_CALENDAR'				=> 'Calendario',
	'SIDEBAR_TYPE_TOP_POSTERS'			=> 'Top Posteadores',
	'SIDEBAR_TYPE_STAFF'				=> 'Equipo conectado',
	'SIDEBAR_TYPE_DONATIONS'			=> 'Donaciones',
	'SIDEBAR_TYPE_MEMBERSHIP'			=> 'Membresías',
	'SIDEBAR_TYPE_TOP_TOPICS'			=> 'Últimos Temas',
	'SIDEBAR_TYPE_HOT_TOPICS'			=> 'Temas calientes',
	'SIDEBAR_TYPE_CLOCK'				=> 'Reloj',
	'SIDEBAR_TYPE_POLL'					=> 'Última Encuesta',
	'SIDEBAR_TYPE_NEWSLETTER'			=> 'Boletín',
	'SIDEBAR_TYPE_BBDOWNLOADS'			=> 'Descargas',

	'ONE_S'					            => 'S',
	'ONE_I'			                    => 'I',
	'ONE_D'								=> 'D',
	'ONE_E'								=> 'E',
	'ONE_B'			                    => 'B',
	'ONE_A'								=> 'A',
	'ONE_R'								=> 'R',


	'SITESPLAT_COM'		                => 'http://sitesplat.com',
	'SITESPLAT_COPY'		            => '&#169; SiteSplat',
	'LICENSE_INFO'		                => 'Propietario - SiteSplat Todos los derechos reservados',
	'EXTENSION_DEVELOPER'			    => 'Desarrollador',
	'ACP_SIDEBAR_NOTICE_CLOSE'			=> 'Cerrar',

	'ACP_SIDEBAR_VERSION'		        => '1.4.0',
	'ACP_LOADING'		                => 'Cargando... Espere',

	'FORUM_CONTENT'		                => 'Contenido del Foro',
	'SIDEBAR_DESCRIPTION_PAGE'			=> 'Está extensión añade un sistema de múltiples bloques flexibles a su foro. Toneladas de opciones disponibles y viene con muchos bloques modernos por defecto.',
	'SIDEBAR_TASKS_1'				    => 'Bloques Modernos',
	'SIDEBAR_TASKS_2'				    => 'Sistema grid de Bootstrap',
	'SIDEBAR_TASKS_3'				    => 'Ignorar normas',
	'SIDEBAR_TASKS_4'				    => 'Ajustes de sintonización fina como opciones para móviles y tabletas',
	'SIDEBAR_TASKS_5'				    => 'Ampliable con soporte para muchos complementos/extensiones premium. Eche un vistazo a los complementos y/o extensiones premium en <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'SIDEBAR_TASKS_6'				    => '¡Mucho más...!'
));
