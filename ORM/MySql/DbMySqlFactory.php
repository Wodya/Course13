<?php


class DbMySqlFactory extends DbAbstractFactory
{
    function GetConnection(string $serverName, string $DbName): DbConnection
    {
        return new DbMySqlConnection($serverName, $DbName);
    }

    function GetQueryBuilder(): DbQueryBuilder
    {
        return new DbMySqlQueryBuilder();
    }
}