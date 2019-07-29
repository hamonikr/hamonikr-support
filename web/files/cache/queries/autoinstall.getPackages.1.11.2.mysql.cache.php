<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackages");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>