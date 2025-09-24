<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/** @var $model app\modules\admin\models\Application */
?>
<h1>Apply for Job</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'cover_letter')->textarea() ?>
    <?= $form->field($model,'status')->hiddenInput(['value'=>'pending'])->label(false) ?>
    <div class="form-group">
        <?= Html::submitButton('Submit Application',['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
