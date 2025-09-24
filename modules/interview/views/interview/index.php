<?php
use yii\grid\GridView;
use yii\helpers\Html;
/** @var $dataProvider yii\data\ActiveDataProvider */
?>
<h1>Interviews</h1>
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns'=>[
        'id',
        [
            'label'=>'Applicant',
            'value'=>function($model){ return $model->application->applicant->full_name ?? 'N/A'; }
        ],
        [
            'label'=>'Job',
            'value'=>function($model){ return $model->application->job->title ?? 'N/A'; }
        ],
        'interviewer',
        [
            'attribute'=>'scheduled_at',
            'value'=>function($model){ return date('Y-m-d H:i',$model->scheduled_at); },
        ],
        'status',
        ['class'=>'yii\grid\ActionColumn'],
    ],
]) ?>
