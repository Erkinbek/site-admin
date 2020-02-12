<?php
	$this->params['breadcrumbs'][] = ['label' => 'Bo\'limlar', 'url' => ['/admin/categories']];

	if (Yii::$app->session->hasFlash('success')) {
	$category = Yii::$app->session->getFlash("success");
	$script = <<< JS
    Swal.fire(
	  'O\'chirildi!',
	  "$category bo'limi muvaffaqiyatli o'chirildi",
	  'success'
	)
JS;
	$this->registerJs($script, \yii\web\View::POS_END);
}

	function recursivePrint($categories, $t = null) {
		foreach ($categories as $category) {
			echo "
						<li class='list-group-item hover'>" . $category['name'] . "<span class='float-right'>
						<a href='/admin/categories/update?id=" . $category['id'] ."'><i class='fas fa-edit'></i></a>";
			echo '<a
									href="#"
									onclick="setID(' . $category["id"] . ')"
									data-toggle="modal"
									data-target="#modal-delete"
									style="padding-left: 10px"
								>';
			echo "<i class='fas fa-trash'></i></a>
						</span></li>
						";
			if (isset($category['children'])) {
				echo '<li class="list-group-item"><ul class="list-group">';
				recursivePrint($category['children']);
				echo '</li></ul>';
			}
		}
	}

?>
<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Bo'limlar</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
				<a href="/admin/categories/create" class="btn btn-primary">Yangi bo'lim qo'shish</a>
				<ul class="nav flex-column" style="margin-top: 1rem;">
					<?php recursivePrint($categories); ?>
				</ul>
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