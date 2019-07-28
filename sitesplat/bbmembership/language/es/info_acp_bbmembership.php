<?php
/**
*
* BBmembership extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* @Spanish translation - ThE KuKa - http://www.phpbb-es.com
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_BBMEMBERSHIP_TITLE'				=> 'BBMembership',
	'ACP_BBMEMBERSHIP_EXPLAIN'				=> 'Configure sus afiliaciones, se puede añadir hasta 4 afiliaciones con diferentes paquetes. El precio de cada paquete debería ser diferente. PayPal y BBPuntos (factor de 100) son los dos sistemas de pago permitidos. Configure los grupos, y los permisos de grupo para hacer acceder a las afiliaciones a diferentes áreas del foro, por ejemplo.',
	'ACP_BBMEMBERSHIP_SANDBOX'  			=> 'PayPal sandbox',
	'ACP_BBMEMBERSHIP_SANDBOX_EXPLAIN'  	=> '<a href="https://developer.paypal.com/" target="_blank">More info</a>',
	
	'ACP_BBMEMBERSHIP_CLUBMODE'				=> 'Modo Club',
	'ACP_BBMEMBERSHIP_CLUBMODE_EXPLAIN'		=> 'Se le permitirá al usuario registrarse, pero sólo podrá acceder al foro con un paquete de afiliación',
	'ACP_BBMEMBERSHIP_PAYPAL_EMAIL'			=> 'E-Mail de PayPal',
	'ACP_BBMEMBERSHIP_PAYPAL_EMAIL_EXPLAIN'	=> 'Correo electrónico de PayPal o correo electrónico de SandBox PayPal si está usando el modo sandbox mode para realizar pruebas.',
	'ACP_BBMEMBERSHIP_BBPOINTS'				=> 'BBPuntos',
	'ACP_BBMEMBERSHIP_BBPOINTS_EXPLAIN'		=> 'Permite a los usuarios comprar afiliaciones con <a href="http://www.sitesplat.com/phpBB3/marketplace.php" target="_blank">BBPuntos</a><br />  La multiplicación de los puntos requeridos para cada paquete es (factor de 100). Por ejemplo: Moneda $5 significa 500 puntos, $10 significa 1000 y así sucesivamente.',
	
	'ACP_BBMEMBERSHIP_LEVELS'				=> 'Niveles de Afiliación',
	'ACP_BBMEMBERSHIP_LEVELS_EXPLAIN'		=> 'Establecer los niveles de afiliación aquí, min. cantidad para ingresar, tiempo de caducidad en días, descripción del paquete, grupo y opcionalmente establecer como predeterminado.<br /> Establecer el tiempo de expiración hasta:<br />  &nbsp;&nbsp;&nbsp;<strong>0</strong> Nunca expira.  Afiliación ilimitada <br /> &nbsp;&nbsp;<strong>-1</strong> pase de 5 minutos con fines de prueba (Por ejemplo con PayPal sandbox)<br /> &nbsp;&nbsp;&nbsp;<strong>1</strong> Establecer los días con 1 o más. Por ejemplo, 2 es igual a 2 días, etc. <br />NO utilice decimales. Marque la casilla de verificación de la opción Ocultar, para ocultar el paquete de afiliación de la página de afiliados.',

	'ACP_BBMEMBERSHIP_AMT'					=> 'Cantidad',
	'ACP_BBMEMBERSHIP_EXPIRE'				=> 'Expira',
	'ACP_BBMEMBERSHIP_PACKAGE' 				=> 'Paquete',
	'ACP_BBMEMBERSHIP_GROUP'				=> 'Seleccionar grupo',
	'ACP_BBMEMBERSHIP_DEFAULT'				=> 'Por defecto',
	'ACP_BBMEMBERSHIP_HIDE'					=> 'Ocultar',
	'ACP_BBMEMBERSHIP_CURRENCY'				=> 'Código de moneda',
	'ACP_BBMEMBERSHIP_CURRENCY_EXPLAIN'     => 'Códigos de monedas permitidos <a href="https://www.paypal.com/multicurrency" target="_blank">Paypal Multiple Currencies</a>. <br /> Asegúrese de que la moneda que va a utilizar está activada en su cuenta PayPal. Si la moneda no es compatible con tu cuenta de PayPal las transacciones serán devueltos como "No verificado" ',
 
    'ACP_BBMEMBERSHIP_FLAGS'			    => 'Banderas PayPal',
	'ACP_BBMEMBERSHIP_FLAGS_EXPLAIN'		=> 'Si una transacción se marca como <span class="label label-danger">No verificado</span> se puede cambiar la verificación haciendo clic en la bandera y será conmutado como <span class="label label-success">Completado</span>. Esto también moverá automáticamente al usuario, al grupo previsto.<br /> Por favor, asegúrese de verificar la transacción en su cuenta de PayPal, si el estado de la transacción no cambia automáticamente en 24 horas, puede decidir forzar un estado "Completado".',
 
	'ACP_BBMEMBERSHIP_SYNC'					=> 'Sincronizar los niveles de paquetes de sus miembros',
	'ACP_BBMEMBERSHIP_SYNC_EXPLAIN'			=> 'Sincronizar los niveles de paquetes de sus miembros y grupos manualmente<br />Instalar la extensión <a href="https://github.com/ForumHulp/cronstatus" target="_blank">Cron Status</a> para comprobar si el trabajo del cron se ejecuta correctamente.',
	'LAST_MEMBERSHIP_CHECK'					=> 'La última sincronización de:',
 
	'ACP_BBMEMBERSHIP_TRANSACTIONS'			=> 'transacciones',
	'ACP_BBMEMBERSHIP_TOTAL'				=> 'Cantidad total',
	'ACP_BBMEMBERSHIP_ADDRESS'				=> 'dirección',
	'ACP_BBMEMBERSHIP_COUNTRY'				=> 'país',
	'ACP_BBMEMBERSHIP_TRANSACTION_ID'		=> 'ID de la transacción',
	'ACP_BBMEMBERSHIP_PAY_STATUS'			=> 'Estado del pago',
	'ACP_BBMEMBERSHIP_EXPIRED'				=> 'Expirado',
	'ACP_BBMEMBERSHIP_TIME'					=> 'Fecha y hora del pago',
	
	'ACP_BBPOINTS_NOTICE_CLOSE'				=> 'Cerrar',
	'BBPOINTS_NOTICE'						=> 'La extensión <a href="http://www.sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=22"><strong>BBPuntos</strong></a> no está instalada, NO puede usar el sistema de Carro de BBPuntos.',

	'BBMEMBERSHIP_NOTICE'					=> '<div class="attach-image"><p>Settings for this extension are in <strong>%1$s » %2$s » %3$s</strong>. <br />Setup your memberships and packages first, add PayPal and optionally enable the BBpoints extension for extra functionality.</p></div>',
	
	
	'BBMEMBERSHIP_DESCRIPTION'				=> 'Permite a su foro ejecutar un verdadero sistema de afiliación. Opcionalmente, puede hacer el foro como club privado disponible sólo para usuarios que han pagado. Muchas características únicas, se incluye la posibilidad de pagar por el número de miembros con BBPuntos.',
	'BBMEMBERSHIP_DEVELOPERS'				=> 'Desarrolladores',
	'BBMEMBERSHIP_TASKS_1'					=> 'Verdadero sistema de miembros',
	'BBMEMBERSHIP_TASKS_2'					=> 'Entrada PayPal y BBPuntos',
	'BBMEMBERSHIP_TASKS_3'					=> 'Modo CLub para foros privados',
	'BBMEMBERSHIP_TASKS_4'					=> 'La sincronización con las tareas cron y compatible con la extensión <a href="https://www.phpbb.com/customise/db/extension/cronstatus/">Cron Status</a>',
	'BBMEMBERSHIP_TASKS_5'					=> 'Funciones ampliables con BBPuntos para permitir que los miembros compren afiliaciones con puntos. Accede a la extensión premium de puntos <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'BBMEMBERSHIP_TASKS_6'					=> '¡Mucho más..!',
	
	'SITESPLAT_COM'		       		        => 'http://sitesplat.com',
	'SITESPLAT_COPY'		    			=> '&#169; SiteSplat',
	'LICENSE_INFO'		        			=> 'Propietario - SiteSplat Todos los derechos reservados',
	'EXTENSION_DEVELOPER'	    			=> 'Desarrollador',
	'ACP_BBMEMBERSHIP_NOTICE_CLOSE'			=> 'Cerrar',
	
	'ACP_BBMEMBERSHIP_VERSION'				=> '1.3.2',
    'ACP_LOADING'			    			=> 'Espere. Cargando...',
	
));
