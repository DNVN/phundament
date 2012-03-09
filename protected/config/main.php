<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$mainConfig = array(
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'My Phundament 3',
	'theme' => 'bootstrap',
	// preloading 'log' component
	'preload' => array(
		'log',
		'langHandler',
		#'lessCompiler',
		'bootstrap',
		'lessCompiler'),
	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
		'zii.widgets.*',
		#'ext.gtc.components.*', // gtc
		'application.modules.user.components.*', // TODO - Hack: gtc fix for UActiveRecord
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
			'params' => array('install' => false),
		),
		'p3widgets' => array(
			'params' => array(
				'widgets' => array(
					#'zii.widgets.CMenu' => 'Menu Widget',
					'ext.yiiext.widgets.fancybox.EFancyboxWidget' => 'Fancy Box',
					'ext.yiiext.widgets.cycle.ECycleWidget' => 'Cycle',
					'ext.yiiext.widgets.carousel.ECarouselWidget' => 'Carousel',
					'ext.yiiext.widgets.swfobject.ESwfObjectWidget' => 'SWF Object',
					'ext.yiiext.widgets.lipsum.ELipsum' => 'Lorem Ipsum Text',
					'ext.yii-bootstrap.widgets.BootHero' => 'Bootstrap Hero',
				#'ext.yiiext.widgets.simplemodal.ESimpleModalWidget'=> 'Modal Widget',
				#'ext.yiiext.widgets.menu.EMenuWidget'				=> 'Extended Menu',
				#'ext.yiiext.widgets.iconizedMenu.EIconizedMenu'	=> 'Iconized Menu',
				),
			),
		),
		'p3media' => array(
			'params' => array(
				'presets' => array(
					'span-24' => array(
						'name' => '1/1 width (span-24), jpg',
						'commands' => array(
							'resize' => array(950, 950, 4), // Image::WIDTH
							'quality' => 85
						),
						'type' => 'jpg'
					),
					'span-18' => array(
						'name' => '2/3 width (span-18), jpg',
						'commands' => array(
							'resize' => array(710, 710, 4), // Image::WIDTH
							'quality' => 85
						),
						'type' => 'jpg'
					),
					'span-12' => array(
						'name' => '1/2 width (span-12), jpg',
						'commands' => array(
							'resize' => array(470, 470, 4), // Image::WIDTH
							'quality' => 85
						),
						'type' => 'jpg'
					),
					'span-8' => array(
						'name' => '1/3 width (span-8), jpg',
						'commands' => array(
							'resize' => array(310, 310, 4), // Image::WIDTH
							'quality' => 85
						),
						'master' => 4,
						'type' => 'jpg'
					),
					'span-6' => array(
						'name' => '1/4 width (span-6), jpg',
						'commands' => array(
							'resize' => array(230, 230, 4), // Image::WIDTH
							'quality' => 85
						),
						'type' => 'jpg'
					),
					'icon-64' => array(
						'name' => 'Icon 64x64',
						'commands' => array(
							'resize' => array(64, 64),
						),
						'type' => 'png'
					),
					'icon-32' => array(
						'name' => 'Icon 64x64',
						'commands' => array(
							'resize' => array(32, 32),
						),
						'type' => 'png'
					),
					'icon-16' => array(
						'name' => 'Icon 16x16',
						'commands' => array(
							'resize' => array(16, 16),
						),
						'type' => 'png'
					),
				)
			)
		),
		'rights' => array(
			'cssFile' => '/css/rights/default.css'
		),
	),
	/* 'behaviors' => array(
	  'ext._less.components.LessCompilationBehavior'
	  ), */
	// application components
	'components' => array(
		'user' => array(
			// enable cookie-based authentication
			'allowAutoLogin' => true,
		),
		'returnUrl' => array(
			'class' => 'ext.p3extensions.components.P3ReturnUrl',
		),
		'langHandler' => array(
			'class' => 'ext.p3extensions.components.P3LangHandler',
			'languages' => array('en', 'de', 'ru', 'fr', 'ph_debug')
		),
		'urlManager' => array(
			'class' => 'ext.p3extensions.components.P3LangUrlManager',
			'showScriptName' => false,
			'appendParams' => false, // in general more error resistant
			'urlFormat' => 'get',
			'rules' => array(
				// convenience rules
				'admin' => 'p3admin',
				'<lang:[a-z]{2}>/pages/<view:\w+>' => 'site/page',
				'<lang:[a-z]{2}>/wiki/<page:\w+>' => 'wiki',
				// p3media
				'<lang:[a-z]{2}>/img/<preset:[a-zA-Z0-9-._]+>/<title:.+>_<id:\d+><extension:.[a-zA-Z0-9]{1,}+>' => 'p3media/file/image', // p3media images, TESTING: disable in case of problems
				// Yii
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				// general language and route handling
				'<lang:[a-z]{2}>' => '',
				'<lang:[a-z]{2}>/<_c>' => '<_c>',
				'<lang:[a-z]{2}>/<_c>/<_a>' => '<_c>/<_a>',
				'<lang:[a-z]{2}>/<_m>/<_c>/<_a>' => '<_m>/<_c>/<_a>',
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
		'lessCompiler' => array(
			'class' => 'ext.yii-less.components.LessCompiler',
			//'autoCompile' => true,
			'paths' => array(
				'protected/extensions/lessii/blueprint/bootstrap.less' => 'css/blueprint-bootstrap.css',
			),
		),
		'bootstrap' => array(
			'class' => 'ext.yii-bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
			'coreCss' => true, // whether to register the Bootstrap core CSS (bootstrap.min.css), defaults to true
			'responsiveCss' => true, // whether to register the Bootstrap responsive CSS (bootstrap-responsive.min.css), default to false
			'plugins' => array(
				// Optionally you can configure the "global" plugins (button, popover, tooltip and transition)
				// To prevent a plugin from being loaded set it to false as demonstrated below
				'transition' => false, // disable CSS transitions
				'tooltip' => array(
					'selector' => 'a.tooltip', // bind the plugin tooltip to anchor tags with the 'tooltip' class
					'options' => array(
						'placement' => 'bottom', // place the tooltips below instead
					),
				),
			// If you need help with configuring the plugins, please refer to Bootstrap's own documentation:
			// http://twitter.github.com/bootstrap/javascript.html
			),
		),
	),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => array(
		// this is used in contact page
		'adminEmail' => 'webmaster@example.com',
	),
);


// include external configs
require_once(dirname(__FILE__) . '/../extensions/p3extensions/components/P3Configuration.php');
$config = new P3Configuration(array(
		dirname(__FILE__) . '/../modules/p3admin/config/main.php',
		dirname(__FILE__) . '/../modules/p3widgets/config/main.php',
		dirname(__FILE__) . '/../modules/p3media/config/main.php',
		#dirname(__FILE__) . '/../modules/p3pages/config/main.php',
		dirname(__FILE__) . '/../modules/p3admin/modules-install/user/config/main.php',
		dirname(__FILE__) . '/../modules/p3admin/modules-install/rights/config/main.php',
		#dirname(__FILE__) . '/../modules/p3admin/modules-install/webshell/config/main.php',
		dirname(__FILE__) . '/../extensions/p3extensions/widgets/ckeditor/config/main.php',
		$mainConfig,
		dirname(__FILE__) . '/local.php',
	));

return $config->toArray();
