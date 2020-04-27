<?php
use yii\helpers\Html;
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
								Я свяжусь с вами в течение 24 часов, и мы обсудим детали вашей съемки.</span></p>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 mb-30">
					<div class="row">
                    <div class="orders-create">
					<?= $this->render('_form', [
						'model' => $model,
					]) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p>*Отправляя заявку, Вы даете согласие на обработку Ваших персональных данных</p>
</div>