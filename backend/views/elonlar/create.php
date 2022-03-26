<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Elonlar */

$this->title = 'Create Elonlar';
$this->params['breadcrumbs'][] = ['label' => 'Elonlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="elonlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
