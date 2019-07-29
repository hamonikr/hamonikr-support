<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCartOrderStatus");
$query->setAction("update");
$query->setPriority("");
if(isset($args->order_status)) {
${'order_status35_argument'} = new Argument('order_status', $args->{'order_status'});
if(!${'order_status35_argument'}->isValid()) return ${'order_status35_argument'}->getErrorMessage();
} else
${'order_status35_argument'} = NULL;if(${'order_status35_argument'} !== null) ${'order_status35_argument'}->setColumnType('char');
if(isset($args->express_id)) {
${'express_id36_argument'} = new Argument('express_id', $args->{'express_id'});
if(!${'express_id36_argument'}->isValid()) return ${'express_id36_argument'}->getErrorMessage();
} else
${'express_id36_argument'} = NULL;if(isset($args->invoice_no)) {
${'invoice_no37_argument'} = new Argument('invoice_no', $args->{'invoice_no'});
if(!${'invoice_no37_argument'}->isValid()) return ${'invoice_no37_argument'}->getErrorMessage();
} else
${'invoice_no37_argument'} = NULL;
${'order_srl38_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'equal');
${'order_srl38_argument'}->checkNotNull();
${'order_srl38_argument'}->createConditionValue();
if(!${'order_srl38_argument'}->isValid()) return ${'order_srl38_argument'}->getErrorMessage();
if(${'order_srl38_argument'} !== null) ${'order_srl38_argument'}->setColumnType('number');
if(isset($args->cart_srl)) {
${'cart_srl39_argument'} = new ConditionArgument('cart_srl', $args->cart_srl, 'equal');
${'cart_srl39_argument'}->createConditionValue();
if(!${'cart_srl39_argument'}->isValid()) return ${'cart_srl39_argument'}->getErrorMessage();
} else
${'cart_srl39_argument'} = NULL;if(${'cart_srl39_argument'} !== null) ${'cart_srl39_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`order_status`', ${'order_status35_argument'})
,new UpdateExpression('`express_id`', ${'express_id36_argument'})
,new UpdateExpression('`invoice_no`', ${'invoice_no37_argument'})
,new UpdateExpressionWithoutArgument('`purdate`', "'".date("YmdHis")."'")
));
$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl38_argument,"equal")
,new ConditionWithArgument('`cart_srl`',$cart_srl39_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>