<?php


class CommandCopy implements ICommand
{

    function execute(int $begin, int $end): void
    {
        echo "Команда копирования с {$begin} по {$end}<BR>";
    }
}