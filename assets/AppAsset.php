<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\bootstrap4\BootstrapPluginAsset;

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
        'vendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'css/sb-admin-2.min.css',
    ];
    public $js = [
        'vendor/jquery-easing/jquery.easing.min.js',
        'js/sb-admin-2.min.js',
        //'vendor/chart.js/Chart.min.js',
        //'js/demo/chart-area-demo.js',
        //'js/demo/chart-pie-demo.js',
        'js/bootbox.all.min.js',
        'js/funciones.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        JqueryAsset::class,
        //'yii\bootstrap4\BootstrapAsset',
        BootstrapPluginAsset::class,
    ];
}
