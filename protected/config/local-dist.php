<?php

// Use thie file as local.php to override settings only on your local machine
//
// DO NOT COMMIT THIS FILE !!!

return array(
	#'theme' => 'classic',
	'import' => array(
	#'fullcrud.models.*',
	#'sakila.components.*',
	#'sakila.models.*',
	),
	// application components
	'components' => array(
		'db' => array(
			// MySQL
			'connectionString' => 'mysql:host=localhost;dbname=p3',
			'emulatePrepare' => true,
			'username' => 'test',
			'password' => 'test',
			'charset' => 'utf8',
			'enableParamLogging' => true
		),
		'db2' => array(
			// MySQL
			'connectionString' => 'mysql:host=localhost;dbname=db2',
			'emulatePrepare' => true,
			'username' => 'test',
			'password' => 'test',
			'charset' => 'utf8',
		),
		'urlManager' => array(
			'urlFormat' => 'path',
		),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					#'categories' => 'application',
					'levels' => '',
				),
			// uncomment the following to show log messages on web pages
			/*
			  array(
			  'class'=>'CWebLogRoute',
			  ),
			 */
			),
		),
		'image' => array(
			'class' => 'ext.p3extensions.components.image.CImageComponent',
			// GD or ImageMagick
			'driver' => 'ImageMagick',
			'params' => array('directory' => '/opt/local/bin'),
		),
		'lessCompiler' => array(
			'class' => 'ext.yii-less.components.LessCompiler',
			'autoCompile' => true,
			'paths' => array(
				'protected/extensions/lessii/blueprint/bootstrap.less' => 'themes/bootstrap/css/blueprint-bootstrap.css',
			),
		),
	),
	'modules' => array(
		#'fullcrud',
		#'sakila',
		#'fullcrudWorld',
	),
	'params' => array(
		// this is used in contact page
		#'adminEmail' => 'webmaster@h17n.de',
	),
);
?> 