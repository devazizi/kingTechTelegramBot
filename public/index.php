<?php

echo 'missing argument';

include '../src/config.php';

$json = file_get_contents('php://input');
$result = json_decode($json);

$bootId = bootId();

$chatId = $result->message->chat->id;
$message = $result->message->text;

file_get_contents("https://api.telegram.org/bot{$chatId}/sendmessage?text=سلام چطوری&chat_id={$chatId}");