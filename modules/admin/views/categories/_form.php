<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	$paramsCategories = [
		'prompt' => 'Bo\'limni tanlang...'
	];
	$paramsLang = [
		'prompt' => 'Tilni tanlang...'
	];
?>
<?php $form = ActiveForm::begin() ?>
<div class="card-body">
	<?= $form->field($model, 'name')->label('Yangi bo\'lim nomi') ?>
	<?= $form->field($model, 'parent_id')->dropDownList($categories, $paramsCategories)->label('Yuqori turuvchi bo\'lim') ?>
	<?= $form->field($model, 'language_id')->dropDownList($languages, $paramsLang)->label('Bo\'lim tili') ?>
</div>
<!-- /.card-body -->

<div class="card-footer">
	<?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end() ?>
