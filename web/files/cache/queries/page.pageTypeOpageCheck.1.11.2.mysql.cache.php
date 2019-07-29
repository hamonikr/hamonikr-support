<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("pageTypeOpageCheck");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`',"'opage'","equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>