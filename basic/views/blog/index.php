<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Blog;
use app\models\Category;
use yii\widgets\LinkPager;
?>
<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-text">
					<div class="breadcrumb-menu">
						<ul>
							<li><?= Html::a('Главная', [Yii::$app->homeUrl]) ?></li>
							<li><span>Блог</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="blog-gird-left-sidebar pt-100 pb-40">
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
			<?php
				foreach($blog as $blogDet) :
				$dt = DateTime::createFromFormat('Y-m-d', $blogDet->date)->format('d.m.Y'); //меняем формат даты на более понятный
				$views = $blogDet->views;
				$views++;
				// $img = $k['img']; //значение из поля бд в переменную
				// $img = explode(" ", $img); //разбиваем на массив с разделителем пробел
			?>
				<div class="col-md-6 col-sm-6">
					<div class="single-blog mb-60">
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
								<i class="icofont icofont-comment"></i>0
							</span>
							<span class="post-author">
								<i class="fa fa-eye"></i><?= $blogDet->views ?>
							</span>
						</div>
						<div class="post-content">
							<h2 class="semi-title"><?= Html::a($blogDet->name, ['@web/blog-details', 'id'=> $blogDet->id]) ?></h2>
							<p><?= $blogDet->description ?></p>
							<?= Html::a('Подробнее...', ['@web/blog-details', 'id'=> $blogDet->id]) ?>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="sidebar-widget">
				<h5 class="sidebar-title">Поиск по блогу</h5>
				<form id="search" method="get" action="<?= \yii\helpers\Url::to(['blog/search'])?>">
					<input type="text" placeholder="Поиск..." name="q"/>
					<button>Поиск</button>
				</form>
			</div>
			<div class="sidebar-widget">
				<h5 class="sidebar-title">Последнии статьи</h5>
				<ul class="sidebar-link">
					<?php
						$name = Blog::find()->orderBy(['date' => SORT_DESC,])->limit(5)->all();
						foreach($name as $blogDet) :?>
						<li><?= Html::a($blogDet->name, ['@web/blog-details', 'id'=> $blogDet->id]) ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="sidebar-widget">
				<h5 class="sidebar-title">Сортировать по:</h5>
				<ul class="sidebar-link">
					<li><a href="<?= Url::toRoute(['/blog/index', 'sort' => '']);?>">По умолчанию</a></li>
					<li><a href="<?= Url::toRoute(['/blog/index', 'sort' => 'date']);?>">По дате</a></li>
					<li><a href="<?= Url::toRoute(['/blog/index', 'sort' => 'name']);?>">По алфавиту</a></li>
					<li><a href="<?= Url::toRoute(['/blog/index', 'sort' => 'views']);?>">По кол-ву просмотров</a></li>
					<li><a href="<?= Url::toRoute(['/blog/index', 'sort' => 'idcategory']);?>">По тегам</a></li>
				</ul>
			</div>
			<div class="sidebar-widget">
				<h5 class="sidebar-title">Тэги</h5>
				<ul class="tag">
				<?php
					$category = Category::find()->all();
					foreach($category as $oneCat) :?>
					<li><?= Html::a($oneCat->name, ['@web/tag', 'idCat'=> $oneCat->id]) ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- pagination -->
<?php
echo LinkPager::widget([
	'pagination'=>$pagination,
        'maxButtonCount' => 0,
        'nextPageLabel' => 'Тудой',
        'prevPageLabel' => 'Сюдой',
        'nextPageCssClass' => 'css-class',
       'prevPageCssClass' => 'css-class'
]);
?>
<!-- /pagination -->
</div>		