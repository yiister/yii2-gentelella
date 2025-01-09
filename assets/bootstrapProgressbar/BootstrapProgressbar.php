<?php
/**
 * @copyright Copyright (c) 2015-2025 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link https://github.com/yiister/yii2-gentelella
 */

namespace yiister\gentelella\assets\bootstrapProgressbar;

use yii\web\AssetBundle;

class BootstrapProgressbar extends AssetBundle
{
    public $sourcePath = '@yiister/gentelella/assets/bootstrapProgressbar/src';

    public $js = [
        'js/bootstrap-progressbar.min.js',
    ];

    public $depends = [
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}