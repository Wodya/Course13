<?php


class CommandCut implements ICommand
{

    function execute(int $begin, int $end): void
    {
        echo "Команда вырезания с {$begin} по {$end}<BR>";
    }
}