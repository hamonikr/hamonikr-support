<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOrderStat");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`order_status`', '`order_status`')
,new SelectExpression('COUNT(`order_status`)', '`count`')
));
$query->setTables(array(
new Table('`hme_nstore_order`', '`nstore_order`')
));
$query->setConditions(array());
$query->setGroups(array(
'`order_status`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>