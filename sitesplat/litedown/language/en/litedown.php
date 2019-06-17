<?php
/**
*
* BBmarkdown
* @copyright (c) 2015 SiteSplat All rights reserved
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
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
$lang = array_merge($lang, array(
	'SHOW_BBCODE_BUTTONS'	        => 'Show BBCode buttons',
	'SHOW_LITEDOWN_BUTTONS'	        => 'Show Markdown buttons',
	
	'LITEDOWN_BTN_HELPER'	        => 'Styling with Markdown is supported',
	'LITEDOWN_MDL_TITLE'	        => 'Markdown Help',
	'LITEDOWN_MDL_TITLE_BBCHAT'	    => 'BBchat Markdown Help',
	
	'LITEDOWN_MDL_TH_MD'	        => 'Markdown',
	'LITEDOWN_MDL_TH_RSL'	        => 'Result',
	'LITEDOWN_MDL_TH_SRT'	        => 'Keyboard Shortcut',
	
	'LITEDOWN_MDL_TD_MD_TX'	        => '**text**',
	'LITEDOWN_MDL_TD_RSL_TX'	    => '<strong>Bold</strong>',
	'LITEDOWN_MDL_TD_SRT_TX'	    => '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">B</span>',
	
	'LITEDOWN_MDL_TD_MD_EM'	        => '*text*',
	'LITEDOWN_MDL_TD_RSL_EM'	    => '<em>Emphasize</em>',
	'LITEDOWN_MDL_TD_SRT_EM'	    => '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">I</span>',
	
	'LITEDOWN_MDL_TD_MD_STRK'	    => '~~text~~',
	'LITEDOWN_MDL_TD_RSL_STRK'	    => '<del>Strike-through</del>',
	
	'LITEDOWN_MDL_TD_MD_LNK'	    => '[title](https://)',
	'LITEDOWN_MDL_TD_RSL_LNK'	    => '<a href="#">Link</a>',
	'LITEDOWN_MDL_TD_SRT_LNK'	    => '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">L</span>',
	
	'LITEDOWN_MDL_TD_MD_COD'	    => '`code`',
	'LITEDOWN_MDL_TD_RSL_COD'	    => '<code>Inline Code</code>',
	'LITEDOWN_MDL_TD_SRT_COD'	    => '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">C</span>',
	
	'LITEDOWN_MDL_TD_MD_LNK_IMG'	=> '![alt](https://)',
	'LITEDOWN_MDL_TD_RSL_LNK_IMG'	=> 'Image',
	'LITEDOWN_MDL_TD_SRT_LNK_IMG'	=> '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">G</span>',
	
	'LITEDOWN_MDL_TD_MD_LST_ITEM'	=> '* item',
	'LITEDOWN_MDL_TD_RSL_LST_ITEM'	=> 'List',
	'LITEDOWN_MDL_TD_SRT_LST_ITEM'	=> '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">U</span>',
	
	'LITEDOWN_MDL_TD_MD_OL'	        => '1. item',
	'LITEDOWN_MDL_TD_RSL_OL'	    => 'Ordered List',
	'LITEDOWN_MDL_TD_SRT_OL'	    => '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">O</span>',
	
	'LITEDOWN_MDL_TD_MD_QTE'	    => '&gt; quote',
	'LITEDOWN_MDL_TD_RSL_QTE'	    => 'Blockquote',
	'LITEDOWN_MDL_TD_SRT_QTE'	    => '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">Q</span>',
	
	'LITEDOWN_MDL_TD_MD_HEDO'	    => '# Heading',
	'LITEDOWN_MDL_TD_RSL_HEDO'	    => 'H1',
	
	'LITEDOWN_MDL_TD_MD_HEDT'	    => '## Heading',
	'LITEDOWN_MDL_TD_RSL_HEDT'	    => 'H2',
	'LITEDOWN_MDL_TD_SRT_HEDT'	    => '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">H</span>',
	
	'LITEDOWN_MDL_TD_MD_HEDTH'	    => '### Heading',
	'LITEDOWN_MDL_TD_RSL_HEDTH'	    => 'H3',
	'LITEDOWN_MDL_TD_SRT_HEDTH'	    => '<span class="markdown-kbd">Ctrl</span>/<span class="markdown-kbd">&#8984;</span> + <span class="markdown-kbd">H</span> (x2)',
	
	'LITEDOWN_MDL_TD_MD_TABLE'	    => 'Pipe tables',
	'LITEDOWN_MDL_TD_RSL_TABLE'	    => '<pre><code><span class="hljs-string">| Header 1 | Header 2 |</span>
<span class="hljs-string">|----------|----------|</span>
<span class="hljs-string">| Cell 1   | Cell 2   |</span>
</code></pre>',
	'LITEDOWN_MDL_TD_SRT_TABLE'	    => 'n/a',
	
	'LITEDOWN_MDL_TD_MD_TABLE_CNT'	=> 'Pipe tables text allign',
	'LITEDOWN_MDL_TD_RSL_TABLE_CNT'	=> '<pre><code>| <span class="hljs-constant">Left </span>| <span class="hljs-constant">Center </span>| <span class="hljs-constant">Right </span>|
|<span class="hljs-symbol">:-----|</span><span class="hljs-symbol">:------</span><span class="hljs-symbol">:|------</span><span class="hljs-symbol">:|</span>
|   x  |    x   |   x   |
</code></pre>',
	'LITEDOWN_MDL_TD_SRT_TABLE_CNT'	=> 'n/a',
	
	'LITEDOWN_MDL_TD_MD_ENT'	    => 'HTML entities & ASCII',
	'LITEDOWN_MDL_TD_RSL_ENT'	    => 'entities such as &amp;hearts; &hearts; etc (list: <a href="https://www.freeformatter.com/html-entities.html" target="_blank">HTML entities</a>)',
	'LITEDOWN_MDL_TD_SRT_ENT'	    => 'n/a',
	
	'LITEDOWN_MDL_EXTRA_HLPER'	    => '<br><p>For further Markdown syntax reference: <a href="https://daringfireball.net/projects/markdown/syntax" target="_blank">Markdown Documentation</a></p>',
	'LITEDOWN_MDL_CLOSE'	        => 'Close',
));