<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
use app\models\Portfolio;
$this->title = 'PhotoLife';
$dateStart = DateTime::createFromFormat('Y-m-d', $portfolio->date_start)->format('d.m.Y');
$dateEnd = DateTime::createFromFormat('Y-m-d', $portfolio->date_end)->format('d.m.Y');
?>
<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-text">
					<div class="breadcrumb-menu">
						<ul>
							<li><?= Html::a('Главная', ['@web/site/index']) ?></li>
							<li><?= Html::a('Портфолио', ['@web/portfolio']) ?></li>
							<li><span><?= $portfolio->name ?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

		<div class="portfolio-details-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="single-portfolio-details mb-30">
							<div class="portfolio-content">
								<div class="portfolio-img">
									<img src="img/portfolio/<?= $portfolio->img ?>" alt="" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="portfolio-right-bar mb-30">
							<ul>
								<li>
									<span class="portfolio-span">Клиент:</span>
									<span class="portfolio-spans"><?= $portfolio->client ?></span>
								</li>
								<li>
									<span class="portfolio-span">Использованное оборудование:</span>
									<span class="portfolio-spans"><?= $portfolio->skills ?></span>
								</li>
								<li>
									<span class="portfolio-span">Дата начала:</span>
									<span class="portfolio-spans"><?= $dateStart ?></span>
								</li>
								<li>
									<span class="portfolio-span">Дата окончания:</span>
									<span class="portfolio-spans"><?= $dateEnd ?></span>
								</li>
							</ul>
							<div class="portfolio-text-bottom">
								<h3>Описание</h3>
								<p><?= $portfolio->description ?></p>
							</div>
							<!-- <div class="row">
								<div class="col-md-12">
									<h3 class="portfolio-info">Так же:</h3>
								</div>
								<div class="col-md-4">
									<div class="single-portfolio">
										<a href="portfolio-details.html">
											<div class="portfolio">
												<img src="img/portfolio/10.jpg" alt="" />
											</div>
											<div class="portfolio-area-title">
												<h2>business plan</h2>
												<span>Graphics</span>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="single-portfolio">
										<a href="portfolio-details.html">
											<div class="portfolio">
												<img src="img/portfolio/11.jpg" alt="" />
											</div>
											<div class="portfolio-area-title">
												<h2>HTML Template</h2>
												<span>Art Work</span>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="single-portfolio">
										<a href="portfolio-details.html">
											<div class="portfolio">
												<img src="img/portfolio/12.jpg" alt="" />
											</div>
											<div class="portfolio-area-title">
												<h2>creative</h2>
												<span>Art Work</span>
											</div>
										</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>