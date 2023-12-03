<?php

$main_url = "https://api.telegram.org/bot";

function Method($token)
{
    global $main_url;

    return [
        "get_updates" => $main_url . $token . "/getUpdates",
        "send_message" => $main_url . $token . "/sendMessage?",
        "send_document" => $main_url . $token . "/sendDocument",
        "send_photo" => $main_url . $token . "/sendPhoto",
    ];
}
