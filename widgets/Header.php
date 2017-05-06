<?php
/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 5/6/2017
 * Time: 3:48 PM
 */

namespace app\widgets;


use app\controllers\base\Controller;
use yii\base\Widget;

/**
 * Class Header
 * @package app\widgets
 */
class Header extends Widget
{
    /**
     * @var int One of the types, defined in [[\app\controllers\base\Controller]] by `$headerType` field
     * @see Controller::$headerType
     */
    public $type = Controller::HEADER_TYPE_TITLE;

    public function init()
    {
        parent::init();

        if (!empty(\Yii::$app->controller->headerType)) {
            $this->type = \Yii::$app->controller->headerType;
        }
    }

    /**
     * @inheritdoc
     *
     * Renders header, if [[\app\widgets\Header::$type]] is not equal to
     * [[\app\controllers\base\Controller::HEADER_TYPE_NONE]]
     */
    public function run()
    {
        return $this->render('header', ['type' => $this->type]);
    }
}