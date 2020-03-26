<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
   // public $basePath = '@webroot';
  //  public $baseUrl = '@web';
    public $sourcePath = '@bower/salim-theme';
    public $css = [
        './main.8d288f825d8dffbbe55e.css',
    ];
    public $js = [
        './assets/scripts/main.8d288f825d8dffbbe55e.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
