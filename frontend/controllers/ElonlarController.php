<?php

namespace frontend\controllers;

use common\models\Elonlar;
use yii\web\Controller;
use yii\data\Pagination;

class ElonlarController extends Controller
{
public function actionList()
{

    $test = Elonlar::find();
    $sahifa = new Pagination(['totalCount' => $test->count(),
        'defaultPageSize' => 3,
    ]);
    $elonlar = $test->offset($sahifa->offset)->limit($sahifa->limit)->orderBy("id DESC")->all();
    return $this->render("list", ["elonlar" => $elonlar, "sahifa" => $sahifa]);
}
public function actionView($id)
{
    $elon=Elonlar::findOne($id);
    return $this->render("view",["elon"=>$elon]);
}


}