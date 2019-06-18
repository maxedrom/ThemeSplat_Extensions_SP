<?php
/**
* @maxedrom [Español]
* @package BBdonations
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
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
	'ACP_DONATIONS'  				=> 'BBDonations',
	'ACP_DONATIONS_EXPLAIN'			=> 'Configuración de donaciones para tu sitio web. Configure los ajustes deseados, complete la información de PayPal y la información de Bitcoin para maximizar los resultados de su donación.',
	'ACP_DONATIONS_INDEX_TITLE'		=> 'Configurar',
	'ACP_DONATIONS_PAYPAL_EMAIL'	=> 'Mail de Paypal',
	'ACP_DONATIONS_PAYPAL_EXPLAIN'	=> 'Ingrese su correo electrónico de PayPal aquí. (déjelo vacío para deshabilitar el método de donación) Es posible que deba usar la cuenta comercial de PayPal ya que el sistema de IPN puede requerirlo para que funcione correctamente.<br /> Para mas información visite: <a href="https://developer.paypal.com/docs/classic/ipn/integration-guide/IPNSetup/#id089EG030E5Z">PayPal IPN setup</a>',
	'ACP_DONATIONS_OPTIONS'			=> 'Opciones de Donaciones',
	'ACP_DONATIONS_OPTIONS_EXPLAIN'	=> 'Las siguientes opciones se encuentran disponibles: <br /> <strong>Modo Sandbox:</strong> Permite el Modo SandBox (para Bitcoin y PayPal) el cual sirve para realizar tests de donaciones. Tenga en cuenta que el sandbox de Coinbase no es confiable y, por lo tanto, se debe utilizar una cuenta real para ejecutar pruebas. La forma más fácil de probarlo es usar una aplicación para teléfonos inteligentes y donar una y otra vez entre su foro y la aplicación. Use la siguiente aplicación para teléfonos android: <a href="https://airbitz.co/af/DJM" target="blank">AirBitz</a> <br /> <strong>Activar Mensaje:</strong> Esta opción permite que el usuario pueda dejar un mensaje corto con la doción realizada <br /> <strong>Mostrar Donadores:</strong> Activa una lista de los Donadores Recientes',
	'ACP_DONATIONS_SANDBOX'			=> 'Modo Sandbox',
	'ACP_DONATIONS_MESSAGE'			=> 'Activar Mensaje',
	'ACP_DONATIONS_LIST'			=> 'Mostrar Donadores',
	'ACP_DONATIONS_BITCOIN'			=> 'Bitcoin',
	'ACP_DONATIONS_BITCOIN_EXPLAIN' => 'Ingrese su API Key y la KEY secreta de coinbase (dejelo vacío para desactivar este metodo de donación). <br /> Siga <strong>EXACTAMENTE</strong> (los links se abriran en una nueva ventana) los pasos para activar correctamente la donación de Bitcoin: <br /><strong>PASO1:</strong> <a href="https://www.coinbase.com/join/54c7b129d41344b592000006" target="_blank">Registre una Cuenta de Coinbase</a> <br /><strong>PASO2:</strong> <a href="https://www.coinbase.com/merchant_profiles" target="_blank">Configure el perfil de la página del Comerciante.</a> <br /><strong>PASO3:</strong> <a href="https://www.coinbase.com/merchant_settings" target="_blank">Configure las Opciones del Comerciante</a> <br /><strong>PASO4:</strong> En la opción de URL de notificación en Configuración de comerciante (PASO 3), ingrese la URL de su tablero de esta forma<br /> <code>http://www.my_board_url.com/app.php/donation/index.html?mode=notify_bitcoin</code> (Donde "my_board_url.com" sea la URL de su sitio) <br /><strong>PASO5:</strong>Registre la Aplicacion de "Oauth" aquí: <a href="https://www.coinbase.com/settings/api" target="_blank">Aplicació de Autorización</a>. Clic en el botón "+ New API key" Luego en "Accounts" Clic en "My Wallet (Primary)", debajo de "Permissions" Clic en "select all" y para finalizar debajo de "Notifications" ingrese la misma URL como se describio en el PASO4. Ahora haga clic en el botón "Crear" y obtenga su clave API y su Clave Secreta API para ingresar aquí a su derecha. <br /><strong>PASO6:</strong> Felicidades Buena suerte con tu campaña de donaciones.!',
	'ACP_DONATIONS_BITCOIN_KEY'		=> 'API Key',
	'ACP_DONATIONS_BITCOIN_SECRET'	=> 'API Secret',
	'ACP_DONATIONS_AMOUNTS'			=> 'Cantidad',
	'ACP_DONATIONS_TEXT'			=> 'Texto',
	'ACP_DONATIONS_SYMBOL'			=> 'Símbolo',
	'ACP_DONATIONS_ADD_ROW'			=> 'Añadir otra Fila',
	'ACP_DONATIONS_DELL_ROW'		=> 'Eliminar Ultima Fila',
	'ACP_DONATIONS_AMOUNTS_EXPLAIN'	=> 'Las Siguientes Opciones estan disponibles: (Utilize "%s" como un marcador de posición para completar automáticamente la cantidad y la moneda en su campo de texto.) <br /><strong>Cantidad:</strong> Ingrese la cantidad de la Donación <br /><strong>Texto:</strong> Ingrese su texto personalizado para el objetivo de cantidad de donación <br /><strong>Símbolo:</strong> Selecciones un simbolo font awesome para cada uno de los objetivos ingresados.', 
	'ACP_DONATIONS_STATUS'			=> 'Estado',
	'ACP_DONATIONS_GROUP'			=> 'Auto Group',
	'ACP_DONATIONS_GROUP_EXPLAIN'	=> 'The following options are available for the AutoGroup settings: <br /><strong>Days:</strong> time expressed in days for the user to stay on X group. (No time disables fallback for this group) <br /> <strong>Amount:</strong> min currency (donation) value for the AutoGroup to be triggered. (0 disables AutoGroup) <br /><strong>Group:</strong> Group for the user to be moved into when the min. amount is triggered <br /><strong>Group Default:</strong> Set the group to default for the user (Checkmark to set as default)',
	'ACP_DONATIONS_GROUP_DEF'		=> 'Group default',
	'ACP_DONATIONS_GROUPS'		    => 'Group',
	'ACP_DONATIONS_STATS'  			=> 'Statistics',
	'ACP_DONATIONS_TIME'			=> 'Date',
	'ACP_DONATIONS_TOTAL'			=> 'Sum of all donations',
	'ACP_DONATIONS_ADDRESS'			=> 'Donator\'s address',
	'ACP_DONATIONS_COUNTRY'			=> 'Donator\'s country',
	'ACP_DONATIONS_TRANSACTIONS'  	=> 'Transactions',
	'ACP_DONATIONS_FALLBACK'  		=> 'Fallback Group',
	'ACP_DONATIONS_FALLBACK_EXPLAIN'=> 'A Group fallback for the user to go back to if the time (in Days) is exceeded.<br />No group disables this function.',
	'ACP_DONATIONS_AMOUNT'			=> 'Amount',
	
	'ACP_DONATIONS_DAY_STAY'		=> 'Day to stay in this group',
	'ACP_DONATIONS_CHANGE_STATUS'	=> 'Change status',
	'ACP_DONATIONS_MAX_AMO'			=> 'Max amount for this group',
	
	'ACP_DONATIONS_DAYS'			=> 'Days',
	'ACP_DONATIONS_TRANSACTION'		=> 'Transaction id',
	'ACP_DONATIONS_CURRENCY'		=> 'Currency code',
	'ACP_DONATIONS_CURRENCY_EXPLAIN'=> 'Currency code follows the allowed <a href="https://developer.paypal.com/docs/classic/api/currency_codes/" target="_blank">Paypal Multiple Currencies</a> standards. <br /> Make sure the currency you are going to use is enabled on your PayPal account. <br />If the currency is not supported on your PayPal acccount the transactions will be returned as "Not verified" or "Pending".',
	'ACP_DONATIONS_USERNAME'		=> 'Username',
	'DONATIONS_NOTICE'				=> '<div class="phpinfo"><p>The settings for this extensions are in <strong>%1$s &#187; %2$s &#187; %3$s</strong>.</p></div>',
	'SS_HELPER_NOTY'				=> 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	
	
	'SITESPLAT_COM'		        => 'http://sitesplat.com',
	'SITESPLAT_COPY'		    => '&#169; SiteSplat',
	'LICENSE_INFO'		        => 'Proprietary - SiteSplat All rights reserved',
	'EXTENSION_DEVELOPER'	    => 'Developer',
	'ACP_NOTICE_CLOSE'			=> 'Close',
	'ACP_DONATIONS_VERSION'     => '1.0.5',
	'ACP_LOADING'		        => 'Loading... Hold on',
	
	'EXT_BBD_DESCRIPTION_PAGE'	=> 'A kick-ass donation extension for the phpBB board running sitesplat themes. Many modern and useful optiions included PayPal IPN and Bitcoin API.',
	'EXT_BBD_TASKS_1'			=> 'AutoGroup',
	'EXT_BBD_TASKS_2'			=> 'Fully editable donation scopes',
	'EXT_BBD_TASKS_3'			=> 'PayPal IPN',
	'EXT_BBD_TASKS_4'			=> 'Bitcoins support',
	'EXT_BBD_TASKS_5'			=> 'phpBB 3.2 ready',
	'EXT_BBD_TASKS_6'			=> 'Checkout the other premium compatible addons on <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	
));

// Description of Donations extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Description',
	'DESCRIPTION_NOTICE'	=> 'Extension note',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'	=> 'Overview of donations',
			'DESCRIPTION_2'	=> 'Paypal / Bitcoins API',
			'DESCRIPTION_3'	=> 'Autogroups',
			'DESCRIPTION_4'	=> 'Set back to standard group after x amount of time',
			'DESCRIPTION_5'	=> 'Guest can also donate',
		),
		'note' => array(
			'NOTICE_1'		=> 'phpBB 3.2 ready'
		)
	)
));
