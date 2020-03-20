<?php

	namespace app\modules\admin\controllers;

	use app\modules\admin\models\Articles;
	use app\modules\admin\models\Categories;
	use app\modules\admin\models\Languages;
	use Yii;
	use yii\data\Pagination;
	use yii\helpers\ArrayHelper;
	use yii\web\Controller;

	class ArticlesController extends Controller
	{
		public function actionIndex()
		{
			$query = Articles::find()->orderBy('id DESC');
			$countQuery = clone $query;
			$pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
			$articles = $query->offset($pages->offset)
				->limit($pages->limit)
				->all();
			return $this->render('index', [
				'articles' => $articles,
				'pages' => $pages,
			]);
		}

		public function actionCreate()
		{
			$model = new Articles();
			if (Yii::$app->request->post()) {
				$model->load(Yii::$app->request->post());
				$model->author_id = 1; // TODO after authentication add user id
				$model->created = time();
				$model->validate();
				if ($model->save()) {
					return $this->redirect(['articles/index']);
				}
			}
			$categories = Categories::find()->orderBy('id DESC')->asArray()->all();
			$categories = ArrayHelper::map($categories, 'id', 'name');
			$languages = Languages::find()->orderBy('id DESC')->asArray()->all();
			$languages = ArrayHelper::map($languages, 'id', 'name');
			return $this->render('create', [
				'model' => $model,
				'categories' => $categories,
				'languages' => $languages
			]);
		}

		public function actionDelete($id)
		{
			try {
				$article = Articles::find()->where(['id' => $id])->one()->delete();
				return $this->redirect(['articles/index']);
			} catch (\Exception $e) {
				echo $e->getMessage();
			}

		}
	}