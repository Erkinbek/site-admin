<?php

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

class AdminModuleAssets extends AssetBundle
{
	public $sourcePath = '@admin-assets';

	public $css = [
		'dist/css/adminlte.min.css',
		'plugins/fontawesome-free/css/all.min.css',
//		'https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'
	];
	public $js = [
		'plugins/jquery/jquery.min.js',
		'plugins/bootstrap/js/bootstrap.bundle.min.js',
		'dist/js/adminlte.min.js',
		'dist/js/sweetalert2.9.min.js'
	];
	public $depends = [
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