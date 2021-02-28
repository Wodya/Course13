<?php

class DbEntities
{
    /** @var DbConnection $connection */
    private $connection;
    private $builder;

    public function __construct(DbAbstractFactory $factory, string $serverName, string $DbName)
    {
        $this->connection = $factory->GetConnection($serverName, $DbName);
        $this->builder = $factory->GetQueryBuilder();
    }

    public function get(string $recordClass , $keyValue) : DbRecord
    {
        /** @var DbRecord $record */
        $record = new $recordClass();
        $query = $this->builder->GetQuery($record->tableName, $record->keyField, $keyValue);
        return $this->connection->Execute($query, $recordClass);
    }
    public function add(DbRecord $record)
    {
        $query = $this->builder->InsertQuery($record->tableName, $record);
        $this->connection->Execute($query);

    }
    public function delete(DbRecord $record)
    {
        $query = $this->builder->DeleteQuery($record->tableName, $record->keyField, $record->{$record->keyField});
        $this->connection->Execute($query);
    }

}