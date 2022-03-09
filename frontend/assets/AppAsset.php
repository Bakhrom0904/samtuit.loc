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
      "web/politex/css/bootstrap.min.css",
       "web/politex/css/jquery-ui.min.css",
       "web/politex/css/animate.css",
       "web/politex/css/css-plugin-collections.css",
       "web/politex/css/menuzord-skins/menuzord-rounded-boxed.css",
       "web/politex/css/style-main.css",
       "web/politex/css/custom-bootstrap-margin-padding.css",
       "web/politex/css/responsive.css",
       "web/politex/js/revolution-slider/css/settings.css",
       "web/politex/js/revolution-slider/css/layers.css",
       "web/politex/js/revolution-slider/css/navigation.css",
       "web/politex/css/colors/theme-skin-color-set-1.css",
      "web/politex/font-awesome/css/font-awesome.min.css",
        'css/site.css',
    ];
    public $js = [
     "web/politex/js/jquery-2.2.4.min.js",
  "web/politex/js/jquery-ui.min.js",
   "web/politex/js/bootstrap.min.js",
"web/politex/js/jquery-plugin-collection.js",
 "web/politex/js/extrachance.js",
"/web/politex/js/revolution-slider/js/jquery.themepunch.tools.min.js",
   "web/politex/js/revolution-slider/js/jquery.themepunch.revolution.min.js",
       "web/politex/js/jssor.slider-28.1.0.min.js",
"/web/politex/js/custom.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.actions.min.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.migration.min.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js ",
       "web/politex/js/revolution-slider/js/extensions/revolution.extension.video.min.js ",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
