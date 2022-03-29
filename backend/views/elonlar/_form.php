<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Elonlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="elonlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sarlavha_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rasm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qisqa_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'toliq_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'qisqa_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'toliq_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'qisqa_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'toliq_en')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'vaqt')->textInput() ?>

    <?= $form->field($model, 'sarlavha_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sarlavha_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
