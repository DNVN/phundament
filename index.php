<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../_svn-yii_/framework/yii.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

require(dirname(__FILE__).'/protected/components/P3Configuration.php');
$config = new P3Configuration(array(
	dirname(__FILE__).'/protected/config/main.php',
	dirname(__FILE__).'/protected/modules/p3admin/config/main.php',
	dirname(__FILE__).'/protected/modules/p3widgets/config/main.php',
	dirname(__FILE__).'/protected/modules/p3admin/modules-install/user/config/main.php',
	dirname(__FILE__).'/protected/modules/p3admin/modules-install/rights/config/main.php',
));

Yii::createWebApplication($config->toArray())->run();
