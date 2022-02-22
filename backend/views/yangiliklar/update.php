<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Yangiliklar */

$this->title = 'Update Yangiliklar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yangiliklar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
