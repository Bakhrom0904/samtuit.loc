<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       "/admin/img/apple-icon.png",
        "/admin/img/favicon.png",
        "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700",
        "/admin/css/nucleo-icons.css",
        "/admin/css/nucleo-svg.css",
        "https://fonts.googleapis.com/icon?family=Material+Icons+Round",
        "/admin/css/material-dashboard.css?v=3.0.0",
        'css/site.css',
    ];
    public $js = [
         "https://kit.fontawesome.com/42d5adcbca.js",
        "/admin/js/core/popper.min.js",
        "/admin/js/core/bootstrap.min.js",
        "/admin/js/plugins/perfect-scrollbar.min.js",
        "/admin/js/plugins/smooth-scrollbar.min.js",
        "/admin/js/plugins/chartjs.min.js",
'/js/main1.js',
    '/js/main2.js',
    "https://buttons.github.io/buttons.js",
        "/admin/js/material-dashboard.min.js?v=3.0.0",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
