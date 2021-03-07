<?php


interface ICommand
{
    function execute(int $begin, int $end) : void;
}