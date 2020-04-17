<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'css/style.css',
		'css/responsive.css',
        //'css/bootstrap.min.css',
        'css/et-fonts.css',
        'css/font-awesome.min.css',
        'css/icofont.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',
        'css/meanmenu.css',
    ];
    public $js = [
        'js/owl.carousel.min.js',
        'js/ajax-mail.js',
        // 'js/bootstrap.min.js',
        'js/imagesloaded.pkgd.min.js',
        'js/isotope.pkgd.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.meanmenu.js',
        'js/main.js',
        'js/plugins.js',
        'js/vendor/modernizr-2.8.3.min.js',
        // 'js/vendor/jquery-1z.12.0.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
