<?php
/**
 * @copyright Copyright (c) 2015-2025 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link https://github.com/yiister/yii2-gentelella
 */

namespace yiister\gentelella\assets\gridView;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@yiister/gentelella/assets/gridView/src';
    public $css = [
        'css/dataTables.bootstrap.min.css',
    ];
    public $js = [];
    public $depends = [
        'yiister\gentelella\assets\Asset',
    ];
}
