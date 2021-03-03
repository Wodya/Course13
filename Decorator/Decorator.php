<?php


abstract class Decorator extends SendComponent
{
    protected $component;
    public function __construct(SendComponent $component)
    {
        $this->component = $component;
    }
    public function send(string $message): string
    {
        return $this->component->send($message);
    }
}