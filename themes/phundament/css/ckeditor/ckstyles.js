/*
Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
CKEDITOR.addStylesSet( 'my_styles',
    [
    /* Block Styles */
    // These styles are already available in the "Format" combo, so they are
    // not needed here by default. You may enable them to avoid placing the
    // "Format" combo in the toolbar, maintaining the same features.
    /*{ name : 'Blue Title'		, element : 'h3', styles : { 'color' : 'Blue' } },
	{ name : 'Red Title'		, element : 'h3', styles : { 'color' : 'Red' } },
	*/

    /* Inline Styles */

    // These are core styles available as toolbar buttons. You may opt enabling
    // some of them in the Styles combo, removing them from the toolbar.
    /*
	{ name : 'Strong'			, element : 'strong', overrides : 'b' },
	{ name : 'Emphasis'			, element : 'em'	, overrides : 'i' },
	{ name : 'Underline'		, element : 'u' },
	{ name : 'Strikethrough'	, element : 'strike' },
	{ name : 'Subscript'		, element : 'sub' },
	{ name : 'Superscript'		, element : 'sup' },
	*/

    /*	{ name : 'Marker: Yellow'	, element : 'span', styles : { 'background-color' : 'Yellow' } },
	{ name : 'Marker: Green'	, element : 'span', styles : { 'background-color' : 'Lime' } },
*/
    {
	name : 'Typewriter'		,
	element : 'tt'
    },

    /*	{ name : 'Computer Code'	, element : 'code' },
	{ name : 'Keyboard Phrase'	, element : 'kbd' },
	{ name : 'Sample Text'		, element : 'samp' },
	{ name : 'Variable'			, element : 'var' },

	{ name : 'Deleted Text'		, element : 'del' },
	{ name : 'Inserted Text'	, element : 'ins' },

	{ name : 'Cited Work'		, element : 'cite' },
	{ name : 'Inline Quotation'	, element : 'q' },*/

    {
	name : 'Two Columns',
	element : 'table',
	attributes :
	{
	    'style' : '',
	    'class' : 'twoColumns'
			
	}
    },

    /* Object Styles */
    /* we strongly recommend to use CSS classes only! */

    {
	name : 'Image on Left',
	element : 'img',
	attributes :
	{
	    'style' : '',
	    'class' : 'left',
	    'border' : '0',
	    'vspace' : '0',
	    'hspace' : '0',
	    'align' : ''
	}
    },

    {
	name : 'Image on Right',
	element : 'img',
	attributes :
	{
	    'style' : '',
	    'class' : 'right',
	    'border' : '0',
	    'vspace' : '0',
	    'hspace' : '0',
	    'align' : ''
	}
    },

    {
	name : 'Clearfix',
	element : 'div',
	attributes : {'class' : 'clearfix'}
    },
    {
	name : '1/1 width, container span-24',
	element : 'div',
	attributes : {'class' : 'span-24'}
    },
    {
	name : '3/4 width, container span-20',
	element : 'div',
	attributes : {'class' : 'span-18'}
    },
    {
	name : '2/3 width, container span-16',
	element : 'div',
	attributes : {'class' : 'span-18'}
    },
    {
	name : '1/2 width, container span-12',
	element : 'div',
	attributes : {'class' : 'span-12'}
    },
    {
	name : '1/3 width, container span-8',
	element : 'div',
	attributes : {'class' : 'span-8'}
    },
    {
	name : '1/4 width, container span-6',
	element : 'div',
	attributes : {'class' : 'span-6'}
    },
    {
	name : '1/6 width, container span-4',
	element : 'div',
	attributes : {'class' : 'span-4'}
    },

    ]);
