<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/custom-blue.css',
        'css/custom-green.css',
        'css/custom-purple.css',
        'css/custom-red.css',
        'css/ionicons.min.css',
        'css/magnific-popup.css',
        'css/owl.carousel.css',
        'css/owl.transitions.css',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/custom-fun.js',
        'js/enquire.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.magnific-popup.js',
        'js/jquery.min.js',
        'js/jquery.nicescroll.js',
        'js/jquery.nicescroll.plus.js',
        'js/jquery.pickmeup.js',
        'js/jquery.scrollUp.js',
        'js/jquery.simpleWeather.min.js',
        'js/jquery.ticker.js',
        'js/masonry.pkgd.js',
        'js/moment.min.js',
        'js/owl.carousel.js',
        'js/style-switcher.js',
        'js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];


}
