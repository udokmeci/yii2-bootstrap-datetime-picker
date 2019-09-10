<?php

namespace udokmeci\bdtp;
use yii\web\AssetBundle;


class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment/min';
    public $css = [
    ];
    public $js = [
        'moment-with-locales.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
