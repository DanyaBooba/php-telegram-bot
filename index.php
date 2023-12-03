<?php

##
## Main program of interface for Telegram bot
##
## Author: Daniil Dybka, daniil@dybka.ru
##

##
## Init
##

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include "token.php";
include "methods.php";

##
## Message
##

$token = Token()["token_bot"];

$get = [
    "chat_id" => Token()["admin_id"],
    "text" => "Новое сообщение пользователю.",
    "parse_mode" => "html"
];

##
## Url
##

$url = curl_init(Method($token)["send_message"] . http_build_query($get));

curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($url, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($url, CURLOPT_HEADER, 0);

$result = curl_exec($url);

curl_close($url);

##
## Json
##

$json = json_decode($result, 1);

var_dump($json["result"]["chat"]["id"]);
