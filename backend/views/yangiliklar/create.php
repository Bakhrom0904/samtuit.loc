<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Yangiliklar */

$this->title = 'Create Yangiliklar';
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yangiliklar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
