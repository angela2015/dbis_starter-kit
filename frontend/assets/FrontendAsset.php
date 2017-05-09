<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
       /*'css/style.css',*/
        'css/external/style.css?v=1',
        'css/external/z-nav/z-nav.css',
        'css/external/rs-plugin/css/settings.css',
        'css/external/swiper/idangerous.swiper.css',

    ];

    public $js = [
        'js/app.js',
        'js/jquery-1.10.1.min.js',
        'js/bootstrap.min.js',
        'css/external/modernizr/modernizr.custom.js',
        "css/external/inview/jquery.inview.js",
        "css/external/z-nav/jquery.mobile.menu.js",
		"css/external/rs-plugin/js/jquery.themepunch.plugins.min.js",
		"css/external/rs-plugin/js/jquery.themepunch.revolution.min.js",
	    "css/external/swiper/idangerous.swiper.js",
	    "css/external/twitterfeed/twitterfeed.js",
	    "css/external/scrollto/jquery.scrollTo.min.js",
		"css/external/livicons/livicons-1.3.min.js",
		"css/external/livicons/raphael-min.js",
	    "css/external/waypoint/waypoints.min.js",
        "css/external/inview/jquery.inview.js",
        "js/custom.js",

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'common\assets\Html5shiv',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
