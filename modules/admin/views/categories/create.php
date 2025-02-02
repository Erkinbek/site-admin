<?php
	$this->params['breadcrumbs'][] = ['label' => 'Bo\'limlar', 'url' => ['/admin/categories']];
	$this->params['breadcrumbs'][] = ['label' => 'Yangi bo\'lim', 'url' => ['/admin/categories/create']];
?>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Yangi bo'lim qo'shish</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<?= $this->render('_form', [
						'model' => $model,
						'categories' => $categories,
						'languages' => $languages
					]) ?>
				</div>
				<!-- /.card -->
			</div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
