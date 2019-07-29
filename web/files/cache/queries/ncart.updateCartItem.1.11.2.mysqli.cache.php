<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCartItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->order_srl)) {
${'order_srl22_argument'} = new Argument('order_srl', $args->{'order_srl'});
if(!${'order_srl22_argument'}->isValid()) return ${'order_srl22_argument'}->getErrorMessage();
} else
${'order_srl22_argument'} = NULL;if(${'order_srl22_argument'} !== null) ${'order_srl22_argument'}->setColumnType('number');
if(isset($args->quantity)) {
${'quantity23_argument'} = new Argument('quantity', $args->{'quantity'});
if(!${'quantity23_argument'}->isValid()) return ${'quantity23_argument'}->getErrorMessage();
} else
${'quantity23_argument'} = NULL;if(${'quantity23_argument'} !== null) ${'quantity23_argument'}->setColumnType('number');
if(isset($args->discount_amount)) {
${'discount_amount24_argument'} = new Argument('discount_amount', $args->{'discount_amount'});
if(!${'discount_amount24_argument'}->isValid()) return ${'discount_amount24_argument'}->getErrorMessage();
} else
${'discount_amount24_argument'} = NULL;if(${'discount_amount24_argument'} !== null) ${'discount_amount24_argument'}->setColumnType('number');
if(isset($args->discount_info)) {
${'discount_info25_argument'} = new Argument('discount_info', $args->{'discount_info'});
if(!${'discount_info25_argument'}->isValid()) return ${'discount_info25_argument'}->getErrorMessage();
} else
${'discount_info25_argument'} = NULL;if(${'discount_info25_argument'} !== null) ${'discount_info25_argument'}->setColumnType('varchar');
if(isset($args->discounted_price)) {
${'discounted_price26_argument'} = new Argument('discounted_price', $args->{'discounted_price'});
if(!${'discounted_price26_argument'}->isValid()) return ${'discounted_price26_argument'}->getErrorMessage();
} else
${'discounted_price26_argument'} = NULL;if(${'discounted_price26_argument'} !== null) ${'discounted_price26_argument'}->setColumnType('number');

${'cart_srl27_argument'} = new ConditionArgument('cart_srl', $args->cart_srl, 'equal');
${'cart_srl27_argument'}->checkNotNull();
${'cart_srl27_argument'}->createConditionValue();
if(!${'cart_srl27_argument'}->isValid()) return ${'cart_srl27_argument'}->getErrorMessage();
if(${'cart_srl27_argument'} !== null) ${'cart_srl27_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`order_srl`', ${'order_srl22_argument'})
,new UpdateExpression('`quantity`', ${'quantity23_argument'})
,new UpdateExpression('`discount_amount`', ${'discount_amount24_argument'})
,new UpdateExpression('`discount_info`', ${'discount_info25_argument'})
,new UpdateExpression('`discounted_price`', ${'discounted_price26_argument'})
));
$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`cart_srl`',$cart_srl27_argument,"equal")
,new ConditionWithoutArgument('`order_status`','0',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>