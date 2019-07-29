<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteCategory");
$query->setAction("delete");
$query->setPriority("");

$query->setTables(array(
new Table('`hme_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>