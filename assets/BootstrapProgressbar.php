<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace yiister\gentelella\assets;

use yii\web\AssetBundle;

class BootstrapProgressbar extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/vendors/bootstrap-progressbar/';
    public $css = [
//        'css/custom.css',
    ];
    public $js = [
        'bootstrap-progressbar.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}