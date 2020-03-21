<?php

	use yii\helpers\Url;
	use yii\widgets\LinkPager;

	$this->params['breadcrumbs'][] = ['label' => 'Maqolalar', 'url' => ['/admin/articles']];

	if (Yii::$app->session->hasFlash('success')) {
		$article = Yii::$app->session->getFlash("success");
		$script = <<< JS
    Swal.fire(
	  'O\'chirildi!',
	  "$article muvaffaqiyatli o'chirildi",
	  'success'
	)
JS;
		$this->registerJs($script, \yii\web\View::POS_END);
	}
?>
<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Murojaatlar</h3>

			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
					<i class="fas fa-times"></i></button>
			</div>
		</div>
		<div class="card-body">
			<div class="dataTables_wrapper dt-bootstrap4">
				<div class="row">
					<table class="table table-bordered table-hover dataTable">
						<tr>
							<td>#</td>
							<td>Shaxs nomi</td>
							<td>Kelib tushgan sana</td>
							<td>Xolati</td>
							<td>Amallar</td>
						</tr>
						<?php $i = 0; foreach ($appeals as $appeal): ?>
							<tr>
								<td><?= ++$i ?></td>
								<td><?= $appeal->fullname ?></td>
								<td><?= $appeal->status ?></td>
								<td><?= date("d.m.Y", $appeal->created) ?></td>
								<td>
									<a href="<?= Url::to(['reception/delete', 'id' => $appeal->id]) ?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
							<?php echo LinkPager::widget([
								'pagination' => $pages,
								'options' => [
									'class' => 'pagination',
								],
//								'disableCurrentPageButton' => true,
								'activePageCssClass' => 'paginate_button page-item active',
								'hideOnSinglePage' => true,
								'maxButtonCount' => 7,
								'prevPageCssClass' => 'paginate_button page-item previous page-link',
								'nextPageCssClass' => 'paginate_button page-item next page-link',
								'pageCssClass' => 'page-link',
							]); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->

</section>
<!-- /.content -->