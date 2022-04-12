<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

try {
    $data = file_get_contents("php://input");
} catch (Exception $e) {
    \Yii::error($e->getMessage(), 'tmf_helper');
}
\Yii::error('test2', 'tmf_helper');

return http_response_code(200);