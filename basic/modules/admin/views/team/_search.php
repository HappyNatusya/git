<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'family') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'job') ?>

    <?php // echo $form->field($model, 'vk') ?>

    <?php // echo $form->field($model, 'insta') ?>

    <?php // echo $form->field($model, 'fb') ?>

    <?php // echo $form->field($model, 'idLogin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
