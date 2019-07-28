<?php
/**
*
* BBcodeOrder+
* @copyright (c) 2016 SiteSplat All rights reserved
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
	'BBCODEORDER_EXPLAIN'		=> '<hr><h3>Uso y trucos:</h3> <br /><strong>BBCode por defecto:</strong> Los BBCodes predeterminados tienen nuevas opciones, como la posibilidad de clasificarse u ocultarse. Lamentablemente, no pueden editarse directamente desde aquí, como los BBCodes personalizados.<br /><strong>BBCodes personalizados:</strong> Los BBCodes personalizados también se puede ordenar, tener ícono personalizado, establecer permisos de grupos, etc. <br /><strong>Uso General:</strong> Puede añadir “separadores”, que básicamente dividen o separan grupos de botones. Están marcados como “-” y puede añadir tantos como quiera, también puede moverlos/ordenarlos. (Puede arrastrar y soltar también). <br /> Puede crear diferentes grupos de botones, o botones individuales. <br />También hay un divisor especial marcado como “--”, que marca el inicio del cuadro de selección en el Front-End. <br />Cualquier BBCode ordenado debajo de este divisor especial se mostrará en la opción de cuadro de selección, incluso los BBCodes por defecto. :-). El color y la fuente son las excepciones, porque no puede colocar una casilla de selección, en una casilla de selección. <br /> El Flash y el tamaño de fuente suelen ser un desorden, en el mejor de los casos, sería mejor tenerlos ocultos para tener más espacio para otros elementos.<br /> <a href="http://sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=11" target="blank" title="">Smart Snappy Reply</a> es perfectamente compatible también.',
	'NEW_DIVIDER'				=> 'Añadir nuevo separador',
	'HIDE'						=> 'Ocultar',
	'SHOW'						=> 'Mostrar',
	'BBCODE_HIDDEN'				=> 'El BBCode ha sido ocultado.',
	'BBCODES_ORDERED'			=> 'El orden del BBCode ha sido actualizado.',
	'BBCODES_DIVIDERS_PROBLEM'	=> 'No puede posicionar el separador después del inicio de la caja de selección.',
	'BBCODE_ICON'				=> 'Icono',
	'BBCODE_ICON_EXPLAIN'		=> 'Icono <a href="http://fontawesome.io/icons/">Font Awesome</a> sin el prefijo fa-',
	'BBCODE_GROUP'				=> 'Gestionar que grupos pueden usar este BBCode',
	'BBCODE_GROUP_EXPLAIN'		=> 'En caso de no seleccionar ningún grupo, todos los usuarios podrán usar este BBCode. Use CTRL+CLIC (o CMD+CLIC en Mac) para seleccionar/eliminar selección de más de un grupo.',
	'BBCODEORDER_IMGUR_UPLOAD'	=> 'Clic para subir a IMGUR',
	
	'BBCODE_B'						=> 'Negrita',
	'BBCODE_I'						=> 'Cursiva',
	'BBCODE_U'						=> 'Subrayar',
	'BBCODE_L'						=> 'Lista',
	'BBCODE_O'						=> 'List Ordenada',
	'BBCODE_LISTITEM'				=> 'Artículo de lista',
	'BBCODE_C'						=> 'Código',
	'BBCODE_Q'						=> 'Citar',
	'BBCODE_IMG'					=> 'Imagen',
	'BBCODE_URL'					=> 'URL',
	'BBCODE_FLASH'					=> 'FLASH',
));
