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
        "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700",
        "/loyiha/css/nucleo-icons.css",
        "/loyiha/css/nucleo-svg.css",
        "/loyiha/css/nucleo-svg.css",
        "/loyiha/css/argon-dashboard.css?v=2.0.0",
        '/css/site.css',
    ];
    public $js = [
        "https://kit.fontawesome.com/42d5adcbca.js",
        "/loyiha/js/core/popper.min.js",
        "/loyiha/js/core/bootstrap.min.js",
        "/loyiha/js/plugins/perfect-scrollbar.min.js",
        "/loyiha/js/plugins/smooth-scrollbar.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
