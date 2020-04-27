<?php
use yii\helpers\Html;
use app\models\Team;
use app\models\Contact;
?>
<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-text">
					<div class="breadcrumb-menu">
						<ul>
							<li><?= Html::a('Главная', Yii::$app->homeUrl) ?></li>
							<li><span>Обо мне</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
<div class="service-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-info">
					<h3>Мой сервис</h3>
					<p>ЦЕЛЬ БЛОГА — ПОВЫШАТЬ УРОВЕНЬ НАВЫКОВ ФОТОГРАФИРОВАНИЯ, ГРАФИЧЕСКОГО ДИЗАЙНА НА РУССКОЯЗЫЧНОМ ПРОСТРАНСТВЕ</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="single-service mb-30 gray-bg">
					<div class="service-icon text-center">
						<i class="icon-pencil"></i>
					</div>
					<div class="service-text text-center">
						<h3>Инновации</h3>
						<p>Работа с современным оборудованием и программным обеспечением</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="single-service mb-30 gray-bg">
					<div class="service-icon text-center">
						<i class="icon-camera"></i>
					</div>
					<div class="service-text text-center">
						<h3>Фотографии</h3>
						<p>Настройка оборудования и работа с фото для идеального фото</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="single-service mb-30 gray-bg">
					<div class="service-icon text-center">
						<i class="icon-linegraph "></i>
					</div>
					<div class="service-text text-center">
						<h3>Брендирование</h3>
						<p>Исследование целевого рынка, создание и сопровождение бренда</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="team-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-info">
					<h3>Члены моей команды</h3>
					<p>На сайте работает дружная команда мастеров. Каждый из них ежедневно старается удивить вас свежими уроками и дополнениями. </p>
				</div>
			</div>
			<?php
				$team = Team::find()->all();
				foreach($team as $tm) :
			?>
			<div class="col-md-3 col-sm-3">
				<div class="single-team mb-30">
					<div class="team-img">
						<?= Html::img('@web/img/team/'.$tm->photo) ?>
					</div>
					<div class="team-content">
						<div class="team-info">
							<h3><?= $tm->name ?> <?= $tm->family ?></h3>
							<span><?= $tm->job ?></span>
						</div>
						<div class="social-icon">
							<a href="#"><i class="fa fa-vk"></i></a>
							<a href="http://twitter.com"><i class="fa fa-instagram"></i></a>
							<a href="http://facebook.com"><i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<div class="contact-area pt-100 pb-70">
	<div class="container">
		<div class="col-md-12">
			<div class="section-info">
				<h3>Связь со мной</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="map-area mb-30">
					<div id="map" class="map-2"><div id="map">
					<div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/20036/bogorodsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Богородск</a><a href="https://yandex.ru/maps/20036/bogorodsk/search/%D0%91%D0%BE%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D1%81%D0%BA/?ll=43.512789%2C56.105922&source=wizgeo&utm_medium=mapframe&utm_source=maps&z=12.91" style="color:#eee;font-size:12px;position:absolute;top:14px;">Богородск — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CKenrZ-D" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        		</div>
			</div>
		</div>
	</div>	
	<div class="col-md-6 col-sm-6 mb-30">
		<address class="copy">
			<span>Наш офис:</span>
			<p>Телефон : 8 952 449 07 37</p>
			<p>Email : shatkova8952.rf@gmail.com</p>
			<p>Адрес : г. Богородск, ул. Свердлова, д.3</p>			
		</address>			
		<div class="site-contact">
    		<div class="contact-create">
				<h1><?= Html::encode($this->title) ?></h1>
					<?= $this->render('_form', [
						'model' => $model,
					]) ?>
			</div>
   		</div>
	</div>
</div>