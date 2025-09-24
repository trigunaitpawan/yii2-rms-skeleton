<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/** @var $model app\modules\interview\models\Interview */
?>
<h1>Schedule Interview</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'interviewer')->textInput() ?>
    <?= $form->field($model,'scheduled_at')->input('datetime-local') ?>
    <?= $form->field($model,'status')->dropDownList([
        'scheduled'=>'Scheduled',
        'completed'=>'Completed',
        'cancelled'=>'Cancelled'
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save',['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
