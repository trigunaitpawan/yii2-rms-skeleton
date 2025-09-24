<?php
use yii\widgets\DetailView;
use yii\helpers\Html;
/** @var $model app\modules\interview\models\Interview */
?>
<h1>Interview Details</h1>
<p>
    <?= Html::a('Give Feedback',['feedback','id'=>$model->id],['class'=>'btn btn-warning']) ?>
</p>
<?= DetailView::widget([
    'model'=>$model,
    'attributes'=>[
        'id',
        ['label'=>'Applicant','value'=>$model->application->applicant->full_name],
        ['label'=>'Job','value'=>$model->application->job->title],
        'interviewer',
        [
            'attribute'=>'scheduled_at',
            'value'=>date('Y-m-d H:i',$model->scheduled_at),
        ],
        'status',
        'feedback:ntext',
    ],
]) ?>
