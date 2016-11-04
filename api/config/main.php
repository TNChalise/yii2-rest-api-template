<?php
/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 11/4/16
 * Time: 12:19 PM
 */

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/../../common/config/bootstrap.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

// minimize rules
$rules = require(__DIR__ . '/../routes/route.php');

return [
    'id'         => 'app-api',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'modules'    => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class'    => 'api\modules\v1\Module'
        ]
    ],
    'components' => [
        'user'       => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => false,
        ],
        'log'        => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl'     => true,
            'enableStrictParsing' => true,
            'showScriptName'      => false,
            'rules'               => $rules,
        ],

        // Customize your api response.
        'response'   => [
            'class'         => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                if ($response->data !== null) {
                    $response->data = [
                        'success' => $response->isSuccessful,
                        'data'    => $response->data,
                    ];
                }
            },
        ]
    ],
    'params'     => $params,
];