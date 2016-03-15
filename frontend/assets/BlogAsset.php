<?php
namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'source/blog/blog.css',
        'source/blog/style.css',
        'source/blog/0.css',
        'source/blog/1.css',
        'source/blog/2.css',
        'source/blog/font-awesome.min.css',
        'source/blog/legacy.css',
        'source/blog/template.css',
        'source/blog/preset1.css',
    ];

    public $js = [
        'source/blog/button.acba75bebf25a5605514ffbb0e01d0eb.js',
        'source/blog/pinit_main.js',
        'source/blog/plusone.js',
        'source/blog/widgets.js',
        'source/blog/jquery-noconflict.js',
        'source/blog/jquery-migrate.min.js',
        'source/blog/caption.js',
        'source/blog/jquery.sticky.js',
        'source/blog/main.js',
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