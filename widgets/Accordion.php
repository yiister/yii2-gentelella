<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace yiister\gentelella\widgets;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Accordion extends Widget
{
    /**
     * @var array the list of items to render
     * Each item allows the next string attributes:
     * title - the string header of item
     * active - whether the item is opened
     * id - the string identificator for the item
     * content - the string content of this item
     * options - the array of a HTML options for the content tag
     */
    public $items = [];

    /**
     * @var array the HTML attributes for the widget container tag
     */
    public $options = [
        'class' => 'accordion',
        'role' => 'tablist',
        'aria-multiselectable' => 'true',
    ];

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        echo Html::beginTag('div', $this->options);
        foreach ($this->items as $key => $item) {
            $itemOptions = ArrayHelper::getValue($item, 'options', []);
            if (!isset($itemOptions['id'])) {
                $itemOptions['id'] = isset($item['id'])
                    ? $item['id']
                    : $this->options['id'] . '-' . $key;
            }
            $itemOptions = ArrayHelper::merge(
                $itemOptions,
                [
                    'aria-labelledby' => 'heading-' . $itemOptions['id'],
                    'class' => 'panel-collapse collapse',
                    'id' => $itemOptions['id'],
                    'role' => 'tabpanel',
                ]
            );
            $isActive = ArrayHelper::getValue($item, 'active', false);
            if ($isActive) {
                Html::addCssClass($itemOptions, 'in');
            }
            echo Html::beginTag('div', ['class' => 'panel']);
            echo Html::a(
                Html::tag(
                    'h4',
                    $item['title'],
                    [
                        'class' => 'panel-title',
                    ]
                ),
                '#' . $itemOptions['id'],
                [
                    'class' => 'panel-heading',
                    'id' => 'heading-' . $itemOptions['id'],
                    'role' => 'tab',
                    'data-toggle' => 'collapse',
                    'data-parent' => '#' . $this->options['id'],
                    'aria-expanded' => $isActive ? 'true' : 'false',
                    'aria-controls' => $itemOptions['id'],
                ]
            );
            echo Html::tag(
                'div',
                Html::tag('div', $item['content'], ['class' => 'panel-body']),
                $itemOptions
            );
            echo Html::endTag('div');
        }
        echo Html::endTag('div');
    }
}
