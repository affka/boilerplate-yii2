<?php

return \yii\helpers\ArrayHelper::merge(
    require 'main.php',
    [
        'defaultRoute' => 'core/site/index',
        'components' => [
            'request' => [
                'cookieValidationKey' => 'q2%s2~5twSe2OkBJ8H6k6wUI@fe~Ah9|',
            ],
            'user' => [
                'identityClass' => 'app\core\models\User',
                'enableAutoLogin' => true,
            ],
            'errorHandler' => [
                'errorAction' => 'core/site/error',
            ],
        ],
    ]
);