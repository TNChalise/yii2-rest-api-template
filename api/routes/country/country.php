<?php
/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 11/4/16
 * Time: 2:45 PM
 */

/**
 * Normal api rules for country controller.
 */
return [
    'class'      => 'yii\rest\UrlRule',
    'controller' => 'v1/country',  // our country api rule,
    'tokens'     => [
        '{id}' => '<id:\\w+>'
    ]
];