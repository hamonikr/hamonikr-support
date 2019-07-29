<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOrderInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->order_srl)) {
${'order_srl8_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'equal');
${'order_srl8_argument'}->createConditionValue();
if(!${'order_srl8_argument'}->isValid()) return ${'order_srl8_argument'}->getErrorMessage();
} else
${'order_srl8_argument'} = NULL;if(${'order_srl8_argument'} !== null) ${'order_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_ncart_order`', '`ncart_order`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>