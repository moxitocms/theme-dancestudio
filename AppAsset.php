<?php

namespace frontend\themes\dancestudio;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';
    public $baseUrl = '@web';
    public $css = [
        'css/style.min.css',
    ];
    public $js = [
        'js/scripts.min.js',
    ];
}
