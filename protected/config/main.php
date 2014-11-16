<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
//add bootstrap
Yii::setPathOfAlias('bootstrap',dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Горно-Химическая компания',
	'sourceLanguage'=>'en',
	'language'=>'ru',
	'theme'=>'test_theme',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		//add moduls users&rights
		'application.modules.user.models.*',
		'application.modules.user.components.*',
		//connect module rights
		'application.modules.rights.*',
		'application.modules.rights.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'admin',
		//moduls rights&users
		'user'=>array(
			'tableUsers'=>'tbl_users',
			'tableProfiles'=>'tbl_profiles',
			'tableProfileFields'=>'tbl_profiles_fields',
		),
		'rights'=>  array
		(
			'install'=>true,
			// 'superusername'=>'admin',
		),
		//add default roles for unregitredUsers
		'authManager'=>array(
			'class'=>'RDbAuthManager',
			'assignmentTable'=>'AuthAssignment',
			'itemChildTable'=>'AuthItemChild',
			'itemTable'=>'AuthItem',
			'rightsTable'=>'Rights',
		),


		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'54',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			//enable bootstrap
			'generatorPaths'=>array('bootstrap.gii'),
		),

	),

	// application components
	'components'=>array(
		'user'=>array(
			'class'=> 'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl' => array('/user/login'),
		),
		'authManager'=>array(
			'class'=>'RDbAuthManager', // Provides support authorization item sorting.
			'connectionID'=>'db',
			// 'defaultsRoles'=>array('Authenticated','Guest'),

		),
		//отправка писем если нет перевода на русском
		'messages' => array(
			// using static class method as event handler
			'onMissingTranslation' => array('MyEventHandler', 'handleMissingTranslation'),
		),
		//отправка писем
		'email'=>array(
			'class'=>'application.extensions.email.Email',
			'delivery'=>'php', //Will use the php mailing function.
			//May also be set to 'debug' to instead dump the contents of the email into the view
		),
		//send email into google-email
		'Smtpmail'=>array(
			'class'=>'application.extensions.smtpmail.PHPMailer',
			'Host'=>"smtp.gmail.com",
			'Username'=>'example@gmail.com',
			'Password'=>'passwork',
			'Mailer'=>'smtp',
			'Port'=>587,
			'SMTPAuth'=>true,
			'SMTPSecure' => 'tls',
		),
		//add lang
		'request'=>array(
			'enableCookieValidation'=>true,
			'enableCsrfValidation'=>true,
		),

		//enable bootstrap
		'bootstrap'=>array('class'=>'ext.bootstrap.components.Bootstrap'),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'class'=>'application.components.UrlManager',
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				//add language
				'<language:(ru|ua|en)>/' => 'site/index',
				'<language:(ru|ua|en)>/<action:(contact|login|logout)>/*' => 'site/<action>',
				'<language:(ru|ua|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<language:(ru|ua|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<language:(ru|ua|en)>/<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',

			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ManafCompany',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
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
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'languages'=>array('ru'=>'Русский', 'ua'=>'Українська', 'en'=>'English'),
	),
);