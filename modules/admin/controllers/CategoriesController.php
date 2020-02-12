<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Categories;
use app\modules\admin\models\Languages;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CategoriesController extends Controller
{
	public function actionIndex()
	{
		$categories = Categories::find()->orderBy('id DESC')->asArray()->all();
		$categoriesTree = $this->buildTree($categories);
		return $this->render('index', [
			'categories' => $categoriesTree
		]);
	}

	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			$this->redirect('/admin/categories/index');
		}

		$categories = Categories::find()->orderBy('id DESC')->asArray()->all();
		$categories = ArrayHelper::map($categories, 'id', 'name');
		$languages = Languages::find()->orderBy('id DESC')->asArray()->all();
		$languages = ArrayHelper::map($languages, 'id', 'name');

		return $this->render('update', [
			'model' => $model,
			'categories' => $categories,
			'languages' => $languages
		]);
	}

	public function actionCreate()
	{
		$model = new Categories();
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			$this->redirect(['categories/index']);
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
	public function findModel($id)
	{
		if (($model = Categories::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('Bunday bo\'lim topilmadi.');
	}

	public function actionDelete($id)
	{
		$category = $this->findModel($id);
		if ($category) {
			Yii::$app->session->setFlash('success', $category->name);
			$category->delete();
		}
		return $this->redirect(['index']);
	}


	private function buildTree(array $elements, $parentId = null) {
		$branch = [];

		foreach ($elements as $element) {
			if ($element['parent_id'] == $parentId) {
				$children = $this->buildTree($elements, $element['id']);
				if ($children) {
					$element['children'] = $children;
				}
				$branch[] = $element;
			}
		}

		return $branch;
	}
}