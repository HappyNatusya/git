<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VoprossSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="index.html">home</a></li>
									<li><span>contact us style2</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- contact-area-start -->
		<div class="contact-area pt-100 pb-70">
			<div class="container">
				<div class="col-md-12">
					<div class="section-info">
						<h3>Свяжитесь с нами</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
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
						<div class="contact-form">
							<h3>Есть вопрос?</h3>
						</div>
						



						<div class="row">
							<form id="contact-form" action="vopross.php" method="post">
							<!-- <div class="col-sm-6">
								<input name="email" type="email" placeholder="email*" />
							</div> -->
								
								<div class="col-sm-6">
									<input name="type" type="text" placeholder="Тема сообщения*" />
								</div>
								<div class="col-sm-12">
									<textarea name="content" id="message" placeholder="Ваше сообщение..." rows="10" cols="30"></textarea>
								</div>								
								<button class="submit" type="submit">Отправить</button>
							</form>
							<p class="form-messege"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
