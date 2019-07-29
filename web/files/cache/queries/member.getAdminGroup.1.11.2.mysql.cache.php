<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAdminGroup");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`is_admin`',"'Y'","equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>