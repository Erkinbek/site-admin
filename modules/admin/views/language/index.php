<?php

	use yii\helpers\Html;
	use yii\helpers\Url;

	$this->params['breadcrumbs'][] = ['label' => 'Tillar', 'url' => ['/admin/Language']];
?>

<?php if (Yii::$app->session->hasFlash('success')) {
	$test = Yii::$app->session->getFlash("success");
	$script = <<< JS
    Swal.fire(
	  'O\'chirildi!',
	  "$test tili muvaffaqiyatli o'chirildi",
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
			<h3 class="card-title">Title</h3>

			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
					<i class="fas fa-times"></i></button>
			</div>
		</div>
		<div class="card-body">
			<a href="create" class="btn btn-primary">Yangi til qo'shish</a>
			<table style="margin-top: 1rem;" class="table table-bordered">
					<thead>
					<tr>
						<th style="width: 10px">#</th>
						<th>Til nomi</th>
						<th>Manzili</th>
						<th>Amallar</th>
					</tr>
					</thead>
					<tbody>
					<?php $i = 0; foreach ($languages as $language): $i++; ?>
						<tr>
							<td><?= $i ?></td>
							<td><?= $language->name ?></td>
							<td><?= $language->locale ?></td>
							<td>
								<a href="/admin/language/update?id=<?= $language->id ?>"><i class="fas fa-edit"></i></a>
								<a
									href="#"
									onclick="setID(<?= $language->id ?>)"
									data-toggle="modal"
									data-target="#modal-delete"
								>
									<i class="fas fa-trash"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
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
    $("#delete-button").attr("href", "/admin/language/delete?id=" + id);
  }
</script>
