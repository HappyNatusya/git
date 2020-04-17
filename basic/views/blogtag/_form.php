<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blogtag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blogtag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idBlog')->textInput() ?>

    <?= $form->field($model, 'idTag')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
