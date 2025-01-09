<?php
/**
 * @copyright Copyright (c) 2015-2025 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link https://github.com/yiister/yii2-gentelella
 */

namespace yiister\gentelella\assets\extension;

use yii\web\AssetBundle;

class ExtensionAsset extends AssetBundle
{
    public $sourcePath = '@yiister/gentelella/assets/extension/src';

    public $js = [
        'js/extension.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
