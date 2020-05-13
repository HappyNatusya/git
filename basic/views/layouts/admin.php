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
    <?= Html::csrfMetaTags() ?>
    <title>PhotoLife</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>	
<div class="wrap">
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
            ['label' => 'Общее', 'url' => ['@web/admin']],
            ['label' => 'Блог', 'url' => ['@web/admin/blog']],
			['label' => 'Теги', 'url' => ['@web/admin/category']],
			['label' => 'Контакты', 'url' => ['@web/admin/contact']],
			['label' => 'Заказы', 'url' => ['@web/admin/orders']],
			['label' => 'Портфолио', 'url' => ['@web/admin/portfolio']],
			['label' => 'Команда', 'url' => ['@web/admin/team']],
			['label' => 'User', 'url' => ['@web/admin/user']],
			['label' => 'Главная', 'url' => [Yii::$app->homeUrl]],
           
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
</div>

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
								<a href="https://twitter.com/devitemsllc"><i class="fa fa-vk"></i></a>
								<a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="fa fa-facebook"></i></a>
								<a  href="https://www.instagram.com/devitems/"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/channel/UC_AH6tcQrJa8txh_rNbL-AQ"><i class="fa fa-youtube"></i></a>
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
