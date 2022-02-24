<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\YangiliklarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yangiliklar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sarlavha_uz') ?>

    <?= $form->field($model, 'rasm') ?>

    <?= $form->field($model, 'qisqa_uz') ?>

    <?= $form->field($model, 'toliq_uz') ?>

    <?php // echo $form->field($model, 'qisqa_ru') ?>

    <?php // echo $form->field($model, 'toliq_ru') ?>

    <?php // echo $form->field($model, 'qisqa_en') ?>

    <?php // echo $form->field($model, 'toliq_en') ?>

    <?php // echo $form->field($model, 'vaqt') ?>

    <?php // echo $form->field($model, 'sarlavha_ru') ?>

    <?php // echo $form->field($model, 'sarlavha_en') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
