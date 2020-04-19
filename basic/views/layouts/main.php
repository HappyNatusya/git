<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="abc9e53b76a7e628" />
    <?= Html::csrfMetaTags() ?>
    <title>PhotoLife</title>
    <?php $this->head() ?>
	
</head>
<body>
<?php $this->beginBody() ?>
<!-- метрика -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(60418531, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/60418531" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- метрика -->

<!-- <header>
			<div class="main-menu-area ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2">
							<div class="logo">
							<a href="<?= \yii\helpers\Url::home()?>"><?= Html::img('@web/web/img/logo/logo.PNG')?></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-10">
							<div class="menu-area floatright hidden-xs">
								<nav>
									<ul>
										<li><?= Html::a('Главная', ['@web/site/index']) ?></li>
										<li><?= Html::a('Обо мне', ['@web/contact/create']) ?></li>
										<li><?= Html::a('Блог', ['/blog']) ?></li>
										<li><a href="#">Ещё<i class="fa fa-angle-down"></i></a>
											<ul class="submenu">
												<li><?= Html::a('Портфолио', ['/portfolio']) ?></li>
												<li><?= Html::a('Услуги', ['/orders/create']) ?></li>
												<li><?= Html::a('FAQ', ['/faq']) ?></li>
											</ul>
										</li>
										 <?php if(Yii::$app->user->isGuest):?>
                            				<li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                        				<?php else: ?>
										<?= Html::beginForm(['/auth/logout'], 'post')
										. Html::submitButton(
											'Logout (' . Yii::$app->user->identity->name . ')',
											['class' => 'menu-area floatright hidden-xs']
										)
										. Html::endForm() ?>
									<?php endif;?>

									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
<header> -->
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'menu-area  hidden-xs',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => [Yii::$app->homeUrl]],
            ['label' => 'Обо мне', 'url' => ['@web/contact/create']],
			['label' => 'Блог', 'url' => ['/blog']],
			['label' => 'Ещё', 'url' => ['/site/activities'],
           
            'options' => ['id' => 'down_menu'],			
            'items' => [
              ['label' => 'Портфолио', 'url' => ['/portfolio']],
              ['label' => 'Услуги', 'url' => ['/orders/create']],
			  ['label' => 'FAQ', 'url' => ['/faq']],
			  ]],
       
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['auth/login']]
            ) : (
				'<li>'
				. Html::beginForm(['/auth/logout'], 'post')
                . Html::submitButton(
					'Logout (' . Yii::$app->user->identity->name . ')',
					['class' => 'menu-area floatright hidden-xs']
				)
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</header>

<footer class="footer">
			<div class="footer-area pt-80 pb-50">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="single-footer text-center mb-30">
								<div class="footer-icon">
									<i class="fa fa-phone"></i>
								</div>
								<div class="footer-info">
									<span>8 952 449 07 35 </span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="single-footer text-center mb-30">
								<div class="footer-icon">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="footer-info">
									<span>Shatkova8952.rf@Gmail.com</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="single-footer text-center mb-30">
								<div class="footer-icon">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="footer-info">
									<span>Нижегородская область, Богородск </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-area ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="copyright">
								<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> Все права защищены</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="icon floatright">
								<a href="https://vk.com/happy_natusya"><i class="fa fa-vk"></i></a>
								<a href="https://www.facebook.com/happy.natusya/"><i class="fa fa-facebook"></i></a>
								<a href="https://www.instagram.com/happy__natusya/"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>