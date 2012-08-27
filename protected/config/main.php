<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Alice Yuan',
  'defaultController'=>'site',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(

		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
      'showScriptName'=> false,
      'caseSensitive'=>false,
      'matchValue'=>false,
      'rules' => array(
        '<view:(about|artworks|resume)>' => 'site/page',
        'blog' => 'post/index',
        'contact' => 'site/contact',
				'blog/<id:\d+>/<title:.*?>'=>'post/view',
				'blog/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        // '/' => '/site/page/view',
//          '<controller:\w+>/<id:\d+>' => '<controller>/view',
//          '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//          '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
      ),
		),
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=aliceyuan',
			'emulatePrepare' => true,
			'username' => 'alice',
			'password' => 'alicedb',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				array(
          'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
          'ipFilters'=>array('127.0.0.1'),
				),
				// uncomment the following to show log messages on web pages
				// array(
				// 	'class'=>'CWebLogRoute',
				// ),
			),
		),
	),

	// application-level parameters that can be accessed
  //
	'params'=>require(dirname(__FILE__).'/params.php'),
);
