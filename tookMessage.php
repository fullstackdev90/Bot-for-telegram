<?php

const TOKEN = 'ваш токен с телеграма';

echo $url = 'https://api.telegram.org/bot'. TOKEN . '/getUpdates';

$response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

var_dump($response);