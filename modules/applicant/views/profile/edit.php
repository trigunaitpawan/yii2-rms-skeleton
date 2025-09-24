<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/** @var $model app\modules\applicant\models\Applicant */
?>
<h1>Edit Profile</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'full_name')->textInput() ?>
    <?= $form->field($model,'email')->textInput() ?>
    <?= $form->field($model,'phone')->textInput() ?>
    <?= $form->field($model,'skills')->textarea() ?>
    <?= $form->field($model,'resume')->textInput(['placeholder'=>'Resume file path']) ?>
    <div class="form-group">
        <?= Html::submitButton('Save',['class'=>'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>
