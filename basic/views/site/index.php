<?php
use yii\helpers\Html;
use app\models\Blog;
use yii\helpers\Url;
$this->title = 'PhotoLife - личный блог фотографа';
$this->registerMetaTag(
	['name' => 'keywords', 'content' => 'Главная страница линого блога']
  );
  $this->registerMetaTag(
	['name' => 'description', 'content' => 'Блог фотографа личный блог PhotoLife']
  );
?>
<meta name="yandex-verification" content="abc9e53b76a7e628" />
<div class="slider-area">
	<div class="slider-active owl-carousel">
		<div class="single-slider ptb-150 bg-opacity-2" style="background-image:url(img/slider/11.jpg)">
			<div class="container">
				<div class="slider-text">
					<h3>Добро</h3>
					<span>пожаловать в </span>
					<p>личный блог фотографа PhotoLife Основная тема блога — фотография и профессия фотографа,<br>и прежде всего — вопросы творчества, продвижения, перспектив и вдохновения.</p>
				</div>
			</div>
		</div>
		<div class="single-slider ptb-150 bg-opacity-2" style="background-image:url(img/slider/12.jpg)">
			<div class="container">
				<div class="slider-text">
					<h3>Кто такой</h3>
					<span>ФОТОГРАФ?</span>
					<p>Фотограф – это не просто профессия, это стиль жизни. Каждый фотограф, занимающийся съемкой, должен обладать разносторонними качествами, потому что в наше время, к сожалению, невозможно заработать на жизнь, занимаясь одним каким-либо видом съемки.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="media-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="single-media mb-30">
					<div class="media-text">
						<h5>Приветствую в  <strong>PhotoLife</strong></h5>
						<p>Наша организация может предложить Вам большой каталог услуг по выгодным ценам.
Одними из них являются фотосъемка, видеосъемка, обработка фотографий и многое другое.</p>
						<blockquote>Не стоит забывать, что наш сайт – это не только информационный ресурс, но и сообщество единомышленников. Каждый день наш портал посещают десятки тысяч пользователей Adobe и не только.</blockquote>
						<p>Если вам нужны живые и яркие фотографии, профессиональный и творческий подход к любому из видов фотографирования, то вы нашли то что искали. Сайт фотографа максимально удобный и простой, чтобы вы смогли найти и прочитать всю необходимую информацию.</p>
						<?= Html::a('Подробнее', ['/about']) ?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="media-img mb-30">
					<?= Html::img('@web/img/media/2.jpg') ?>
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
							<p>Делюсь личным опытом, рассказываю о наработках коллег. Пишу для заказчиков, даю ответы на распространенные вопросы.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
$mysqli = new mysqli('localhost', 'Shatkova', 'NLmMYLeB', 'Shatkova'); //подсключение к бд 
$query = "set names utf8";
$mysqli->query($query);


$query2 = "SELECT * FROM blog";
$results2 = $mysqli->query($query2);
$nr2 = $results2->num_rows;//вывод кол-ва столбцов

$query3 = "SELECT * FROM portfolio";
$results3 = $mysqli->query($query3);
$nr3 = $results3->num_rows;//вывод кол-ва столбцов
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
								<p>Количество работ в портфолио: <?php echo $nr3; ?></p>
								<p>Количество статей: <?php echo $nr2; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="blog-area pb-100">
			<div class="container">
				<div class="section-title text-center">
					<h3 class="heading">Популярные статьи</h3>
				</div>
				<div class="row">
					<div class="blog-active owl-carousel">
						<?php
						$blog = Blog::find()
						->orderBy(['views' => SORT_DESC])
						->limit(10)
						->all();
                    	foreach($blog as $blogDet) :
                    // $stmt = Yii::$app->db->createCommand('SELECT * from blog ORDER BY views ASC')->queryAll(); //запрос на вывод записей из бд
                    // foreach($stmt as $v) {
						$dt = DateTime::createFromFormat('Y-m-d', $blogDet->date)->format('d.m.Y');
						?>
						<div class="col-md-12">
							<div class="single-blog">
								<div class="blog-img">
									<a href="<?= Url::toRoute(['@web/blog-details', 'id'=>$blogDet->id]);?>"><?= Html::img('@web/img/blog/'.$blogDet->img) ?></a>
								</div>
							<div class="post-info">
							<span class="post-author">
							<i class="fa fa-hashtag" aria-hidden="true"></i>
							<a href="<?= Url::toRoute(['@web/tag', 'idCat'=>$blogDet->category->id]);?>"><?= $blogDet->category->name ?></a>
						</span>
								<span class="post-author">
									<i class="fa fa-calendar"></i><?= $dt ?>
								</span>
								<span class="post-author">
											<i class="fa fa-eye"></i><?= $blogDet->views ?>
										</span>
							</div>
							<div class="post-content">
								<h2 class="semi-title">
								<?= Html::a($blogDet->name, ['@web/blog-details', 'id'=> $blogDet->id]) ?>
								</h2>

								<p><?= $blogDet->description ?></p>
								<?= Html::a('Подробнее...', ['@web/blog-details', 'id'=> $blogDet->id]) ?>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					</div> 
				</div>
			</div>
		</div>