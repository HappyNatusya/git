<?php

/* @var $this yii\web\View */

$this->title = 'PhotoLife';
?>
<?php
// $id = $_GET["id"];              // получние значений
$params = [':id' => $_GET['id']];
$stmt = Yii::$app->db->createCommand('SELECT * from archive where id = :id')->bindValues($params)->queryAll(); //вывод знаечний
// $stmt -> execute(array('id'=>$id)); //принимает значения
foreach($stmt as $k) { //перебор значений
    $views = $k['views']; //значение столбца в переменную
    $views++; //прибавляем
	// $stmt = Yii::$app->db->createCommand("UPDATE archive SET views=$views where id = :id")->queryAll();
	// $stmt = Yii::$app->db->createCommand("UPDATE archive SET views=$views WHERE id = :id")->execute(); //обновляем значение в бд
    // $stmt->execute(array('id'=>$id)); 

    $title = $k['name'];
    $url = '/blogDetails?id='.$k['id'];
    $hashtags = 'теги';
    $summary = 'Короткое описание';
    $image_url = 'https://avatars.mds.yandex.net/get-pdb/1982751/501ff0c7-4534-45ec-b82f-05a3667e4719/s1200';
    $description = 'Короткое описание';

$dt = DateTime::createFromFormat('Y-m-d', $k['date'])->format('d.m.Y'); //изменяем формат даты

$text = $k['content']; // значение из столбца 
$con = explode("&", $text); //разбиваем на массив

$img = $k['img']; //значение столбца
$img = explode(" ", $img); //разбиваем на массив
echo '
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="blog.php">Блог</a></li>
									<li><span>'.$k['name'].'</span></li>
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
								<a href="#"><img src="img/blog/'.$img[0].'" alt="" /></a>
							</div>
							<div class="post-info">
								<span class="post-author">
									<i class="fa fa-hashtag" aria-hidden="true"></i>
									<a href="#">'.$k['idTags'].'</a>
								</span>
								<span class="post-author">
									<i class="fa fa-calendar"></i>'.$dt.'
								</span>
								<span class="post-author">
									<i class="icofont icofont-comment"></i>0
								</span>
								<span class="post-author">
									<i class="fa fa-eye"></i>'.$k['views'].'
								</span>
							</div>
							<div class="blogs-text">
								<h2>'.$k['name'].'</h2>
								<p>'.$con[0].'</p>
								<p>'.$con[1].'</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<a href="#"><img src="img/blog/'.$img[0].'" alt="" /></a>
							</div>
							<div class="col-md-6 col-sm-6">
								<a href="#"><img src="img/blog/'.$img[0].'" alt="" /></a>
							</div>
							<div class="blogs-text">
								<p>'.$con[2].'</p>
								<p>'.$con[3].'</p>
							</div>
							<div class="sidebar-widget">
								<ul class="tag">
									<li><a href="bookmark.php?id='.$k['id'].'">Сохранить к себе</a></li>
								</div>
							';}?>
					
							<div class="tag-links col-md-12 col-sm-12">
								<div class="tag-left">
									<span>Теги:</span>
									<ul class="tags">
										<li><a href="#">jams</a></li>
										<li><a href="#">personal</a></li>
									</ul>
								</div>
								<div class="tag-right">
									<span>Поделиться:</span>
									<div class="tag-icon">
									<a href="http://twitter.com/share?text=<?php echo $title; ?>&related=truemisha&hashtags=<?php echo $hashtags ?>&url=<?php echo $url; ?>" title="Поделиться ссылкой в Твиттере" onclick="window.open(this.href, this.title); return false" target="_parent"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo urlencode( $url ); ?>&p[title]=<?php echo $title ?>&p[summary]=<?php echo $summary ?>&p[images][0]=<?php echo $image_url ?>" onclick="window.open(this.href, this.title); return false" title="Поделиться ссылкой на Фейсбук" target="_parent"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="http://vkontakte.ru/share.php?url=<?php echo urlencode($url); ?>&title=<?php echo $title; ?>&description=<?php echo $description; ?>&image=<?php echo $image_url; ?>&noparse=true" onclick="window.open(this.href, this.title); return false" title="Сохранить в Вконтакте" target="_parent"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            
									</div>
								</div>
							</div>
							<div class="comment-form">
								<h3>Комментарии</h3>
								<?php
                            if (!(isset($_SESSION['Name'])))//если пользователь не авторизован
                            {
                                echo '<p>Для возможности комментирования Вам необходимо <a href="form.php">авторизоваться</a></p>
								';}else {//Выводим саму страницу для авторизованных пользователей
									echo '<p>Вы можете оставить свой комментарий, а также просмотреть комментарии других пользователей</p>
									<form action="comments.php" method="post">
										<label>Comment</label>
										<textarea id="comment" rows="8" cols="45" name="content"></textarea>
										<button class="post">Отправить</button>
									</form>';}?>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Поиск по блогу</h5>
							<form id="search" action="search.php" method="post">
								<input type="text" name="search" placeholder="Поиск..." />
								<button>Поиск</button>
							</form>
						</div>
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Последнии статьи</h5>
							<ul class="sidebar-link">
							<?php
                    $stmt = Yii::$app->db->createCommand('SELECT * from archive ORDER BY date ASC')->queryAll(); //запрос на вывод записей из бд
                    foreach($stmt as $k) {
						echo '<li><a href="blog-details.php?id='.$k['id']. '">'.$k['name'].'</a></li>';
					} ?>
							</ul>
						</div>
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Сортировать по:</h5>
							<ul class="sidebar-link">
								<li><a href="#">По дате</a></li>
								<li><a href="#">По кол-ву просмотров</a></li>
								<li><a href="#">По алфавиту</a></li>
								<li><a href="#">По тегам</a></li>
							</ul>
						</div>
						<div class="sidebar-widget">
							<h5 class="sidebar-title">Тэги</h5>
							<ul class="tag">
							<?php
                    $stmt = Yii::$app->db->createCommand('SELECT * from tags')->queryAll();  //запрос на вывод записей из бд
					
					// var_dump($stmt);
                    foreach($stmt as $v) {
						echo '
								<li><a href="#">'.$v['hashtag'].'</a></li>
								';
					} 
					?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
                        $stmt = Yii::$app->db->createCommand('SELECT COUNT(*) FROM comments')->queryAll();
                        foreach($stmt as $k) {
						echo '<div class="container"><h4 class="mb-30">Всего комментариев: '.$k['COUNT(*)'].'</h4></div>';
						}

                        $stmt = Yii::$app->db->createCommand('SELECT * from comments')->queryAll();
                        foreach($stmt as $k) {
                        $dt = DateTime::createFromFormat('Y-m-d', $k['date'])->format('d.m.Y');

                        $tm = DateTime::createFromFormat('H:i:s', $k['time'])->format('H:i');
                        echo '
                        <div class="container">
        <div class="comment_area clearfix">
            <div class="comment-content d-flex"><span>'.$dt.' '.$tm.'</span>
            	<div class="comment-author">
					<img src="img/32.jpg" alt="author">	<span>'.$k['login'].'</span>
					<p>'.$k['content'].'</p>			
				</div>
			</div>
		</div>
	</div>';}
            ?>