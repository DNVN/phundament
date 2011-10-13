/*
Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

// Register a templates definition set named "default".

var p2dummyImage = '<img class="left" src="/p2/p2File/image?id=1&preset=default" />';
var p2dummyThumb = '<img class="left" src="/p2/p2File/image?id=1&preset=thumb" />';

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
        description: '',
        html:
        '<h1>' +
    'Qui ut typi consequat nobis elit'+
    '</h1>' +
    '<p>'+
    'Ex feugait processus est veniam sit. Qui ut typi consequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.'+
    '</p>'+
        '<h3>' +
    'Qui est veniam sit'+
    '</h3>' +
    '<p>	<img alt="" height="436" src="/aktienbrief/p3media/file/24?preset=__PRESET__" width="607" /></p>'+
    '<p>'+
    'Ex feugait processus est veniam sit. Qui ut typi consequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.'+
    '</p>'
    },
    

    ]
});
