<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogtagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogtags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogtag-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Blogtag', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idBlog',
            'idTag',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
