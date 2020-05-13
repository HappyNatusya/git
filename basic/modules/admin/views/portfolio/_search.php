<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PortfolioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portfolio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'client') ?>

    <?php // echo $form->field($model, 'skills') ?>

    <?php // echo $form->field($model, 'date_start') ?>

    <?php // echo $form->field($model, 'date_end') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>