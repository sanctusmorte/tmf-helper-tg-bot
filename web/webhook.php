<?php

$data = file_get_contents("php://input");

Yii::error(gettype($data), 'tmf_helper');

header("HTTP/1.1 200 OK");