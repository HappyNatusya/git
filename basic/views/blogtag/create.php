<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Blogtag */

$this->title = 'Create Blogtag';
$this->params['breadcrumbs'][] = ['label' => 'Blogtags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogtag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
