<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
$mainConfig = require(dirname(__FILE__).DIRECTORY_SEPARATOR.'main.php');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	// application components
	'components'=>array(
		'db'=>$mainConfig['components']['db']
	),
    'commandMap' => array(
        'rsync'=>array(
            'class' => 'ext.p3extensions.commands.P3RsyncCommand',
            'servers' => array(
                'dev' => realpath(dirname(__FILE__).'/..'),
                'prod' => 'user@example.com:/path/to/webapp',
            ),
            'aliases' => array(
                'data' => 'application.data'
            ),
        ),
    ),
#	'import' => $mainConfig['import']
);
