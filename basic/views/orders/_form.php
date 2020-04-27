<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\captcha\Captcha;
?>
<?php $form = ActiveForm::begin(['id' => 'contact-form',  'method' => 'post']); ?>
	<div class="col-sm-12">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => "Имя"]) ?>
	</div>
	<div class="col-sm-6">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => "Электронная почта"]) ?>
	</div>
	<div class="col-sm-6">
    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(),['mask' => '9(999)999-99-99'])->textInput(['maxlength' => true, 'placeholder' => "Номер телефона"]) ?>
	</div>
	<div class="col-sm-6">
    <?= $form->field($model, 'date')->Input('date') ?>
	</div>
	<div class="col-sm-12">
    <?= $form->field($model, 'description')->textInput(['maxlength' => true, 'placeholder' => "Описание"]) ?>
	</div>
    <?= Html::submitButton('Отправить заявку', ['class' => 'submit', 'name' => 'contact-button']) ?>
<?php ActiveForm::end(); ?>