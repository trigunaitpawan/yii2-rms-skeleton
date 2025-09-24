<?php
use yii\grid\GridView;
use yii\helpers\Html;
/** @var $dataProvider yii\data\ActiveDataProvider */
?>
<h1>Jobs</h1>
<p><?= Html::a('Create Job',['create'],['class'=>'btn btn-success']) ?></p>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'title',
        'location',
        [
            'attribute' => 'status',
            'value' => function($model){ return $model->status ? 'Open' : 'Closed'; }
        ],
        ['class'=>'yii\grid\ActionColumn'],
    ],
]) ?>
