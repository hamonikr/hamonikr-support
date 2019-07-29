<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTransactionByOrderSrl");
$query->setAction("select");
$query->setPriority("");

${'order_srl1_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'equal');
${'order_srl1_argument'}->checkNotNull();
${'order_srl1_argument'}->createConditionValue();
if(!${'order_srl1_argument'}->isValid()) return ${'order_srl1_argument'}->getErrorMessage();
if(${'order_srl1_argument'} !== null) ${'order_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_epay_transactions`', '`epay_transactions`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>