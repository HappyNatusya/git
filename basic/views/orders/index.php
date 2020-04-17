<?php

use yii\helpers\Html;
use yii\grid\GridView;

?>
<div class="breadcrumb-banner-area bg-opacity bg-img ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-text">
					<div class="breadcrumb-menu">
						<ul>
							<li><?= Html::a('Главная', ['site/index']) ?></li>
							<li><span>Бронирование</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="pricing-area pt-100 pb-70">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="single-pricing mb-30 default-bg">
					<div class="pricing-top">
						<h3>Забронируйте</h3>
						<p><span>дату съемки</span></p>
					</div>
					<div class="pricing-bottom">
						<div class="pricing-text">
							<p><span>Если вы хотите пригласить меня в качестве фотографа, оставьте заявку на вашу фотосессию.
							Расскажите о вашем событии, месте, опишите все пожелания и предпочтения, которые у вас есть.
							Я свяжусь с вами в течение 24 часов, и мы обсудим детали вашей съемки.</span></p>								</div>
						</div>
				</div>
			</div>	
			<!-- <div class="col-md-6 col-sm-6 mb-30">
				<div class="row">
					<form id="contact-form" action="mail.php" method="post">
						<div class="col-sm-12">
							<input name="name" type="text" placeholder="Имя*" />
						</div>
						<div class="col-sm-6">
							<input name="email" type="email" placeholder="email*" />
						</div>
						<div class="col-sm-6">
							<input name="subject" type="text" placeholder="Телефон*" />
						</div>
						<div class="col-sm-6">
		    				<p>Предполагаемая дата съемки</p>
						</div>
						<div class="col-sm-6">
							<input name="email" type="date" placeholder="Предполагаемая дата*" />
						</div>
						<div class="col-sm-12">
							<textarea name="message" id="message" placeholder="Описание..." rows="10" cols="30"></textarea>
						</div>
						<button class="submit" type="submit">Оставить заявку</button>
					</form>
				</div>
            </div> -->
            <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
		</div>
	</div>
</div>
		
