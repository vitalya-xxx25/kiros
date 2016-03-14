<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 2, 'maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'section')->dropDownList(
        common\models\Sections::getAll(), 
        ['prompt' => 'Выберите раздел...']    
    ) ?>
    
    <?= $form->field($model, 'published')->radioList([0 => 'No', 1 => 'Yes']) ?>
    
    <?= $form->field($model, 'sequenceNumber')->dropDownList(
        backend\components\Common::getSequenceNumbers(), 
        ['prompt' => 'Выберите порядковый номер...']    
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
