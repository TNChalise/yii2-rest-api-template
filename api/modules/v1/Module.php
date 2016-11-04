<?php

/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 11/4/16
 * Time: 1:24 PM
 */
namespace api\modules\v1;

/**
 * Class Module
 *
 * For v1
 *
 * @package api\modules\v1
 */
class Module extends \yii\base\Module
{
    /**
     * Controller name space
     *
     * @var string
     */
    public $controllerNamespace = 'api\modules\v1\controllers';

    /**
     * Module init
     */
    public function init()
    {
        parent::init();
    }
}