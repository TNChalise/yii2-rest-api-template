<?php
/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 11/4/16
 * Time: 12:18 PM
 */

namespace api\modules\v1\controllers;


use yii\rest\ActiveController;

/**
 * Class CountryController
 *
 * @package api\modules\v1\controllers
 */
class CountryController extends ActiveController
{
    /**
     * Database table assigned with this model class
     *
     * @var string
     */
    public $modelClass = 'api\modules\v1\models\Country';
}