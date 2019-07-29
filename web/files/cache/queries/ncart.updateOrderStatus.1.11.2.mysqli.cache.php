<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateOrderStatus");
$query->setAction("update");
$query->setPriority("");
if(isset($args->order_status)) {
${'order_status29_argument'} = new Argument('order_status', $args->{'order_status'});
if(!${'order_status29_argument'}->isValid()) return ${'order_status29_argument'}->getErrorMessage();
} else
${'order_status29_argument'} = NULL;if(${'order_status29_argument'} !== null) ${'order_status29_argument'}->setColumnType('char');
if(isset($args->express_id)) {
${'express_id30_argument'} = new Argument('express_id', $args->{'express_id'});
if(!${'express_id30_argument'}->isValid()) return ${'express_id30_argument'}->getErrorMessage();
} else
${'express_id30_argument'} = NULL;if(${'express_id30_argument'} !== null) ${'express_id30_argument'}->setColumnType('char');
if(isset($args->invoice_no)) {
${'invoice_no31_argument'} = new Argument('invoice_no', $args->{'invoice_no'});
if(!${'invoice_no31_argument'}->isValid()) return ${'invoice_no31_argument'}->getErrorMessage();
} else
${'invoice_no31_argument'} = NULL;if(${'invoice_no31_argument'} !== null) ${'invoice_no31_argument'}->setColumnType('varchar');
if(isset($args->mileage_save)) {
${'mileage_save32_argument'} = new Argument('mileage_save', $args->{'mileage_save'});
if(!${'mileage_save32_argument'}->isValid()) return ${'mileage_save32_argument'}->getErrorMessage();
} else
${'mileage_save32_argument'} = NULL;if(${'mileage_save32_argument'} !== null) ${'mileage_save32_argument'}->setColumnType('char');
if(isset($args->payment_method)) {
${'payment_method33_argument'} = new Argument('payment_method', $args->{'payment_method'});
if(!${'payment_method33_argument'}->isValid()) return ${'payment_method33_argument'}->getErrorMessage();
} else
${'payment_method33_argument'} = NULL;if(${'payment_method33_argument'} !== null) ${'payment_method33_argument'}->setColumnType('varchar');

${'order_srl34_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'in');
${'order_srl34_argument'}->checkNotNull();
${'order_srl34_argument'}->createConditionValue();
if(!${'order_srl34_argument'}->isValid()) return ${'order_srl34_argument'}->getErrorMessage();
if(${'order_srl34_argument'} !== null) ${'order_srl34_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`order_status`', ${'order_status29_argument'})
,new UpdateExpression('`express_id`', ${'express_id30_argument'})
,new UpdateExpression('`invoice_no`', ${'invoice_no31_argument'})
,new UpdateExpression('`mileage_save`', ${'mileage_save32_argument'})
,new UpdateExpression('`payment_method`', ${'payment_method33_argument'})
));
$query->setTables(array(
new Table('`hme_ncart_order`', '`ncart_order`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl34_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>