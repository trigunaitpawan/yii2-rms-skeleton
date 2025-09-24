<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

return [
    'id' => 'yii2-rms',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => ['class' => 'app\modules\admin\Module'],
        'applicant' => ['class' => 'app\modules\applicant\Module'],
        'interview' => ['class' => 'app\modules\interview\Module'],
    ],
    'components' => [
        'request' => ['cookieValidationKey' => 'PUT-YOUR-SECRET-HERE'],
        'user' => [
            'identityClass' => 'app\common\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => ['errorAction' => 'site/error'],
        'db' => $db,
        'fileUpload' => [
            'class' => 'app\common\components\FileUpload',
            'uploadPath' => '@webroot/uploads',
        ],
    ],
    'params' => $params,
];
