<?php
/**
*
* BBCore [Spanish]
*
* @package language
* @version $Id$
* @copyright (c) 2015 SiteSplat.com
* @Spanish Translation (c) 2015 ThE KuKa - www.phpbb-es.com
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

// BBCore
$lang = array_merge($lang, array(

  'PM_NEW_MSG' => array(
    1 => 'Tiene %d Nuevo mensaje privado',
    2 => 'Tiene %d Nuevos mensajes privados',
  ),
  'PM_UNREAD_MSG' => array(
    1 => 'Tiene %d mensaje privado sin leer',
    2 => 'Tiene %d mensajes privados sin leer',
  ),
  'PM_NEW_MSG_BUBBLE' => array(
    1 => '%d',
    2 => '%d',
  ),
   
  'UCP_MAIN'					=> 'General',
  'UCP_MAIN_FRONT'				=> 'Página principal',
  'UCP_MAIN_SUBSCRIPTION'		=> 'Gestionar suscripciones',
  'UCP_MAIN_BOOKMARKS'			=> 'Gestionar favoritos',
  'UCP_MAIN_DRAFTS'				=> 'Gestionar borradores',
  'UCP_MAIN_ATTACHMENTS'		=> 'Gestionar adjuntos',

  'USER_PANEL'             	    => 'Panel de Control',
  'UCP_PROFILE'                 => 'Perfil',
  'UCP_PROFILE_PROFILE'         => 'Editar perfil',
  'UCP_PROFILE_SIGNITURE'       => 'Editar firma',
  'UCP_PROFILE_AVATAR'          => 'Editar avatar',
  'UCP_PROFILE_SETTINGS'        => 'Ajustes de cuenta',
  'UCP_AVATAR_SELECT_OPTIONS'	=> 'Opciones de Avatar', 
  'UCP_AVATAR_SELECT_UPLOAD'	=> 'Subir avatar desde su dispositivo',
  'UCP_SUBMIT_TO_UPLOAD'		=> 'Enviar a continuación de la subida',
  
  'UCP_PREFERENCE'              => 'Preferencias del Foro',
  'UCP_PREFERENCE_SETTINGS'		=> 'Editar ajustes globales',
  'UCP_PREFERENCE_DEFAULTS'		=> 'Editar preferencias de mensajes',
  'UCP_PREFERENCE_OPTIONS'		=> 'Editar preferencias de visualización',

  'UCP_MESSAGES'				=> 'Mensajes',
  'UCP_PM_COMPOSE'				=> 'Escribir mensaje',
  'UCP_PM_DRAFTS'				=> 'Gestionar borradores',
  'UCP_PM_INBOX'				=> 'Bandeja de entrada',
  'UCP_PM_OUTBOX'				=> 'Bandeja de salida',
  'UCP_PM_SENTBOX'				=> 'Enviados',
  'UCP_PM_OPTIONS'				=> 'Normas, carpetas y ajustes',
  'UCP_NO_USER_CHANGE_ALLOWED'  => '**El cambio de nombre de usuario no está permitido**',
  'UCP_REGISTER_EMAIL_EXPLAIN'  => 'Por favor, no use correos electrónicos desechables',

  'WIDTH_SIZE'					=> 'anchura',   
  'PIXEL_SIZE'					=> 'px',   
  'HEIGHT_SIZE'					=> 'altura',

  'UCP_GROUPS'					=> 'Grupos de usuarios',
  'UCP_GROUPS_MEMBERSHIP'		=> 'Editar usuarios',
  'UCP_GROUPS_MANAGE'			=> 'Administrar grupos', 
  
  'UCP_ZEBRA'					=> 'Amigos e Ignorados',
  'UCP_ZEBRA_FRIENDS'			=> 'Gestionar amigos',
  'UCP_ZEBRA_FOES'				=> 'Gestionar ignorados',
  'UCP_APPLY'					=> 'Aplicar',
  'UCP_PM_DEFAULT_RULE_TAG'		=> 'Acción por defecto',
  'UCP_PM_DEFAULT_RULE'			=> 'No aceptar nuevos mensajes',
  'UCP_PM_DEFAULT_RULE_EXPLAIN'	=> 'Esta acción se activará si ninguna de las anteriores es aplicable. Los mensajes nuevos aguardarán hasta que haya suficiente espacio disponible.',
  'UCP_PM_NEW_MESSAGE'			=> 'Nuevo Mensaje',
  'BIO'							=> 'Información Personal',
  'MANAGE'						=> 'Gestionar',
  'JOINED_BOARD'				=> 'Ingresó en el Foro',
  'VISITED_BOARD'				=> 'Última visita',
  'SEE_MORE'					=> 'Más',
  'ATTACH_SIGNATURE'			=> 'Adjuntar firma',
  'BBCODES'                     => 'BBCodes',

  'DELETE_POST_SOFT'            => 'Borrado de mensaje Soft',
  'DELETE_POST_PERMANENT'       => 'Borrado permanente del mensaje',
  'DELETE_POST_SOFT_WARN'       => 'Se puede recuperar',
  'DELETE_POST_PERMANENT_WARN'	=> 'NO se puede recuperar',
  
  'POLL_MAX_OPTIONS_EXPLAIN_ALT'	=> 'Introduzca el número máximo de opciones que el usuario puede seleccionar',
  'POLL_VOTE_CHANGE_LABEL'      => 'Permitir votar de nuevo',
  'NO_VOTES_NA'                 => 'N/A',
  'NOT_AVAILABLE'               => 'No disponible',
  'POST_TOPIC_NEW'				=> 'Nuevo Tema',
  'QUICK_REPLY_SHOW_HIDE'		=> 'Mostrar/Ocultar Respuesta Rápida',
  'CHARACTERS_COUNT'			=> 'Caracteres',
  'CHARACTERS_COUNT_REM'		=> 'Restantes',
  'BOOKMARKED_TOPICS_UCP'		=> 'Temas Favoritos',
  'ATTACH_EXPLANATION_SORTABLE'	=> 'Clic para ordenar',
  'ATTACH_FORUM'				=> 'Adjunto(s)',
  'MCP_DETAILS_LOG'				=> 'Detalles',
  'MCP_DETAIL_U_IP'				=> 'Usuario e IP',
  'MCP_MANAG_BAN'				=> 'Gestionar Excluidos',
  'MCP_UNAPPROVED_POSTS_ZERO'	=> 'No hay mensajes en espera de aprobación',
  'MCP_REPORTS_ZERO'            => 'No hay reportes para revisar',
  'MCP_PM_REPORTS_ZERO'         => 'No hay MP reportados para revisar',

 
  'SUBFORUM_LINK'                => 'Abrir enlace en una nueva pestaña',
  'FORUMLIST_UNAPPROVED'         => 'Por lo menos un tema en este Foro no ha sido aprobado', 
  'FORUMLIST_UNAPPROVED_POST'    => 'Por lo menos un mensaje en este Foro no ha sido aprobado', 
  'FORUMLIST_LASTPOST'           => 'Ver el último mensaje',
  'TOPICS_POSTS_STATISTICS'      => 'Estadísticas',
  'TOPICS_ROW_REPORTED'          => 'Esta Tema ha sido reportado',
  'TOPICS_ROW_NOT_APPROVED'      => 'Este Tema no ha sido aprobado',
  'TOPICS_ROW_DELETED'           => 'Este tema ha sido borrado',
  'MODERATOR_PANEL_GENERAL'		 => 'Panel del Moderador',
  'ADMIN_PANEL_GENERAL'          => 'Panel de Administración',
  'RANK_IMAGE'                   => 'Imagen del Rango',
  
  'WELCOME_INDEX'				 => 'Bienvenido',
  'FAQ'                          => 'FAQ',
  'CAPTION_FAQ'                  => 'Preguntas y respuestas frecuentes',
  'CAPTION_SEARCH'				 => 'Búsqueda aquí',
  'CAPTION_MEMBERS'				 => '¿Buscas a alguien?',
  'MEMBERS_CAP'					 => 'Usuarios',
  'CAPTION_UCP'					=> 'Fijar sus preferencias',
  'UCP_CAP'                     => 'Panel del Usuario',
  'INDEX_CAPTION'				=> 'Esta es la página índice del foro',
  'VIEWTOPIC_CAP'				=> 'Título del Tema',
  'CAPTION_VIEWTOPIC'			=> 'Descripción del Tema',
  'CAPTION_VIEWFORUM'			=> 'Vea todas las categorías del foro',
  'POSTINGS_CAP'				=> 'Editor de escritura',
  'CAPTION_POSTINGS'        	=> '¡Difusión de escritura!',

  'MCP_CAPTION'					=> 'Aquí es donde se llega a utilizar los Super Poderes ;-)',
  'BOOTSTRAP_ELEMENT'           => 'Elementos Bootstrap',
  'BOOTSTRAP_ELEMENT_CAPTION'	=> 'Documentación rápida del Foro',
  'MAIN_FORUM'					=> 'Foro',
  'MAIN_MAIN_STUFF'				=> 'Página principal',
  'MAIN_TRENDS'					=> 'Ver las tendencias',

  'MAIN_SEARCH_IT_UP'			=> 'Búsqueda aquí',
  'SUB_NO_ICON'					=> 'Sin icono aquí',
  'EXAMPLE_WITH_ICON'			=> 'Ejemplo con icono',
  'EXAMPLE_LINK'				=> 'Enlace ejemplo',
  'MAIN_SOCIAL'					=> 'Social',
  'SOCIAL_P'					=> 'Chat aquí ;-)',
  
  'MORE'                        => 'Más',
  'EXPAND_CLOSE'          		=> 'Cerrar',
  'MARK_TOPICS_READ'			=> 'Marcar temas como leídos',
  'CONTACT'          			=> 'Contactar',
  'GET_IN_TOUCH'            	=> 'Contactar con nosotros',
  'HANG_AROUND'            		=> 'Esperar',
  'JOIN_THE_CLUB'           	=> 'Ingresar en el Club',
  'MENU'                        => 'MENÚ',
  'YOU_ARE_HERE'          		=> 'Usted esta aquí',
  'IN_FOOTER'                  	=> 'En:',
  'REPLY'                       => 'Responder',

  'LOGIN_REMEMBER'				=> 'Mantenerme conectado',
  'LOGIN_HIDE_ME'				=> 'Ocultar sesión',
  'LOGIN_ME_IN'					=> 'Iniciar sesión',
  'SIGN_IN_ACCOUNT'				=> 'Entra en tu cuenta',
  'CREATE_ACCOUNT'				=> 'Crear una cuenta',
  'GO_TO_SEARCH_ADV'			=> 'Volver a la búsqueda avanzada',
  
  'CREATE_ACCOUNT_DISABLED'		=> 'Registros cerrado',
  'REGISTRATION_DISABLED'		=> 'Parece que el registro de nuevos usuarios están cerrados en este momento. También podría ser una medida temporal. Si cree que esto es un posible error, por favor contacte con el webmaster, he informe de esto. Pedimos disculpas por las molestias que esto pudo haber causado. Nuestra política de privacidad y condiciones de uso están disponibles a continuación.',
  'CONTACT_WEBMASTER'			=> 'Contactar con el Webmaster',
  'CONFIRM_QA_EXPLAIN_ALT'		=> 'Demuestra que no eres un robot y contesta esta pregunta',
  
  'PLUPLOAD_PLACE_INLINE'		=> 'En línea',
  'PLUPLOAD_DELETE_FILE'		=> 'Borrar',


  'REG_CREATING'        		=> 'Creando Perfil... ',
  'LOADING'        				=> 'Cargando... ',
  'SAVING'        				=> 'Guardando... ',
  'CANCELLING'        			=> 'Cancelando... ',
  'SENDING'        				=> 'Enviando... ',
  'SEARCHING'        			=> 'Buscando... ',
  'LOADING_LOG_IN'				=> 'Identificándose... ',
  'FILE_UPLOADING'				=> 'Subiendo... ',
  'CASTING_VOTE'        		=> 'Enviando voto... ',
  'LOADING_FORM'        		=> 'Cargando formulario... ',


  'MEMBERLIST_P_JOINED'			=> 'Ingresó en el Foro',
  'MEMBERLIST_P_EXPL'			=> 'Esto es cuando se unió al foro',
  'MEMBERLIST_P_DATE_EXPL'		=> 'Esta fue la última vez que visitó el foro',
  'SPAMMER'                     => 'Spammer',
  'SPAMMER_PLACEHOLDER'			=> '¡No puede hacer SPAM en mi foro y salir de aquí sin más!',
  'MARK_PLACEHOLDER'			=> 'Marque su elección',
  'INFO_BOX'      			    => 'Información:',
  'USER_REMOVE_PLACEHOLDER'		=> 'Clic para eliminar el usuario',
  'GROUP_REMOVE_PLACEHOLDER'	=> 'Clic para eliminar el grupo',
  'EDIT_LINK_PLACEHOLDER'       => 'He olvidado poner BBCode en mis enlaces',
  'POST_IT_UP_PLACEHOLDER'      => '¡Escriba algo aquí!',

  'UCP_REG_USR_PLACEHOLDER'      => 'Por ejemplo, Antonio Pio',
  'UCP_REG_EMAIL_PLACEHOLDER'    => 'Por ejemplo, jaime@mail.com',
  'UCP_REG_PSWD_PLACEHOLDER'     => 'Por ejemplo, ASDFas@df123',
  'UCP_REG_CTCHA_PLACEHOLDER'  => 'Por ejemplo, Azul cielo',
  'SEARCH_USR_PLACEHOLDER'       => 'Por ejemplo, phpBB España',

  'MESSAGE_ENTER_PLACEHOLDER'	=> 'Introduzca su mensaje aquí...',
  'FILE_COMMENT_PLACEHOLDER'    => 'Un comentario sobre su archivo',
  'HEIGTH_PLACEHOLDER'			=> 'altura',
  'WIDTH_PLACEHOLDER'			=> 'anchura',
  'UCP_OCCUPATION_PLACEHOLDER'	=> 'Describa brevemente su ocupación...',
  'UCP_INTERESTS_PLACEHOLDER'	=> 'Describa sus intereses...',
  'SOFT_DELETE_PLACEHOLDER'		=> 'Introduzca la razón si lo desea...',
  'ADD_DESCRIPTION'				=> 'Añadir descripción',
  
  'FILE_SELECT'       			=> 'Seleccionar archivo',
  'FILE_CHANGE'					=> 'Cambiar',
  'SELECT_IMAGE'				=> 'Seleccionar imagen',
  'NOTE'						=> 'Nota',
  'EDIT_DRAFT'       			=> 'Editar borrador',
  'PM_BALOON_NOTIFICATION'      => 'Activar la notificación estilo de globo para el nuevo MP (mensaje privado)',
  'DAYS_AGO'					=> 'Días atrás',
  'WORK_IN_PROGRESS'			=> 'Mantenimiento',
  'DISABLE_MESSAGE'				=> 'Foro no disponible',
  'DISABLE_RETURN'				=> 'Volver a la página índice',
  'BOARD_DISABLED_SHUFFLE'		=> 'Diviértete y baraja algunas letras :-)',
  'DISABLE_TEXT_TRY'			=> '¡Pruébalo tu mismo!',
  'DISABLE_TEXT_TYPE'			=> 'Escribe cualquier cosa y pulsa Enter...',
  
  'GRAVATAR_EXPLAIN'			=> 'Si un <a href="//en.gravatar.com/" target="_blank">GRAVATAR</a> esta asociado a su dirección de correo electrónico, se puede establecer como predeterminado.',
  'GRAVATAR_EXPLAIN_CONFIRM'	=> 'Por favor, confirma aquí tu dirección de correo electrónico',

  'DELETE_POLL'       			=> 'Borrar encuesta',
  'POLL_DELETE_HELPER'       	=> '(Esto borra sólo la encuesta) marcar y enviar',
  'JUMP_TO_POST'       			=> 'Ir al mensaje',
  'JUMP_SELECT_FORUM'           => 'Seleccione el foro a saltar',
  'JUMP_TO_PAGE_NUMBER'         => 'Saltar a la página #',
  'VIEW_FIRST_UNREAD'           => 'Ver primer mensaje no leído',
  'BOOKMARK_TOPIC_REMOVE'		=> 'Eliminar Favorito',
  
  'NEW_MESSAGES'				=> 'Nuevos mensajes',
  'YOU_HAVE'					=> 'Tiene',
  'AND'        					=> 'y',
  'HELLO'                       => 'Hola',
  'DISMISS_PM'       			=> 'Aplazar 5 min.',
  'READ_NOW'      				=> 'Leer ahora',
  'PRIVATE_MESSAGE_NEW'			=> 'nuevo mensaje privado',
  'PRIVATE_MESSAGE_UNREAD'		=> 'mensaje privado no leído',
  'NO_PMS_INFO'					=> '¡Todo listo! ¿Escribir un nuevo MP?',
  
  'DATES'						=> 'FECHA',
  'POWERED'       				=> 'Desarrollado por',
  'HANDCRAFTED'					=> 'Hecho a mano con',
  'BY'       					=> 'Por',
  
  'RECENT_TOPICS'				=> 'Temas Recientes',
  'TWITTER'						=> 'Twitter',
  'FAVORITES'					=> 'Favoritos',
   
  'GALLERY'						=> 'Galería',
  'CHAT'       					=> 'Chat',
  'ABOUT'       				=> 'Sobre Nosotros',
  'ABOUT_PART_ONE'				=> 'BBOOTS&#8482; Es el primer y único estilo totalmente Responsive para phpBB&reg; Tiene un diseño limpio y fresco, y se ve impresionante en todos los navegadores y dispositivos.',
  'ABOUT_PART_TWO'				=> 'Utiliza un formato base de Bootstrap que ha sido largamente esperado y seguro que sorprenderá al Club de Fans de phpBB.',
  'ABOUT_PART_THREE'			=> 'El estilo Responsive no oficial',
  'BB'							=> 'B',
  'BOOTS'						=> 'BOOTS',
  'BBOOTS'						=> 'BBOOTS',
  
  'BBOOTS_VERSION'				=> '<a href="http://www.sitesplat.com/phpBB3/">BBOOTS</a>',
  'U_LOGOUT'					=> 'Salir',

  'SITESPLAT_STATISTICS'		=> 'Estadísticas',
  'SITESPLAT_SEE_DETAILS'		=> 'Ver detalles',
  'SITESPLAT_SEARCH_LAST_DAY'	=> 'Últimos mensajes en 24h',
  'SITESPLAT_SEARCH_WEEK'		=> 'Últimos mensajes en 7 días',
  
  'SITESPLAT_TOTAL_POSTS'		=> 'Mensajes totales',
  'SITESPLAT_TOTAL_TOPICS'	    => 'Temas totales',
  'SITESPLAT_TOTAL_USERS'		=> 'Usuarios totales',
  'SITESPLAT_NEWEST_MEMBER'		=> 'Nuevo usuario',
  'SITESPLAT_USERS_ONLINE'		=> 'Usuarios conectados',
  'SITESPLAT_MOST_USERS_ONLINE'	=> 'Mayor cantidad de usuarios conectados',
  'SITESPLAT_BIRTHDAYS'	        => 'Cumpleaños hoy',
  
  'BOOTSTRAP_VERSION'			=> '3.3.6',
  'FLATBOOTS'	                => 'FLATBOOTS',
  'CHANGE_AVATAR'	            => 'Cambiar avatar',
  'CHANGE_PASSWORD'				=> 'Cambiar contraseña',
  
  'ADMIN_TIPS'	                => 'Consejos &amp; Trucos para Administradores',
  'ADMIN_TIP_INTRO'	            => '¿Sabía que puede hacer su foro phpBB aún más seguro con unos sencillos pasos?',
  'ADMIN_TIP_ONE'	            => 'Mantenga su software actualizado.',
  'ADMIN_TIP_TWO'	            => 'Utilice siempre contraseñas seguras que contengan una secuencia aleatoria de letras, números y caracteres especiales.',
  'ADMIN_TIP_THREE'				=> 'Restringir el acceso a la carpeta admin...',
  'ADMIN_CHECK_IT_BTN'			=> 'Visite nuestros foros para saber más.',
  
  'USER_MINI_PROFILE'	        => 'Mini perfil del usuario',
  'USER_MINI_PROFILE_VIEW_FULL'	=> 'Ver perfil completo',
  'OFF_LINE'					=> 'Desconectado',
  'USER_STATUS'					=> 'Estado',
  'USER'						=> 'Usuario',
  'TITLE'						=> 'Título',
  'END_TIMELINE'				=> 'Fin de línea de tiempo',
  'MEMBERS'						=> 'Usuarios',
  'DRAFTS'						=> 'Borradores',
  'REPORTS'						=> 'Reportes',
  'MODERATOR_LOGS'				=> 'Registros de Moderador',
  'QUEUE'	                    => 'Cola',
  'LINKS'	                    => 'Enlaces',
  'TOPIC_PERMISSIONS'			=> 'Permisos del tema',
  'MODERATOR_OPTIONS'			=> 'Moderar',
  'PASSWORD_EXPLAIN_CONFIRM'	=> 'Asegúrese de que corresponde',
  'FORUM_REDIRECTS'				=> 'Redirecciones:',
  
  'FANCY_TOPICS_TITLE'			=> 'Temas recientes del foro',
  'POST_BY'	                    => 'Mensaje por',
  'REPLY_BY'	                => 'Respuesta por',
  'NO_REPLIES'	                => 'No hay respuestas',
  'READ_MORE'	                => 'Leer más',
  'RT_READ_MORE'				=> 'LEER MÁS',
  'VIEW_MORE_TOPICS'			=> 'VER MÁS TEMAS',
  'BACK_TO_START'				=> 'VOLVER A EMPEZAR',
  
  'TOGGLE_NAV'					=> 'Conmutación de Navegación',
  'NAVIGATION'	                => 'Navegación',
  
  'DEMO_LINK'					=> 'Enlace demo sin iconos',
  'DEMO_HEADER_MENU'			=> 'Ejemplo de intro del encabezado',
  
  'FLATBOOTS_INTRO'	            => 'Bootstrap Framework',
  'FLATBOOTS_EXPLAIN'	        => 'Más de una docena de componentes reutilizables construidos para proporcionar iconografía, menús desplegables, grupos de entrada, navegación, alertas, y mucho más ...',
  'CALL_TO_ACTION_FOOTER'		=> '¡Elija que Addons deben funcionar, utilice sólo lo que realmente necesita!',
  'PURCHASE_NOW_BTN'			=> 'Comprar ahora',
  'FLATBOOTS_ABOUT_PART_ONE'	=> '¿Por qué conformarse con menos cuando puede tener más? No deje que otros autores le engañe con marketing de palabras clave vacías. FLATBOOTS es lo que se merece. Construido al último detalle, construido desde cero, nada menos.',
  'FLATBOOTS_ABOUT_TITLE'	    => 'Construido para durar',
  'DMCA'	                    => 'DMCA',
  'TERMS'						=> 'Condiciones',
  'ADVERTISE'					=> 'Publicidad',
  'SITESPLAT'					=> 'SiteSplat',
  'SITESPLAT_URL'	            => '<a href="http://sitesplat.com" class="btn btn-default" target="blank">SiteSplat.com</a>',
  'JOIN_US_TWITTER'				=> 'Nuestro Twitter',
  'TWEET_EXAMPLE'				=> '¡BBOOTS alcanza más de 1000 ventas! Gracias a todos por el apoyo a este proyecto, y por contribuir a la construcción la Comunidad SiteSplat. ¿Qué sigue? estad atentos y seguirme en Twitter: <a href="#">http://bit.ly/000fefs</a>',

));
