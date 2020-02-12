<?php

	/* @var $this \yii\web\View */
	/* @var $content string */

	use app\modules\admin\assets\AdminModuleAssets;
	use yii\widgets\Breadcrumbs;

	AdminModuleAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= $this->title ?></title>
	<?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			</li>
		</ul>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Notifications Dropdown Menu -->
			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="far fa-bell"></i>
					<span class="badge badge-warning navbar-badge">15</span>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<span class="dropdown-item dropdown-header">15 Notifications</span>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-envelope mr-2"></i> 4 new messages
						<span class="float-right text-muted text-sm">3 mins</span>
					</a>
					<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
					Chiqish
				</a>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="../../index3.html" class="brand-link text-center">
			<span class="brand-text  font-weight-light">AdminLTE 3</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="info">
					<a href="#" class="d-block">Alexander Pierce</a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-item has-treeview">
						<a href="/admin" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Bosh sahifa
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="/admin/categories" class="nav-link">
							<i class="nav-icon fas fa-list"></i>
							<p>
								Bo'limlar
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="/admin/articles" class="nav-link">
							<i class="nav-icon fas fa-file-alt"></i>
							<p>
								Maqolalar
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="/admin/articles?id=1" class="nav-link">
							<i class="nav-icon fas fa-copy"></i>
							<p>
								Sahifalar
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="/admin/reception" class="nav-link">
							<i class="nav-icon fas fa-university"></i>
							<p>
								Virtual qabulxona
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="/admin/language" class="nav-link">
							<i class="nav-icon fas fa-university"></i>
							<p>
								Tillar
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="/admin/users" class="nav-link">
							<i class="nav-icon fas fa-user-alt"></i>
							<p>
								Foydalanuvchilar
							</p>
						</a>
					</li>
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Blank Page</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<?= Breadcrumbs::widget([
								'itemTemplate' => "<li class='breadcrumb-item'><i>{link}</i></li>\n",
								'homeLink' => ['label' => 'Bosh sahifa', 'url' => '/admin'],
								'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
							]) ?>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

	<?= $content ?>

	</div>
	<!-- /.content-wrapper -->


	<footer class="main-footer">
		<div class="float-right d-none d-sm-block">
			<b>Version</b> 3.0.2
		</div>
		<strong>Copyright &copy; 2020 <a href="https://pardayev.uz">Erkin Pardayev</a>.</strong> All rights
		reserved.
	</footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>