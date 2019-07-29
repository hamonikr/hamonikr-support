<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteOrder");
$query->setAction("delete");
$query->setPriority("");

${'order_srl43_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'equal');
${'order_srl43_argument'}->checkFilter('number');
${'order_srl43_argument'}->checkNotNull();
${'order_srl43_argument'}->createConditionValue();
if(!${'order_srl43_argument'}->isValid()) return ${'order_srl43_argument'}->getErrorMessage();
if(${'order_srl43_argument'} !== null) ${'order_srl43_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_nstore_order`', '`nstore_order`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl43_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>