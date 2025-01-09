<?php
/**
 * @copyright Copyright (c) 2015-2025 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link https://github.com/yiister/yii2-gentelella
 */

namespace yiister\gentelella\assets;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'yiister\gentelella\assets\bootstrapProgressbar\BootstrapProgressbar',
        'yiister\gentelella\assets\theme\ThemeAsset',
        'yiister\gentelella\assets\extension\ExtensionAsset',
    ];
}
