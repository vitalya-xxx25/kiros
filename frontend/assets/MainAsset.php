<?php
namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'source/owl.carousel.css',
        'source/owl.theme.css',
        'source/owl.transitions.css',
        'source/font-awesome.min.css',
        'source/animate.min.css',
        'source/sppagebuilder.css',
        'source/0.css',
        'source/1.css',
        'source/2.css',
        'source/font-awesome.min(1).css',
        'source/legacy.css',
        'source/template.css',
        'source/preset1.css',
    ];

    public $js = [
        'source/jquery-noconflict.js',
        'source/jquery-migrate.min.js',
        'source/owl.carousel.min.js',
        'source/addon.slider.js',
        'source/sppagebuilder.js',
        'source/jquery.sticky.js',
        'source/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapAsset', // bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset' // bootstrap.js
    ];

    public $jsOptions = [
      'position' =>  View::POS_HEAD,
    ];
}