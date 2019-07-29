<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTransactionAll");
$query->setAction("delete");
$query->setPriority("");

$query->setTables(array(
new Table('`hme_epay_transactions`', '`epay_transactions`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>