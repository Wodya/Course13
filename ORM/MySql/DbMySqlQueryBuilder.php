<?php


class DbMySqlQueryBuilder extends DbQueryBuilder
{

    function GetQuery(string $Table, string $FilterField, string $FilterValue): string
    {
        // Формирование SQL get-запроса
        return "Select";
    }
    function InsertQuery(string $Table, DbRecord $record): string
    {
        // Формирование SQL insert-запроса
        return "Insert";
    }
    function DeleteQuery(string $Table, string $FilterField, string $FilterValue): string
    {
        // Формирование SQL delete-запроса
        return "Delete";
    }
}