<?php

$main_url = "https://api.telegram.org/bot";

function Method($token, $chat_id = "")
{
    global $main_url;

    return [
        "get_updates" => $main_url . $token . "/getUpdates",
        "send_message" => $main_url . $token . "/sendMessage?chat_id=$chat_id&text=",
        "send_document" => $main_url . $token . "/sendDocument",
        "send_photo" => $main_url . $token . "/sendPhoto",
    ];
}
