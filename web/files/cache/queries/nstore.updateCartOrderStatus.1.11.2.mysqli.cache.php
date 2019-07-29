<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCartOrderStatus");
$query->setAction("update");
$query->setPriority("");
if(isset($args->order_status)) {
${'order_status18_argument'} = new Argument('order_status', $args->{'order_status'});
if(!${'order_status18_argument'}->isValid()) return ${'order_status18_argument'}->getErrorMessage();
} else
${'order_status18_argument'} = NULL;if(${'order_status18_argument'} !== null) ${'order_status18_argument'}->setColumnType('char');
if(isset($args->express_id)) {
${'express_id19_argument'} = new Argument('express_id', $args->{'express_id'});
if(!${'express_id19_argument'}->isValid()) return ${'express_id19_argument'}->getErrorMessage();
} else
${'express_id19_argument'} = NULL;if(${'express_id19_argument'} !== null) ${'express_id19_argument'}->setColumnType('char');
if(isset($args->invoice_no)) {
${'invoice_no20_argument'} = new Argument('invoice_no', $args->{'invoice_no'});
if(!${'invoice_no20_argument'}->isValid()) return ${'invoice_no20_argument'}->getErrorMessage();
} else
${'invoice_no20_argument'} = NULL;if(${'invoice_no20_argument'} !== null) ${'invoice_no20_argument'}->setColumnType('varchar');

${'order_srl21_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'equal');
${'order_srl21_argument'}->checkNotNull();
${'order_srl21_argument'}->createConditionValue();
if(!${'order_srl21_argument'}->isValid()) return ${'order_srl21_argument'}->getErrorMessage();
if(${'order_srl21_argument'} !== null) ${'order_srl21_argument'}->setColumnType('number');
if(isset($args->cart_srl)) {
${'cart_srl22_argument'} = new ConditionArgument('cart_srl', $args->cart_srl, 'equal');
${'cart_srl22_argument'}->createConditionValue();
if(!${'cart_srl22_argument'}->isValid()) return ${'cart_srl22_argument'}->getErrorMessage();
} else
${'cart_srl22_argument'} = NULL;if(${'cart_srl22_argument'} !== null) ${'cart_srl22_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`order_status`', ${'order_status18_argument'})
,new UpdateExpression('`express_id`', ${'express_id19_argument'})
,new UpdateExpression('`invoice_no`', ${'invoice_no20_argument'})
,new UpdateExpressionWithoutArgument('`purdate`', "'".date("YmdHis")."'")
));
$query->setTables(array(
new Table('`hme_nstore_cart`', '`nstore_cart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl21_argument,"equal")
,new ConditionWithArgument('`cart_srl`',$cart_srl22_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>