<?php

	use yii\web\ErrorHandler;

	$config =  [
	'params' => [],
	'components' => [
		'errorHandler' => [
			'class' => ErrorHandler::className(),
		],
	],
];

return $config;