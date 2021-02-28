<?php


abstract class DbConnection
{
    public function __construct(string $serverName, string $DbName)
    {
        $this->Connect($serverName, $DbName);
    }

    abstract function Connect(string $Server, string $DbName) : void;
    abstract function Execute(string $query, string $recordClass = null);

}