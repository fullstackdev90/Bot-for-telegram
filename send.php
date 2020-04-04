<?php
const TOKEN = 'ваш токен с телеграма';

$url = 'https://api.telegram.org/bot'. TOKEN . '/sendMassage';

$params = [ 'chat_id' => 891217471,
    'text' => 'Я - БОТ!'
    ];
$url = $url . '?' . http_build_query($params);
$response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

var_dump($response);




//1585945244