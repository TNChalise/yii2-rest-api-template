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
 * Class UserController
 *
 * @package api\modules\v1\controllers
 */
class UserController extends ActiveController
{
    /**
     * Database table assigned to this model class.
     *
     * For example, I have assigned this with the country table.
     *
     * @var string
     */
    public $modelClass = 'api\modules\v1\models\Country';

    /**
     * Restful actions for user controller.
     *
     * @return array
     */
    public function actions()
    {
        // GET ACTIONS
        $actions = parent::actions();

        // UNSET ACTIONS
        unset($actions['delete'], $actions['create']);

        // CUSTOM FUNCTION FOR INDEX
        // By doing this, we can customize our index action
        $actions['index']['prepareDataProvider'] = [$this, 'actionIndex'];

        return $actions;
    }

    /**
     * Custom index action
     *
     * @return array
     */
    public function actionIndex()
    {
        return [
            'your' => 'custom data'
        ];
    }

    /**
     * Additional action included in rest ful api.
     *
     * @return array
     */
    public function actionRest()
    {
        return [
            'rest' => true
        ];
    }
}