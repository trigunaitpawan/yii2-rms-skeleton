<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/** @var $model app\modules\admin\models\Job */
?>
<h1>Job Details</h1>
<p>
    <?= Html::a('Update',['update','id'=>$model->id],['class'=>'btn btn-primary']) ?>
    <?= Html::a('Delete',['delete','id'=>$model->id],[
        'class'=>'btn btn-danger',
        'data'=>['confirm'=>'Are you sure?','method'=>'post']
    ]) ?>
</p>
<?= DetailView::widget([
    'model'=>$model,
    'attributes'=>['id','title','description:ntext','location','status','created_at','updated_at']
]) ?>
