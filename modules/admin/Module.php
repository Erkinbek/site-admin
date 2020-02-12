<?php

	namespace app\modules\admin;

	use Yii;

	/**
	 * admin module definition class
	 */
	class Module extends \yii\base\Module
	{
		/**
		 * {@inheritdoc}
		 */
		public $controllerNamespace = 'app\modules\admin\controllers';
		public $layout = 'main.php';

		/**
		 * {@inheritdoc}
		 */
		public function init()
		{
			parent::init();
			$this->setAliases([
				'@admin-assets' => __DIR__ . '/public'
			]);
			Yii::configure($this, require __DIR__ . '/config/config.php');
			$handler = $this->get('errorHandler');
			Yii::$app->set('errorHandler', $handler);
			$handler->register();
		}
	}
