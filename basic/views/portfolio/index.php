<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
use app\models\Portfolio;
$this->title = 'PhotoLife';
?>
<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-text">
					<div class="breadcrumb-menu">
						<ul>
							<li><?= Html::a('Главная', Yii::$app->homeUrl) ?></li>
							<li><span>Портфолио</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-area pt-100 pb-70">
	<div class="container">
				<div class="row">
					<div class="grid">
					<?php
                    	foreach($portfolio as $list) : ?>
						<div class="col-md-4 grid-item col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/<?= $list->img ?>"alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/<?= $list->img ?>"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><?= Html::a($list->name, ['@web/portfoliodetails', 'id'=> $list->id]) ?></a></h2>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>