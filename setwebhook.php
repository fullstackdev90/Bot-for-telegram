<?php
const TOKEN = 'ваш токен телеграм бота';
$method = 'setWebhook';
$url = 'https:api.telegram.org/bot'.TOKEN.'/'.$method;
$option=[
        'url'=>'https://Name_your_host/index.php',
];
$response = file_get_contents($url.'?'.http_build_query($options));
var_dump($response);

//на сервере прописываеться код скрипта
// <?phpfile_put_contents(__DIR__ . '/log.txt', file_get_contents('php://input'));