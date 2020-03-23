<?php

	/* @var $this \yii\web\View */
	/* @var $content string */

	use app\modules\site\assets\SiteModuleAssets;
	use yii\helpers\Html;

	SiteModuleAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-3 d-flex align-items-center">
				<a href="/"><img src="/images/elements/logo.png" alt=""></a>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="col">
						<div class="top-wrap d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
							<div class="text"><span>Manzil</span><span>Koson tumani</span></div>
						</div>
					</div>
					<div class="col">
						<div class="top-wrap d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
							<div class="text"><span>Ishonch telefoni</span><span>8 (375) 59-21-628</span></div>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-end align-items-center">
						<div class="social-media">
							<p class="mb-0 d-flex">
								<a href="https://facebook.com/kosontumanihokimligi" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
								<a href="https://t.me/kosontumani_uz" class="d-flex align-items-center justify-content-center"><span class="fa fa-telegram"><i class="sr-only">Telegram</i></span></a>
								<a href="https://www.youtube.com/channel/UCpjVmOMrmxgaIvD6viVZ5TA" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>
								<a href="/contact" class="d-flex align-items-center justify-content-center"><span class="fa fa-envelope"><i class="sr-only">Contact</i></span></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span> Menu
		</button>
		<form action="#" class="searchform order-lg-last">
			<div class="form-group d-flex">
				<input type="text" class="form-control pl-3" placeholder="<?=Yii::t('common','Search')?>">
				<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
			</div>
		</form>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"><a href="/" class="nav-link"><?= Yii::t('common', 'Home page') ?></a></li>
				<li class="nav-item"><a href="about.html" class="nav-link"><?=Yii::t('common','Regional government')?></a></li>
				<li class="nav-item"><a href="services.html" class="nav-link"><?=Yii::t('common','About the region')?></a></li>
				<li class="nav-item"><a href="project.html" class="nav-link"><?=Yii::t('common','Interactive services')?></a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link"><?=Yii::t('common','Contact')?></a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->
<?= $content ?>
<footer class="footer ftco-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6 col-lg">
				<div class="ftco-footer-widget mb-4">
					<p><?=Yii::t('common','Copyright')?></p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
						<li class="ftco-animate"><a href="https://t.me/kosontumani_uz"><span class="fa fa-telegram"></span></a></li>
						<li class="ftco-animate"><a href="https://www.facebook.com/kosontumanihokimligi"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="https://www.youtube.com/channel/UCpjVmOMrmxgaIvD6viVZ5TA"><span class="fa fa-youtube"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-lg">
				<div class="ftco-footer-widget mb-4 ml-md-5">
					<ul class="list-unstyled">
						<li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Oil Change</a></li>
						<li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Batteries</a></li>
						<li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Tow Truck</a></li>
						<li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Tire Change</a></li>
						<li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Engine Repair</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-lg">
				<div class="ftco-footer-widget mb-4">
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map-marker"></span><span class="text">Koson tumani</span></li>
							<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">8 (375) 59-21-628</span></a></li>
							<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@kosont.uz</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg">
				<div class="ftco-footer-widget mb-4">
					<div class="opening-hours">
						<h4>Ish vaqti:</h4>
						<p class="pl-3">
							<span>Dushanba - Juma : 09:00 - 18:00</span>
						</p>
						<h4>Dam olish kunlari:</h4>
						<p class="pl-3">
							<span>Shanba, Yakshanba</span>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
	<svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
	</svg>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
