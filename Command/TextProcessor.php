<?php

/**
 * Class TextProcessor
 * $CopyCommand ICommand
 * $CutCommand ICommand
 * $PastCommand ICommand
 */
class TextProcessor
{
    private $begin;
    private $end;

    private $CopyCommand;
    private $CutCommand;
    private $PasteCommand;

    public function __construct(ICommand $CopyCommand, ICommand $CutCommand, ICommand $PasteCommand)
    {
        $this->CopyCommand = $CopyCommand;
        $this->CutCommand = $CutCommand;
        $this->PasteCommand = $PasteCommand;
    }

    public function SetBegin($pos)
    {
        $this->begin = $pos;
    }
    public function MoveCursor($count) : void
    {
        $this->end = $this->begin + $count;
    }
    public function Copy() : void
    {
        echo "Копирование текста<BR>";
        $this->CopyCommand->Execute($this->begin, $this->end);
    }
    public function Cut() : void
    {
        echo "Вырезание текста<BR>";
        $this->CutCommand->Execute($this->begin, $this->end);
    }
    public function Paste() : void
    {
        echo "Вставка текста<BR>";
        $this->PasteCommand->Execute($this->begin, $this->end);
    }

}