<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'PhotoLife';
?>
<div class="slider-area">
	<div class="slider-active owl-carousel">
		<div class="single-slider ptb-150 bg-opacity-2" style="background-image:url(img/slider/11.jpg)">
			<div class="container">
						<div class="slider-text">
							<h3>Добро</h3>
							<span>пожаловать в </span>
							<p>Вашему вниманию представлен личный блог, в котором Вы можете<br> узнать что-то интересное для себя. Например, можешь познакомиться <br>с моей командой, узнать тонкости нашей работы, познать программы<br> для обработки и создания изображений.</p>
							<a href="#">Подробнее...</a>
						</div>
					</div>
				</div>
				<div class="single-slider ptb-150 bg-opacity-2" style="background-image:url(img/slider/12.jpg)">
					<div class="container">
						<div class="slider-text">
							<h3>Кто такой</h3>
							<span>ФОТОГРАФ?</span>
							<p>Фотограф – это не просто профессия, это стиль жизни. Каждый фотограф, занимающийся съемкой, должен обладать разносторонними качествами, потому что в наше время, к сожалению, невозможно заработать на жизнь, занимаясь одним каким-либо видом съемки.</p>
							<a href="#">see more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider-area-end -->
		<div class="media-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="single-media mb-30">
							<div class="media-text">
								<h5>Приветствую в  <strong>PhotoLife</strong></h5>
								<p>Наша организация может предложить Вам большой каталог услуг по выгодным ценам.
Одними из них являются фотосъемка, видеосъемка, обработка фотографий и многое другое.</p>
								<blockquote>Lrna eros nunc curabitur viverra rutrum tortor luctus torquent mollis est dictum euismod.We love products that work perfectly and look beautifula.rutrum tortor luctus torquent mollis est dictum euismod.</blockquote>
								<p>Если вам нужны живые и яркие фотографии, профессиональный и творческий подход к любому из видов фотографирования, то вы нашли то что искали. Сайт фотографа максимально удобный и простой, чтобы вы смогли найти и прочитать всю необходимую информацию.</p>
								<?= Html::a('Подробнее', ['/about']) ?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="media-img mb-30">
							<?= Html::img('@web/img/media/1.jpg') ?>
							<!-- <img src="img/media/1.jpg" alt="" /> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="video-area pt-100 pb-70 bg-img-2 bg-opacity-3">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="video mb-30">
							<div class="embed-responsive embed-responsive-16by9">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/-ZHOsswYOzU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="video-text mb-30">
							<h3>Фото как исскуство, что это?</h3>
							<p>Фотография — уникальное. Образ близкого человека, красоты родного края, милая мордашка любимой собаки, первый весенний цветок — всё это можно сфотографировать, а снимок останется на очень долгую память. Это искусство загадочное, таящее в себе удивительное свойство останавливать мгновение.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ua labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
$mysqli = new mysqli('localhost', 'Shatkova', 'NLmMYLeB', 'Shatkova'); //подсключение к бд 
$query = "set names utf8";
$mysqli->query($query);

$query = "SELECT * FROM users";
$results = $mysqli->query($query);
$nr = $results->num_rows; //вывод кол-ва столбцов

$query1 = "SELECT * FROM comments";
$results1 = $mysqli->query($query1);
$nr1 = $results1->num_rows;//вывод кол-ва столбцов

$query2 = "SELECT * FROM archive";
$results2 = $mysqli->query($query2);
$nr2 = $results2->num_rows;//вывод кол-ва столбцов
?>

		<div class="blog-gird-left-sidebar pt-100 pb-40">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="single-blog mb-60">
							<div class="blog-img">
								<?= Html::img('@web/img/blog/11111.jpg') ?>
							</div>
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Статистика сайта</h5>
							<div class="post-content">
								<p>Количество пользователей: <?php echo $nr; ?></p>
								<p>Количество комментариев: <?php echo $nr1; ?></p>
								<p>Количество статей: <?php echo $nr2; ?></p>
								<a href="blog-details.html">read more</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- blog-area-start -->
		<div class="blog-area pb-100">
			<div class="container">
				<div class="section-title text-center">
					<h3 class="heading">latest blog</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
				</div>
				<div class="row">
					<div class="blog-active owl-carousel">
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>December 22, 2016
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>0
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Howe to grow business plan Sticky Post</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>February 2, 2017	
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>2
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Howe to grow business plan</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>January 1, 2017
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>0
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Legentis in iis qui facit eorum claritatem</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>December 22, 2016
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>8
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Dolore eu feugiat nulla facilisis</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>December 22, 2016
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>1
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Guod mazim placerat facer possim assum</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>December 22, 2016
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>0
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Ut wisi enim ad minim veniam</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>December 22, 2016
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>0
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Best Lorem ipsum dolor sit amet</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>December 22, 2016
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>0
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Top features in our theme</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
								</div>
								<div class="post-info">
									<span class="post-author">
										<i class="fa fa-user" aria-hidden="true"></i>
										<a href="#">jams</a>
									</span>
									<span class="post-author">
										<i class="fa fa-calendar"></i>December 22, 2016
									</span>
									<span class="post-author">
										<i class="icofont icofont-comment"></i>0
									</span>
								</div>
								<div class="post-content">
									<h2 class="semi-title">
									<a href="blog-details.html">Top 10 minimal portfolio 2017</a></h2>
									<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut </p>
									<a href="blog-details.html">read more</a>
								</div>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
