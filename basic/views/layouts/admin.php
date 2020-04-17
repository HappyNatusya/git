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
<header>
			<div class="main-menu-area ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2">
							<div class="logo">
								<a href="index.php"><?= Html::img('@web/img/logo/1.png') ?></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-10">
							<div class="menu-area floatright hidden-xs">
								<nav>
									<ul>
										<li><?= Html::a('Общее', ['@web/admin']) ?></li>
										<li><?= Html::a('Блог', ['@web/admin/blog']) ?></li>
										<li><?= Html::a('Теги', ['@web/admin/tags']) ?></li>
										<li><?= Html::a('Комментарии', ['@web/admin/comments']) ?></li>
										<li><?= Html::a('Команда', ['/team']) ?></li>
										<li><?= Html::a('Главная', ['@web/site/index']) ?></li>
										<?php if(Yii::$app->user->isGuest):?>
                            				<li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                        				<?php else: ?>
										<?= Html::beginForm(['/auth/logout'], 'post')
										. Html::submitButton(
											'Logout (' . Yii::$app->user->identity->name . ')',
											['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
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
<div class="wrap">
    <?php
    // NavBar::begin([
    //     'brandLabel' => Yii::$app->name,
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => [
    //         'class' => 'main-menu-area ptb-20 row col-md-9 col-sm-10 menu-area floatright hidden-xs',
    //     ],
    // ]);
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav navbar-right'],
    //     'items' => [
    //         ['label' => 'Главная', 'url' => ['/site/index']],
    //         ['label' => 'О нас', 'url' => ['/about']],
    //         ['label' => 'Портфолио', 'url' => ['/portfolio']],
    //         ['label' => 'Блог', 'url' => ['/blog']],
    //         ['label' => 'Еще', 'url' => ['/portfolio']],
    //         ['label' => 'Профиль', 'url' => ['/portfolio']],
    //         // ['label' => 'Архив', 'url' => ['/archive']],
    //         // ['label' => 'Теги', 'url' => ['/tags']],
    //         // ['label' => 'EXit', 'url' => ['/site/contact']],
    //     ],
    // ]);
    // NavBar::end();
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
