<?php
/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 11/4/16
 * Time: 2:48 PM
 */


/**
 * Normal api rules for user controller
 */
return [
    'class'         => 'yii\rest\UrlRule',
    'controller'    => 'v1/user',  // our country api rule,
    'tokens'        => [
        '{id}' => '<id:\\w+>'
    ],
    // Add extra action in the api.
    'extraPatterns' => [
        'GET rest' => 'rest'
    ]
];