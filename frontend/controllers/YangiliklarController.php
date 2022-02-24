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
public function actionView($id)
{
    $yangilik=Yangiliklar::findOne($id);
    return $this->render("view",["yangilik"=>$yangilik]);
}


}