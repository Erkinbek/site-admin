<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin() ?>
	<div class="card-body">
		<?= $form->field($model, 'name')->label('Yangi til nomi') ?>
		<?= $form->field($model, 'locale')->label('Manzili') ?>
	</div>
	<!-- /.card-body -->

	<div class="card-footer">
		<?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
	</div>
<?php ActiveForm::end() ?>
