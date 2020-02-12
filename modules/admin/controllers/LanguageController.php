<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Languages;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class LanguageController extends Controller
{

	public function actionIndex()
	{
		$languages = Languages::find()->orderBy('id DESC')->all();
		return $this->render('index', [
			'languages' => $languages
		]);
	}

	public function actionCreate()
	{
		$model = new Languages();
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			$this->redirect('/admin/language/index');
		}
		return $this->render('create', [
			'model' => $model
		]);
	}

	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			$this->redirect('/admin/language/index');
		}
		return $this->render('create', [
			'model' => $model
		]);
	}

	/**
	 * Deletes an existing Languages model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionDelete($id)
	{
		$language = $this->findModel($id);
		if ($language) {
			Yii::$app->session->setFlash('success', $language->name);
			$language->delete();
		}
		return $this->redirect(['index']);
	}

	/**
	 * Finds the Languages model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Languages the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Languages::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('Bunday til topilmadi.');
	}
}