<?php
use yii\grid\GridView;
/** @var $dataProvider yii\data\ActiveDataProvider */
?>
<h1>Applications</h1>
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns'=>[
        'id',
        [
            'attribute'=>'job_id',
            'value'=>function($model){ return $model->job->title ?? 'N/A'; }
        ],
        [
            'attribute'=>'applicant_id',
            'value'=>function($model){ return $model->applicant->full_name ?? 'N/A'; }
        ],
        'status',
        ['class'=>'yii\grid\ActionColumn'],
    ],
]) ?>
