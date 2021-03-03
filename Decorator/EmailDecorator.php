<?php
include 'Decorator.php';

class EmailDecorator extends Decorator
{
    public function __construct(SendComponent $component)
    {
        parent::__construct($component);
    }

    public function send(string $message) : string
    {
        echo "Email: $message<BR>";
        return $this->component->send($message);
    }
}