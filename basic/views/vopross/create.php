<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vopross */

$this->title = 'Create Vopross';
$this->params['breadcrumbs'][] = ['label' => 'Voprosses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vopross-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
