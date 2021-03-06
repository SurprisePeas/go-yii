<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id'                  => 'app-appmobile',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'appmobile\controllers',
    'bootstrap'           => ['log'],
    'modules'             => [],
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf-appmobile',
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-appmobile', 'httpOnly' => true],
        ],
        'session'      => [
            // this is the name of the session cookie used for login on the appmobile
            'name' => 'advanced-appmobile',
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl'     => true,
//            'enableStrictParsing' => true,
            'showScriptName'      => false,
//            "rules"               => [
//                'GET auth/index' => 'auth/index',
//            ],
        ],
    ],
    'params'              => $params,
];
