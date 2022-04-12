<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

$yii = (new yii\web\Application($config));

try {
    $data = file_get_contents("php://input");
    Yii::error($data, 'tmf_helper');
} catch (Exception $e) {
    Yii::error($e->getMessage(), 'tmf_helper');
}

return http_response_code(200);