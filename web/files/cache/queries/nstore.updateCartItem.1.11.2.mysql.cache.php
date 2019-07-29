<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCartItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->order_srl)) {
${'order_srl77_argument'} = new Argument('order_srl', $args->{'order_srl'});
if(!${'order_srl77_argument'}->isValid()) return ${'order_srl77_argument'}->getErrorMessage();
} else
${'order_srl77_argument'} = NULL;if(${'order_srl77_argument'} !== null) ${'order_srl77_argument'}->setColumnType('number');
if(isset($args->quantity)) {
${'quantity78_argument'} = new Argument('quantity', $args->{'quantity'});
if(!${'quantity78_argument'}->isValid()) return ${'quantity78_argument'}->getErrorMessage();
} else
${'quantity78_argument'} = NULL;if(${'quantity78_argument'} !== null) ${'quantity78_argument'}->setColumnType('number');
if(isset($args->discount_amount)) {
${'discount_amount79_argument'} = new Argument('discount_amount', $args->{'discount_amount'});
if(!${'discount_amount79_argument'}->isValid()) return ${'discount_amount79_argument'}->getErrorMessage();
} else
${'discount_amount79_argument'} = NULL;if(${'discount_amount79_argument'} !== null) ${'discount_amount79_argument'}->setColumnType('number');
if(isset($args->discount_info)) {
${'discount_info80_argument'} = new Argument('discount_info', $args->{'discount_info'});
if(!${'discount_info80_argument'}->isValid()) return ${'discount_info80_argument'}->getErrorMessage();
} else
${'discount_info80_argument'} = NULL;if(${'discount_info80_argument'} !== null) ${'discount_info80_argument'}->setColumnType('varchar');
if(isset($args->discounted_price)) {
${'discounted_price81_argument'} = new Argument('discounted_price', $args->{'discounted_price'});
if(!${'discounted_price81_argument'}->isValid()) return ${'discounted_price81_argument'}->getErrorMessage();
} else
${'discounted_price81_argument'} = NULL;if(${'discounted_price81_argument'} !== null) ${'discounted_price81_argument'}->setColumnType('number');

${'cart_srl82_argument'} = new ConditionArgument('cart_srl', $args->cart_srl, 'equal');
${'cart_srl82_argument'}->checkNotNull();
${'cart_srl82_argument'}->createConditionValue();
if(!${'cart_srl82_argument'}->isValid()) return ${'cart_srl82_argument'}->getErrorMessage();
if(${'cart_srl82_argument'} !== null) ${'cart_srl82_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`order_srl`', ${'order_srl77_argument'})
,new UpdateExpression('`quantity`', ${'quantity78_argument'})
,new UpdateExpression('`discount_amount`', ${'discount_amount79_argument'})
,new UpdateExpression('`discount_info`', ${'discount_info80_argument'})
,new UpdateExpression('`discounted_price`', ${'discounted_price81_argument'})
));
$query->setTables(array(
new Table('`hme_nstore_cart`', '`nstore_cart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`cart_srl`',$cart_srl82_argument,"equal")
,new ConditionWithoutArgument('`order_status`','0',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>