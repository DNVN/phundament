<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$mainConfig = array(
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'My Phundament 3',
	'theme' => 'classic',
	// preloading 'log' component
	'preload' => array('log'),
	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
		'zii.widgets.*',
		'ext.gtc.components.*', // gtc
		'application.modules.user.components.*', // Hack: gtc fix

		'ext.p3extensions.widgets.userflash.EUserFlash', // flash messages
	),
	'modules' => array(
		// uncomment the following to enable the Gii tool
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'p3',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters' => array('127.0.0.1', '::1'),
			'generatorPaths' => array(
				#'ext.giix-core', // giix generators
				'ext.gtc', // giix generators
			),
		),
		'p3admin' => array(
			'params' => array('install' => true),
		),
		'rights' => array(
			'cssFile' => '/css/rights/default.css'
		),
	),
	// application components
	'components' => array(
		'user' => array(
			// enable cookie-based authentication
			'allowAutoLogin' => true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager' => array(
			'showScriptName' => false,
			'appendParams' => false, // in general more error resistant
			'urlFormat' => 'path',
			'rules' => array(
				'admin' => 'p3admin',
				'site/login' => 'user/login', // standard login disabled 
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'db' => array(
			// SQLite
			'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
			// MySQL
			#'connectionString' => 'mysql:host=localhost;dbname=p3',
			#'emulatePrepare' => true,
			#'username' => 'test',
			#'password' => 'test',
			#'charset' => 'utf8',
		),
		'errorHandler' => array(
			// use 'site/error' action to display errors
			'errorAction' => 'site/error',
		),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
			// uncomment the following to show log messages on web pages
			/*
			  array(
			  'class'=>'CWebLogRoute',
			  ),
			 */
			),
		),
		'widgetFactory' => array(
			'class' => 'CWidgetFactory',
			'enableSkin' => true,
		),
		'image' => array(
			'class' => 'ext.p3extensions.components.image.CImageComponent',
			// GD or ImageMagick
			'driver' => 'GD',
		),
	),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => array(
		// this is used in contact page
		'adminEmail' => 'webmaster@example.com',
	),
);



require_once(dirname(__FILE__) . '/../extensions/p3extensions/components/P3Configuration.php');
$config = new P3Configuration(array(
		dirname(__FILE__) . '/../modules/p3admin/config/main.php',
		dirname(__FILE__) . '/../modules/p3widgets/config/main.php',
		dirname(__FILE__) . '/../modules/p3media/config/main.php',
		dirname(__FILE__) . '/../modules/p3admin/modules-install/user/config/main.php',
		dirname(__FILE__) . '/../modules/p3admin/modules-install/rights/config/main.php',
		dirname(__FILE__) . '/../extensions/p3extensions/widgets/ckeditor/config/main.php',
		$mainConfig,
		dirname(__FILE__) . '/local.php',
	));

return $config->toArray();
