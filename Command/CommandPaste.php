<?php


class CommandPaste implements ICommand
{

    function execute(int $begin, int $end): void
    {
        echo "Команда вставки с {$begin} по {$end}<BR>";
    }
}