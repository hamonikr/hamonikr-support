<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteCartItem");
$query->setAction("delete");
$query->setPriority("");

${'cart_srl28_argument'} = new ConditionArgument('cart_srl', $args->cart_srl, 'equal');
${'cart_srl28_argument'}->checkNotNull();
${'cart_srl28_argument'}->createConditionValue();
if(!${'cart_srl28_argument'}->isValid()) return ${'cart_srl28_argument'}->getErrorMessage();
if(${'cart_srl28_argument'} !== null) ${'cart_srl28_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_nstore_cart`', '`nstore_cart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`cart_srl`',$cart_srl28_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>