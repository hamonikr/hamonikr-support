<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOrderInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->order_srl)) {
${'order_srl11_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'equal');
${'order_srl11_argument'}->createConditionValue();
if(!${'order_srl11_argument'}->isValid()) return ${'order_srl11_argument'}->getErrorMessage();
} else
${'order_srl11_argument'} = NULL;if(${'order_srl11_argument'} !== null) ${'order_srl11_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nstore_order`', '`nstore_order`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl11_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>