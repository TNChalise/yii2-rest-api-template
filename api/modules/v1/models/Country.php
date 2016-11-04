<?php
/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 11/4/16
 * Time: 12:17 PM
 */

namespace api\modules\v1\models;


use yii\db\ActiveRecord;

/**
 * Class Country
 *
 * @package api\modules\v1\models
 */
class Country extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['code'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required']
        ];
    }
}