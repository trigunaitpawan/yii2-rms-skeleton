<?php
use yii\widgets\DetailView;
/** @var $model app\modules\admin\models\Application */
?>
<h1>Application Details</h1>
<?= DetailView::widget([
    'model'=>$model,
    'attributes'=>[
        'id',
        ['label'=>'Job','value'=>$model->job->title],
        ['label'=>'Applicant','value'=>$model->applicant->full_name],
        'cover_letter:ntext',
        'status',
        'created_at',
    ],
]) ?>
