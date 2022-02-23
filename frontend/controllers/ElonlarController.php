<?php

namespace frontend\controllers;

use common\models\Elonlar;
use yii\web\Controller;

class ElonlarController extends Controller
{
public function actionList()
{
    $elonlar=Elonlar::find()->all();
    return $this->render("list",['elonlar'=>$elonlar]);
}

}