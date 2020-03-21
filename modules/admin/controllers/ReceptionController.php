<?php

	namespace app\modules\admin\controllers;

	use app\modules\admin\models\Reception;
	use yii\data\Pagination;
	use yii\web\Controller;

	class ReceptionController extends Controller
	{
		public function actionIndex()
		{
			$query = Reception::find()->orderBy('id DESC');
			$countQuery = clone $query;
			$pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
			$appeals = $query->offset($pages->offset)
				->limit($pages->limit)
				->all();
			return $this->render('index', [
				'appeals' => $appeals,
				'pages' => $pages,
			]);
		}
	}