<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/** @var $model app\modules\admin\models\Job */
?>
<h1>Create Job</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'title')->textInput() ?>
    <?= $form->field($model,'description')->textarea() ?>
    <?= $form->field($model,'location')->textInput() ?>
    <?= $form->field($model,'status')->dropDownList([1=>'Open',0=>'Closed']) ?>
    <div class="form-group">
        <?= Html::submitButton('Save',['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
