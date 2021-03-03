<?php


class TelegramDecorator extends Decorator
{
    public function __construct(SendComponent $component)
    {
        parent::__construct($component);
    }

    public function send(string $message) : string
    {
        echo "Telegram: $message<BR>";
        return $this->component->send($message);
    }
}