<?php
	$this->params['breadcrumbs'][] = ['label' => 'Maqolalar', 'url' => ['/admin/articles']];
	$this->params['breadcrumbs'][] = ['label' => 'Yangi maqola', 'url' => ['/admin/articles/create']];
?>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Yangi maqola qo'shish</h3>
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
