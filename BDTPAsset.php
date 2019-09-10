<?php

namespace udokmeci\bdtp;
use yii\web\AssetBundle;


class BDTPAsset extends AssetBundle
{
    public $sourcePath = '@bower/eonasdan-bootstrap-datetimepicker/build';
    public $css = [
        'css/bootstrap-datetimepicker.min.css',
    ];
    public $js = [
        'js/bootstrap-datetimepicker.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'udokmeci\bdtp\MomentAsset'
    ];
}
