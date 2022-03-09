<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
     "/politex/css/bootstrap.min.css",
      "/politex/css/jquery-ui.min.css",
      "/politex/css/animate.css",
      "/politex/css/css-plugin-collections.css",
      "/politex/css/menuzord-skins/menuzord-rounded-boxed.css",
      "/politex/css/style-main.css",
      "/politex/css/custom-bootstrap-margin-padding.css",
      "/politex/css/responsive.css",
      "/politex/js/revolution-slider/css/settings.css",
      "/politex/js/revolution-slider/css/layers.css",
      "/politex/js/revolution-slider/css/navigation.css",
      "/politex/css/colors/theme-skin-color-set-1.css",
     "/politex/font-awesome/css/font-awesome.min.css",
        'css/site.css',
    ];
    public $js = [
    "/politex/js/jquery-2.2.4.min.js",
 "/politex/js/jquery-ui.min.js",
  "/politex/js/bootstrap.min.js",
"/politex/js/jquery-plugin-collection.js",
"/politex/js/extrachance.js",
"/politex/js/revolution-slider/js/jquery.themepunch.tools.min.js",
  "/politex/js/revolution-slider/js/jquery.themepunch.revolution.min.js",
      "/politex/js/jssor.slider-28.1.0.min.js",
"/politex/js/custom.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.actions.min.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.migration.min.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js ",
      "/politex/js/revolution-slider/js/extensions/revolution.extension.video.min.js ",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
