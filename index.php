<?php

##
## Main program of interface for Telegram bot
##
## Author: Daniil Dybka, daniil@dybka.ru
##

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include "token.php";
include "methods.php";

$token = Token()["token_bot"];
$chat_id = Token()["admin_id"];

$message = urlencode("Простое текстовое сообщение.");

$url = Method($token, $chat_id) . $message;
