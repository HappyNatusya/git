<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'PhotoLife';
?>
<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-text">
					<div class="breadcrumb-menu">
						<ul>
							<li><?= Html::a('Главная', ['site/index']) ?></li>
							<li><span>Портфолио</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- portfolio-area-start -->
<div class="portfolio-area pt-100 pb-70">
	<div class="container">
		<div class="portfolio-menu">
			<button class="active" data-filter="*">all</button>
			<button data-filter=".cat1">Art Work</button>
			<button data-filter=".cat2">Graphics</button>
			<button data-filter=".cat3">Web Design</button>
		</div>
				<div class="row">
					<div class="grid">
						<div class="col-md-4 grid-item cat1 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/blog/1.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/1.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">Artificial</a></h2>
									<span>Art Work</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-item cat2 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/2.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/2.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">Graphics Design</a></h2>
									<span>Graphics</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-item cat3 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/3.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/3.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">HTML Template</a></h2>
									<span>Web Design</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-item cat1 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/5.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/5.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">Material Design</a></h2>
									<span>Graphics</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-item cat3 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/4.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/4.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">Generate Idea</a></h2>
									<span>Web Design</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-item cat1 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/6.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/6.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">Minimal Design</a></h2>
									<span>Web Design</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-item cat3 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/7.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/7.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">Creative</a></h2>
									<span>Art Work</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-item cat1 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/9.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/9.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">business plan</a></h2>
									<span>Graphics</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-item cat2 col-sm-4">
							<div class="single-portfolio">
								<div class="portfolio">
									<img src="img/portfolio/8.jpg" alt="" />
								</div>
								<div class="portfolio-icon">
									<a class="image-link" href="img/portfolio/8.jpg"><span class="icon-focus"></span></a>
								</div>
								<div class="portfolio-title">
									<h2><a href="portfolio-details.html">agency financ</a></h2>
									<span>Art Work</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>