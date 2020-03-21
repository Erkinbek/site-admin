<?php

namespace app\modules\site\assets;

use yii\web\AssetBundle;

class SiteModuleAssets extends AssetBundle
{
	public $sourcePath = '@site-assets';

	public $css = [
		"font-awesome/css/font-awesome.min.css",
		"css/animate.css",
		"css/owl.carousel.min.css",
		"css/owl.theme.default.min.css",
		"css/magnific-popup.css",
		"css/bootstrap-datepicker.css",
		"css/jquery.timepicker.css",
		"css/flaticon.css",
		"css/style.css",
	];
	public $js = [
		"js/jquery.min.js",
		"js/jquery-migrate-3.0.1.min.js",
		"js/popper.min.js",
		"js/bootstrap.min.js",
		"js/jquery.easing.1.3.js",
		"js/jquery.waypoints.min.js",
		"js/jquery.stellar.min.js",
		"js/jquery.animateNumber.min.js",
		"js/bootstrap-datepicker.js",
		"js/jquery.timepicker.min.js",
		"js/owl.carousel.min.js",
		"js/jquery.magnific-popup.min.js",
		"js/scrollax.min.js",
		"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false",
		"js/google-map.js",
		"js/main.js",
	];
	public $depends = [
	];

	public $publishOptions = [
		'forceCopy'=>true,
	];

	public function init()
	{
		parent::init();
		\Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
			'css' => [],
			'js' => []
		];
	}
	}