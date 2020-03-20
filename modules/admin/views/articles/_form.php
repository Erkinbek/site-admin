<?php

	use mihaildev\ckeditor\CKEditor;
	use mihaildev\elfinder\InputFile;
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use mihaildev\elfinder\ElFinder;

	$paramsCategories = [
		'prompt' => 'Bo\'limni tanlang...'
	];
	$paramsLang = [
		'prompt' => 'Tilni tanlang...'
	];
	$status = [
		'Faol',
		'To\'xtatilgan',
		'O\'chirilgan'
	];
	$this->registerCssFile('https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css');
?>
<?php $form = ActiveForm::begin() ?>
<div class="card-body">
	<?= $form->field($model, 'title')->label('Maqola nomi') ?>
	<?= $form->field($model, 'introtext')->widget(CKEditor::className(), [
		'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
	])
	->label('Qisqacha matn') ?>
	<?= $form->field($model, 'fulltext')->widget(CKEditor::className(), [
		'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
	])->label('To\'liq matn') ?>
	<?= $form->field($model, 'category_id')->dropDownList($categories, $paramsCategories)->label('Yuqori turuvchi bo\'lim') ?>
	<?= $form->field($model, 'langugage_id')->dropDownList($languages, $paramsLang)->label('Bo\'lim tili') ?>
	<?php
		echo $form->field($model, 'img')->widget(InputFile::className(), [
			'language'      => 'ru',
			'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
			'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
			'template'      => '<div class="input-group ">{input}<span class="input-group-btn">{button}</span></div>',
			'options'       => ['class' => 'form-control'],
			'buttonName'    => 'Rasmni tanlash',
			'buttonOptions' => ['class' => 'btn btn-default'],
			'multiple'      => false       // возможность выбора нескольких файлов
		])->label("Rasmni tanlang");
	?>
	<?= $form->field($model, 'status')->dropDownList($status)->label('Maqola holati') ?>
</div>
<!-- /.card-body -->

<div class="card-footer">
	<?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end() ?>

<script>
  $('#datepicker').datepicker({
    uiLibrary: 'bootstrap'
  });
</script>
