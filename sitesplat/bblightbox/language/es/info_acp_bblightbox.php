<?php
/**
* @maxedrom [ESPAÑOL]
* BBlightbox
* @copyright (c) 2017 sitesplat.com All rights reserved
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Titles
	'ACP_BBLIGHTBOX'					=> 'BBlightBox',
	'ACP_BBLIGHTBOX_TITLE'				=> 'BBlightBox',
	'ACP_BBLIGHTBOX_EXPLAIN'			=> 'Bienvenido a tu nueva página de configuración del complemento Lightbox. Desde aquí puede cambiar la configuración en función del complemento elegido. Hay cuatro complementos en total. Dos son de JavaScript de vainilla y dos son dependientes de jQuery. <br /> ¡Elige el que mejor se adapte a tus necesidades!',
	'ACP_SETTINGS'						=> 'Configuración',

	// General settings
	'ACP_BBLIGHTBOX_GENERAL_OPTIONS'	=> 'Configuración General',
	'ACP_BBLIGHTBOX_ALLOW'				=> 'Permitir BBlightBox',
	'ACP_BBLIGHTBOX_BBCODE_ALLOW'		=> 'BBlightBox para [IMG] BBcodes',
	'ACP_BBLIGHTBOX_BBCODE_EXPLAIN'		=> 'Permitir BBlightBox para imagenes publicadas por default usando el BBcode IMG',
	'BBLIGHTBOX_CAPTIONS'				=> 'Subtítulos',
	'BBLIGHTBOX_CAPTIONS_EXPLAIN'		=> 'Permite subtítulos o comentarios de imágenes siempre que sea posible',
	'BBLIGHTBOX_SLIDE'					=> 'Presentación de diapositivas entre imágenes',
	'BBLIGHTBOX_SLIDE_EXPLAIN'			=> 'Permitir crear una presentación para el adjunto ([IMG] BBCode incluido) cuando sea posible. <br /> Esto depende del complemento elegido y presentará grupos de imágenes, por ejemplo, la publicación XX o las imágenes completas contenidas en el tema XX.',
	'QUOTED_IMAGES'						=> 'Cambiar el tamaño de las imágenes sitadas por el BBcode IMG',
	'QUOTED_IMAGES_EXPLAIN'				=> 'Permite cambiar el tamaño de las imágenes citadas (entre una cita posterior) publicadas a través del BBcode IMG',
	'RESIZED_IMAGES'					=> 'Cambiar el tamaño de imágenes que utilizan el BBcode IMG',
	'RESIZED_IMAGES_EXPLAIN'			=> 'Cambia el tamaño de las imágenes que utilizan el BBcode IMG como predeterminadas a xx píxeles. 0 para apagar',
	'ACP_BBLIGHTBOX_LAYOUT_PREVIEW'	    => 'Diseño de archivo adjunto',
	'COLUMN_LAYOUT'						=> 'Diseño de archivo adjunto',
	'COLUMN_LAYOUT_EXPLAIN'				=> 'Allow to choose a predefined post attachment layout to create a more modern and visually pleasing format. [IMG] BBcodes and in-line attchment are purposely not affected by this option.<small style="margin-top:-4px;margin-bottom: 14px;display: block;"><br /><strong>Standard layout:</strong> theme default. Images are displayed "as is". They can take up to the full post width.<br /><strong>Column:</strong> Images are neatly organized into a full column and all the same size.<br /><strong>Grouped (medium):</strong> images are grouped in medium size and with a masonry like positioning.<br /><strong>Grouped (small):</strong> Images are positioned the same as the grouped medium except just smaller in size.</small>',
	'1COLLUMS'							=> 'Standard layout',
	'2COLLUMS'							=> 'column',
	'3COLLUMS'							=> 'grouped (medium)',
	'4COLLUMS'							=> 'grouped (small)',

	// Plugins
	'ACP_BBLIGHTBOX_PLUGINS'			=> 'Plugins',
	'ACP_BBLIGHTBOX_PLUGIN'				=> 'Main LightBox plugin',
	'ACP_BBLIGHTBOX_PLUGIN_EXPLAIN'		=> 'Choose, which plugin you wish to use as a main lightbox. See more detail regarding the plugins here:<br /><a href="https://github.com/feimosi/baguetteBox.js" target="blank" title="">BaguetteBox (Vanilla JS)</a><br /><a href="http://fancyapps.com/fancybox/3/" target="blank" title="">Fancybox (jQuery)</a><br /><a href="https://github.com/nicolas-t/Chocolat/" target="blank" title="">Chocolat (jQuery)</a><br /><a href="http://jslightbox.felixhagspiel.de/" target="blank" title="">jsOnlyLightbox (Vanilla JS)</a><br /><a href="https://sachinchoolur.github.io/lightgallery.js/" target="blank" title="">lightgallery.js (Vanilla JS)</a>',

	// baguetteBox
	'BAGUETTEBOX_ANIMATION'				=> 'Animation',
	'SLIDEIN'							=> 'slideIn',
	'FADEIN'							=> 'fadeIn',
	'ZOOM'								=> 'Zoom',
	'ZOOM_IN_OUT'						=> 'Zoom in-out',
	'NONE'								=> 'none',

	// fancybox
	'FANCYBOX_PROTECT'					=> 'Protect images from download',
	'FANCYBOX_PROTECT_EXLPLAIN'			=> 'Prevent the download of the attached images when possible',
	'FANCYBOX_ANIMATIONEFFECT'			=> 'Animation effect',
	'FANCYBOX_ANIMATIONEFFECT_EXPLAIN'	=> 'Allow an animation effect when supported',

	// Chocolat
	'CHOCOLAT_ENABLEZOOM'				=> 'Enable zooming feature',
	'CHOCOLAT_ENABLEZOOM_EXPLAIN'		=> 'Allow zooming images feature when possible. Support touch screen.',

	// misc stuff ext detail etc
	'BBLIGHTBOX_DESCRIPTION'			=> 'A modern and power LightBox system for your forum post images',
	'BBLIGHTBOX_DEVELOPERS'				=> 'Developers',
	'BBLIGHTBOX_TASKS_1'				=> 'Touch screen support, keyboard navigation, responsive and more',
	'BBLIGHTBOX_TASKS_2'				=> 'Slideshow',
	'BBLIGHTBOX_TASKS_3'				=> 'Multi LightBox support',
	'BBLIGHTBOX_TASKS_4'				=> 'Common pages like UCP, MCP, Posting, viewtopic etc ready',
	'BBLIGHTBOX_TASKS_5'				=> 'Checkout the premium extensions on <a href="http://www.sitesplat.com/phpBB3/marketplace.php">sitesplat.com/marketplace.php</a>',
	'BBLIGHTBOX_TASKS_6'				=> 'Much more..!',
	
	'SITESPLAT_COM'		       		    => 'http://sitesplat.com',
	'SITESPLAT_COPY'		    		=> '&#169; SiteSplat',
	'LICENSE_INFO'		        		=> 'Proprietary - SiteSplat All rights reserved',
	'EXTENSION_DEVELOPER'	    		=> 'Developer',
	'ACP_BBLIGHTBOX_NOTICE_CLOSE'		=> 'Close',
	
	'ACP_BBLIGHTBOX_VERSION'			=> '1.0.1',
    'ACP_LOADING'			    		=> 'Hold On. Loading...',
	
	// Error/success messages
	'ACP_BBLIGHTBOX_SETTING_SAVED'		=> 'BBlightBox settings saved',
	'SS_HELPER_NOTY'	                => 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
	'BBLIGHTBOX_NOTICE'					=> '<div class="phpinfo"><p>The settings for this extension are in <strong>%1$s &#187; %2$s &#187; %3$s</strong>.</p></div>',
	'ACP_BBLIGHTBOX_INLINE_REMOVED'		=> 'All inline attachments has been moved down to the default attachment box under the post.',
	'ACP_BBLIGHTBOX_THUMBNAILS_REMOVED'	=> 'All thumbnails has been removed. All images are displayed at full size now.',
	'ACP_BBLIGHTBOX_THUMBS_REASSIGNED'	=> 'All thumbnails has been reassigned. All images that comply thumbnail settings in attachment settings are now displayed in thumbnail mode.',

	'BBLIGHTBOX_OPTIONS'				=> 'Synch Attachments Options',
	'REMOVE_INLINE_ATTACHMENTS'			=> 'Remove inline attachments',
	'REMOVE_INLINE_ATTACHMENTS_EXPLAIN'	=> 'Remove all inline attachments in all topics. This will NOT remove attachments, it will just move them back to default attachment box under the post.',
	'BBLIGHTBOX_PROGRESS'				=> 'Progress: %d out of %d.',
	'REMOVE_THUMBNAILS'					=> 'Remove thumbnails',
	'REMOVE_THUMBNAILS_EXPLAIN'			=> 'Remove all thumbnails, so that any existing images are not thumbs anymore.',
	'REASSIGN_THUMBNAILS'				=> 'Reassign thumbnails',
	'REASSIGN_THUMBNAILS_EXPLAIN'		=> 'Regenerate all thumbnails.',
));

// Description of Upload extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Description',
	'DESCRIPTION_NOTICE'	=> 'Extension note',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Up to 4 lightboxes',
			'DESCRIPTION_2'		=> 'Slideshow',
			'DESCRIPTION_3'		=> 'Captions',
		),
		'note' => array(
			'NOTICE_1'			=> 'all common pages like UCP, MCP, Posting, viewtopic etc ready',
			'NOTICE_2'			=> 'phpBB 3.2 ready.',
		)
	)
));
