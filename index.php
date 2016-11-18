<?php
//Инициализация cURL и задание адреса
$ch = curl_init('https://www.gazeta.ru/export_news.shtml'); //убрать пробел
//Установка опций
curl_setopt($ch, CURLOPT_USERAGENT, 'poshli na her sozdeteli toster');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_REFERER, 'http://google.com');//здесь реферрера
//выполнение (результат отобразится на экран)
curl_exec($ch);
//Закрытие соединения
curl_close($ch);