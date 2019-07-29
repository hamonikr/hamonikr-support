<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDeniedNickNames");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_member_denied_nick_name`', '`member_denied_nick_name`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>