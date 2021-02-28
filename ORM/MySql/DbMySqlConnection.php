<?php


class DbMySqlConnection extends DbConnection
{
    function Connect(string $Server, string $DbName) : void
    {
        // Соединение с БД MySql
    }

    function Execute(string $query, string $recordClass = null)
    {
        // Выполнение запроса на MySql
    }
}