<?php
include 'SendComponent.php';

class SendComponentDb extends SendComponent
{

    public function send(string $message): string
    {
        echo "Отметка в БД, что сообщение $message отослано <BR>";
        return $message;
    }
}