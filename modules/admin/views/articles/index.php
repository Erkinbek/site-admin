<?php

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
			<h3 class="card-title">Maqolalar</h3>

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
					<p>
						<a href="/admin/articles/create" class="btn btn-primary">Yangi maqola qo'shish</a>
					</p>
				</div>
				<div class="row">
					<table class="table table-bordered table-hover dataTable">
						<tr>
							<td>#</td>
							<td>Nomi</td>
							<td>Chop etilgan sana</td>
							<td>Amallar</td>
						</tr>
						<?php $i = 0; foreach ($articles as $article): ?>
							<tr>
								<td><?= ++$i ?></td>
								<td><?= $article->title ?></td>
								<td><?= date("d.m.Y", $article->created) ?></td>
								<td>
									<a href="<?= \yii\helpers\Url::to(['articles/delete', 'id' => $article->id]) ?>">
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

<div class="modal fade" id="modal-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tilni o'chirish</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Ushbu tilni o'chirishni istaysizmi? Eslatma: Ushbu tilni o'chirsangiz ushbu tilga tegishli xamma bo'lim
					va maqolalar xam o'chib ketadi!&hellip;</p>
				<p id="langID"></p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Bekor qilish</button>
				<a class="btn btn-warning" id="delete-button" href="#"><i class="fas fa-trash"></i>O'chirish</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
  function setID(id) {
    $("#delete-button").attr("href", "/admin/categories/delete?id=" + id);
  }
</script>