<?php

	namespace app\modules\site;

	use Yii;

	/**
	 * site module definition class
	 */
	class SiteModule extends \yii\base\Module
	{
		/**
		 * {@inheritdoc}
		 */
		public $controllerNamespace = 'app\modules\site\controllers';
		public $layout = 'main.php';

		/**
		 * {@inheritdoc}
		 */
		public function init()
		{
			$this->defaultRoute = 'site';
			parent::init();
			$this->setAliases([
				'@site-assets' => __DIR__ . '/public'
			]);
			Yii::configure($this, require __DIR__ . '/config/config.php');
			$handler = $this->get('errorHandler');
			Yii::$app->set('errorHandler', $handler);
			$handler->register();
		}
	}
