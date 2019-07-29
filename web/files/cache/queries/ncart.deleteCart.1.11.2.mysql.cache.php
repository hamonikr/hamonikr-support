<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteCart");
$query->setAction("delete");
$query->setPriority("");

${'cart_srl1_argument'} = new ConditionArgument('cart_srl', $args->cart_srl, 'equal');
${'cart_srl1_argument'}->checkFilter('number');
${'cart_srl1_argument'}->checkNotNull();
${'cart_srl1_argument'}->createConditionValue();
if(!${'cart_srl1_argument'}->isValid()) return ${'cart_srl1_argument'}->getErrorMessage();
if(${'cart_srl1_argument'} !== null) ${'cart_srl1_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`cart_srl`',$cart_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>