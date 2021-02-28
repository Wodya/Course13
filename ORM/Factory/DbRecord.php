<?php


abstract class DbRecord
{
    public $tableName = self::class ;
    public $keyField = "id";
}