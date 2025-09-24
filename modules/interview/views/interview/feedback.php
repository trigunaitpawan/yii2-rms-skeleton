<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/** @var $model app\modules\interview\models\Interview */
?>
<h1>Provide Feedback</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'feedback')->textarea() ?>
    <?= $form->field($model,'status')->dropDownList([
        'completed'=>'Completed',
        'selected'=>'Selected',
        'rejected'=>'Rejected',
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save Feedback',['class'=>'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>
