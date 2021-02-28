<?php


abstract class DbQueryBuilder
{
    abstract function GetQuery(string $Table, string $FilterField, string $FilterValue) : string;
    abstract function InsertQuery(string $Table, DbRecord $record) : string;
    abstract function DeleteQuery(string $Table, string $FilterField, string $FilterValue) : string;
}