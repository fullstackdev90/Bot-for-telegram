<?php
//Генерируем URL-кодированную строку запроса
//Декодируем строку JavaScript Object Notation
//Читаем содержимое файла в строку
const TOKEN = 'ваш токен с телеграма';
const BASE_URL = 'https://api.telegram.org/bot'. TOKEN . '/';

function sendRequest($method, $params = [])
{
    if (!empty($params))
    {
        $url = BASE_URL . $method .'?' . http_build_query($params);
    } else {
        $url = BASE_URL . $method;
    }
    return json_decode(
        file_get_contents($url),
        JSON_OBJECT_AS_ARRAY);
};

$updates = sendRequest('getRequest');
foreach($updates ['result']as $update)
{
    $chat_id = $updates['message']['chat']['id'];
    sendRequest('sendMessage',['chat_id'=>$chat_id, 'test'=>'Чем могу помочь?']);
}
//var_dump( sendRequest('getUpdates')); //получаем все сообщения чатбота
//var_dump( sendRequest('sendMessage',['chat_id' => 891217471 , 'text' => 'Проба'])); // ответ на сообщения чатбота