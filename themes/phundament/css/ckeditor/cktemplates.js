/*
Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

// Register a templates definition set named "default".

var loremIpsum = 'Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.';

CKEDITOR.addTemplates( 'default',
{
    // The name of sub folder which hold the shortcut preview images of the
    // templates.
    imagesPath : CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'templates' ) + 'templates/images/' ),

    // The templates definitions.
    templates :
    [
    {
	title: 'Default',
	image: '',
	description: 'Heading, paragraph, image, paragraph',
	html: '<h1>' + loremIpsum.substr(0, 20)+'</h1>' +
	'<p>'+loremIpsum+'</p>'+
	'<h3>' +loremIpsum.substr(20, 32)+'</h3>' +
	'<p><img alt="" height="436" src="/p3media/file/image/?id=0&preset=default" /></p>'+
	'<p>'+loremIpsum+'</p>'
    },
    {
	title: 'Full width, 50%-50% columns',
	image: '',
	description: 'span-12 span-12',
	html: '<div class="span-12"><p>'+loremIpsum+'</p></div><div class="span-12 last"><p>'+loremIpsum+'</p></div><div class="clearfix"></div>'
    },
    {
	title: 'Full width, 66%-33% columns',
	image: '',
	description: 'span-16 span-8',
	html: '<div class="span-16"><p>'+loremIpsum+'</p></div><div class="span-8 last"><p>'+loremIpsum+'</p></div><div class="clearfix"></div>'
    },
    {
	title: 'Full width, 33%-66% columns',
	image: '',
	description: 'span-8 span-16',
	html: '<div class="span-8"><p>'+loremIpsum+'</p></div><div class="span-16 last"><p>'+loremIpsum+'</p></div><div class="clearfix"></div>'
    },
    {
	title: 'Full width, 33%-33%-33% columns',
	image: '',
	description: 'span-8 span-8 span-8',
	html: '<div class="span-8"><p>'+loremIpsum+'</p></div><div class="span-8"><p>'+loremIpsum+'</p></div><div class="span-8 last"><p>'+loremIpsum+'</p></div><div class="clearfix"></div>'
    },
    {
	title: 'Full width, 25%-25%-25%-25% columns',
	image: '',
	description: 'span-6 span-6 span-6 span-6',
	html: '<div class="span-6"><p>'+loremIpsum+'</p></div><div class="span-6"><p>'+loremIpsum+'</p></div><div class="span-6"><p>'+loremIpsum+'</p></div><div class="span-6 last"><p>'+loremIpsum+'</p></div><div class="clearfix"></div>'
    },
    {
	title: '3/4 width, one column',
	image: '',
	description: 'span-20',
	html: '<div class="span-20"><p>'+loremIpsum+'</p></div><div class="clearfix"></div>'
    },
    {
	title: '2/3 width, 50%-50% columns',
	image: '',
	description: 'span-8 span-8',
	html: '<div class="span-8"><p>'+loremIpsum+'</p></div><div class="span-8 last"><p>'+loremIpsum+'</p></div><div class="clearfix"></div>'
    }

    ]
});
