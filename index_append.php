<?php
//part of yii
define('YII_DEV_ENV', in_array($_SERVER['SERVER_ADDR'], array('127.0.0.1', '::1')) ? 'local' : 'remote');

$dir = dirname(__FILE__);

// change the following paths if necessary
$yii=$dir.'/lib/yii/yii.php';
$config=$dir.'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

Yii::setPathOfAlias('lib', $dir.'/lib');
Yii::setPathOfAlias('hay', $dir.'/lib/hay');

require_once($yii);
Yii::createWebApplication($config)->run();
