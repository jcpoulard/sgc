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
/**
 * @author Jean Came <jcpoulard@gmail.com>
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        //'css/bootstrap.min.css',
        'css/font-awesome/css/font-awesome.min.css',
        'css/Ionicons/css/ionicons.min.css',
        'css/jquery-jvectormap.css',
        'css/AdminLTE.min.css',
        'css/skins/skin-red-light.min.css',
        
        
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
