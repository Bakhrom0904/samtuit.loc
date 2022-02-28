<?php

namespace frontend\controllers;

use common\models\Yangiliklar;
use yii\web\Controller;
use yii\data\Pagination;
class YangiliklarController extends Controller
{
public function actionList()
{
    $test=Yangiliklar::find();
    $sahifa=new Pagination(['totalCount'=>$test->count(),
        'defaultPageSize'=>3,
        ]);
    $yangiliklar=$test->offset($sahifa->offset)->limit($sahifa->limit)->orderBy("id DESC")->all();
    return $this->render("list",["yangiliklar"=>$yangiliklar,"sahifa"=>$sahifa]);
}
public function actionView($id)
{
    $yangilik=Yangiliklar::findOne($id);
    return $this->render("view",["yangilik"=>$yangilik]);
}


}