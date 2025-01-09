<?php
/**
* @copyright Copyright (c) 2015-2025 Yiister
* @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
* @link https://github.com/yiister/yii2-gentelella
*/

namespace yiister\gentelella\assets\theme;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@yiister/gentelella/assets/theme/src';

    public $css = [
        'css/custom.min.css',
    ];

    public $js = [
        'js/helpers/smartresize.min.js',
        'js/custom.min.js',
    ];
}
