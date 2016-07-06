<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace yiister\gentelella\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Timeline extends Widget
{
    /**
     * @var array the HTML attributes for the widget container tag
     */
    public $options = ['class' => 'list-unstyled timeline widget'];

    /**
     * @var array the list of items to render
     * Each item allows the next string attributes:
     * title - the header of item
     * byline - the string with time and author
     * content - the main item content
     */
    public $items = [];

    public function run()
    {
        echo Html::beginTag('ul', $this->options);
        foreach ($this->items as $item) {
            echo Html::beginTag('li');
            echo Html::beginTag('div', ['class' => 'block']);
            echo Html::beginTag('div', ['class' => 'block-content']);
            if (isset($item['title'])) {
                echo Html::tag('h2', $item['title'], ['class' => 'title']);
            }
            if (isset($item['byline'])) {
                echo Html::tag('div', $item['byline'], ['class' => 'byline']);
            }
            if (isset($item['content'])) {
                echo Html::tag('div', $item['content'], ['class' => 'excerpt']);
            }
            echo Html::endTag('div');
            echo Html::endTag('div');
            echo Html::endTag('li');
        }
        echo Html::endTag('ul');
    }
}
