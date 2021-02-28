<?php


abstract class DbAbstractFactory
{
    abstract function GetConnection(string $serverName, string $DbName) : DbConnection;
    abstract function GetQueryBuilder() : DbQueryBuilder;
}