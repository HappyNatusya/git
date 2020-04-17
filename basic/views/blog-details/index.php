<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\models\Category;
use app\models\Blog;
use app\models\Comments;
$this->title = 'PhotoLife';
?>
<?php
   
    $title = $blogDet->name;
    $url = '/blogDetails?id='.$blogDet->id;
    $hashtags = 'теги';
    $summary = 'Короткое описание';
    $image_url = 'https://avatars.mds.yandex.net/get-pdb/1982751/501ff0c7-4534-45ec-b82f-05a3667e4719/s1200';
    $description = 'Короткое описание';
	$views = $blogDet->views; //значение столбца в переменную
	$views++; //прибавляем
	Yii::$app->db->createCommand("UPDATE blog SET views=$views where id = $blogDet->id")->execute();
$dt = DateTime::createFromFormat('Y-m-d', $blogDet->date)->format('d.m.Y'); //изменяем формат даты

$text = $blogDet->content; // значение из столбца 
$con = explode("&", $text); //разбиваем на массив

// $img = $k['img']; //значение столбца
// $img = explode(" ", $img); //разбиваем на массив
// echo '?>
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<div class="breadcrumb-menu">
								<ul>
									<li><?= Html::a('Блог', ['/blog']) ?></li>
									<li><span><?= $blogDet->name ?></span></li>
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
				
					<div class="col-md-8 col-sm-12">
						<div class="single-blog mb-30">
							<div class="blogs-img">
								<a href=""><?= Html::img('@web/img/blog/'.$blogDet->img) ?></a>
							</div>
							<div class="post-info">
								<span class="post-author">
									<i class="fa fa-hashtag" aria-hidden="true"></i>
									<a href="#"><?= $blogDet->category->name ?></a>
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
							<div class="blogs-text">
								<h2><?= $blogDet->name ?></h2>
								<p><?= $con[0]?></p>
								<p><?= $con[1]?></p>
							</div>
							<div class="col-md-6 col-sm-6">
								<a href="#"><img src="img/blog/'.$img[0].'" alt="" /></a>
							</div>
							<div class="col-md-6 col-sm-6">
								<a href="#"><img src="img/blog/'.$img[0].'" alt="" /></a>
							</div>
							<div class="blogs-text">
								<p><?= $con[2]?></p>
								<p><?= $con[3]?></p>
							</div>
					
							<div class="tag-links col-md-12 col-sm-12">
								<!-- <div class="tag-left">
									<span>Теги:</span>
									<ul class="tags">
										<li><a href="#">jams</a></li>
										<li><a href="#">personal</a></li>
									</ul>
								</div> -->

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v6.0"></script>
<script type="text/javascript" src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>

								<div class="tag-right">
									<div class="tag-icon">
									<!-- vk -->
									<script type="text/javascript">
									document.write(VK.Share.button(false,{type: "round", text: "Поделиться"}));
									</script>
									<!-- /vk -->
									<!-- fb -->
									<div class="fb-share-button" data-href="https://shatkova.bpt-coders.ru/blog-details?id=<?= $blogDet->id?>" data-layout="button_count" data-size="small">
										<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Поделиться</a></div>
									</div>
									<!-- /fb -->

									
								</div>
								
							</div>
							<div class="comment-form">
								<h3>Комментарии</h3>
								
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>

<script type="text/javascript">
  VK.init({apiId: 7410225, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Последнии статьи</h5>
							<ul class="sidebar-link">
							<?php
                    $blog = Blog::find()
					->orderBy(['date' => SORT_DESC])
					->limit(5)
					->all();
					foreach($blog as $blogDet) :?>
						<li><?= Html::a($blogDet->name, ['@web/blog-details', 'id'=> $blogDet->id]) ?></li>
					<?php endforeach; ?>
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
		</div>