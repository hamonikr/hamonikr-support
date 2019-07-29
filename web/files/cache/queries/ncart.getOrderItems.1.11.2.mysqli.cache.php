<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOrderItems");
$query->setAction("select");
$query->setPriority("");

${'order_srl9_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'equal');
${'order_srl9_argument'}->checkNotNull();
${'order_srl9_argument'}->createConditionValue();
if(!${'order_srl9_argument'}->isValid()) return ${'order_srl9_argument'}->getErrorMessage();
if(${'order_srl9_argument'} !== null) ${'order_srl9_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module10_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module10_argument'}->createConditionValue();
if(!${'module10_argument'}->isValid()) return ${'module10_argument'}->getErrorMessage();
} else
${'module10_argument'} = NULL;if(${'module10_argument'} !== null) ${'module10_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl9_argument,"equal")
,new ConditionWithArgument('`module`',$module10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>