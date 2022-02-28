<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="g-sidenav-show  bg-gray-100">
<?php $this->beginBody() ?>

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">

    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/yangiliklar/index">

                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>

                    <span class="nav-link-text ms-1"><?=Yii::t("app","Yangiliklar");?></span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link " href="/elonlar/index">

                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>

                    <span class="nav-link-text ms-1"><?=Yii::t("app","E`lonlar");?></span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link " href="/user/index">

                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>

                    <span class="nav-link-text ms-1"><?=Yii::t("app","Foydalanuvchilar");?></span>
                </a>
            </li>


        </ul>
    </div>

</aside>
<main class="main-content border-radius-lg ">

    <div class="container-fluid py-4">

        <div class="container">
            <?=$content;?>
        </div>
        <ul class="navbar-nav  justify-content-end">
            <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_DROPDOWN,
                'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_LARGE
            ]); ?>
        </ul>
    </div>
</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
