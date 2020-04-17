<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(['id' => 'contact-form',  'method' => 'post']); ?>
<div class="col-sm-12">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div><div class="col-sm-12">
    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
    </div><div class="col-sm-12">
    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-sm-12">
        <?= Html::submitButton('Отправить', ['class' => 'submit', 'name' => 'contact-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>