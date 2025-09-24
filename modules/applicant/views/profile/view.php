<?php
use yii\widgets\DetailView;
use yii\helpers\Html;
/** @var $model app\modules\applicant\models\Applicant */
?>
<h1>Profile</h1>
<p><?= Html::a('Edit',['edit','id'=>$model->id],['class'=>'btn btn-primary']) ?></p>
<?= DetailView::widget([
    'model'=>$model,
    'attributes'=>['id','full_name','email','phone','skills:ntext','resume'],
]) ?>
