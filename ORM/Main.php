<?php

// Бизнес-логика
$entity = new DbEntities(new DbMySqlFactory(),'myServer','myDb');

$record = $entity->get(OrderRecord::class, 1);
$entity->delete($record);
$entity->add($record);