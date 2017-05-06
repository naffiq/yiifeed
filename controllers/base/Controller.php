<?php
/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 5/6/2017
 * Time: 3:40 PM
 */

namespace app\controllers\base;


class Controller extends \yii\web\Controller
{
    const HEADER_TYPE_TITLE = 1;
    const HEADER_TYPE_BREADCRUMBS = 2;
    const HEADER_TYPE_NONE = 3;

    public $headerType = self::HEADER_TYPE_TITLE;
}