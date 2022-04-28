<?php

namespace common\widgets;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\Yangiliklar;

class YangilikWidget extends Widget
{
 public $count;

    public function init()
    {
        parent::init();
        if ($this->count === null) {
            $this->count = 4;
        }
    }
    public function run()
    {
        $yangiliklar=Yangiliklar::find()->all();
        return $this->render("new",["yangiliklar"=>$yangiliklar]);

    }
}