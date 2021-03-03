<?php
include 'SendComponentDb.php';
include 'EmailDecorator.php';
include 'SmsDecorator.php';
include 'TelegramDecorator.php';

//(new SendComponentDb())->send('Message 1');
(new EmailDecorator(new SmsDecorator(new TelegramDecorator(new SendComponentDb()))))->send("Сообщение 1");
