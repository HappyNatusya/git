<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\models\Team;
use app\models\Contact;
use yii\widgets\ActiveForm;
?>
<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<div class="breadcrumb-menu">
								<ul>
									<li><?= Html::a('Главная', ['site/index']) ?></li>
									<li><span>Обо мне</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- media-area-start -->
		<div class="service-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-info">
							<h3>Мой сервис</h3>
							<p>ЦЕЛЬ БЛОГА — ПОВЫШАТЬ УРОВЕНЬ НАВЫКОВ ФОТОГРАФИРОВАНИЯ, ГРАФИЧЕСКОГО ДИЗАЙНА НА РУССКОЯЗЫЧНОМ ПРОСТРАНСТВЕ</p>
						</div>
					</div>
					<!-- <div class="col-md-4 col-sm-4">
						<div class="single-service mb-30 gray-bg">
							<div class="service-icon text-center">
								<i class="icon-laptop"></i>
							</div>
							<div class="service-text text-center">
								<h3>web - дизайн</h3>
								<p>Разработка шаблонов сайтов, приложений, адаптация и прочее</p>
								</div>
						</div>
					</div> -->
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
					<!-- <div class="col-md-4 col-sm-4">
						<div class="single-service mb-30 gray-bg">
							<div class="service-icon text-center">
								<i class="icon-gears "></i>
							</div>
							<div class="service-text text-center">
								<h3>Поддержка</h3>
								<p>Ответ на любой вопрос в любое время. Разборка конкретных ситуаций</p>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-md-4 col-sm-4">
						<div class="single-service mb-30 gray-bg">
							<div class="service-icon text-center">
								<i class="icon-briefcase "></i>
							</div>
							<div class="service-text text-center">
								<h3>Маркетинг</h3>
								<p>Продвижение продукта на целевой рынок</p>
							</div>
						</div>
					</div> -->
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35597.784469753926!2d43.478486077580946!3d56.107614496213706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414e3430b7911ad7%3A0xe4a78806f3655c66!2z0JHQvtCz0L7RgNC-0LTRgdC6LCDQndC40LbQtdCz0L7RgNC-0LTRgdC60LDRjyDQvtCx0Lsu!5e0!3m2!1sru!2sru!4v1552816606437" width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div></div>
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
<h4>здесь будет форма обратной связи</h4>
   						</div>

</div>

