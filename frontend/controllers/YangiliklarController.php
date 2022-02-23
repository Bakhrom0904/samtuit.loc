<?php

namespace frontend\controllers;

use common\models\Yangiliklar;
use yii\web\Controller;

class YangiliklarController extends Controller
{
public function actionList()
{
    $yangiliklar=Yangiliklar::find()->all();
    return $this->render("list",["yangiliklar"=>$yangiliklar]);
}

}