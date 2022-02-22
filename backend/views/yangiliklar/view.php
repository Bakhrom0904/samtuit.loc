<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Yangiliklar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="yangiliklar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'sarlavha',
            'rasm',
            'qisqa_uz:ntext',
            'toliq_uz:ntext',
            'qisqa_ru:ntext',
            'toliq_ru:ntext',
            'qisqa_en:ntext',
            'toliq_en:ntext',
            'vaqt',
        ],
    ]) ?>

</div>
