<?php
	$this->params['breadcrumbs'][] = ['label' => 'Tillar', 'url' => ['/admin/language']];
	$this->params['breadcrumbs'][] = ['label' => 'Yangi til', 'url' => ['/admin/language/create']];
?>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Yangi til qo'shish</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<?= $this->render('_form', ['model' => $model]) ?>
				</div>
				<!-- /.card -->
			</div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>

