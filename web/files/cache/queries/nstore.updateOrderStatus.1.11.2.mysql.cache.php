<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateOrderStatus");
$query->setAction("update");
$query->setPriority("");
if(isset($args->order_status)) {
${'order_status12_argument'} = new Argument('order_status', $args->{'order_status'});
if(!${'order_status12_argument'}->isValid()) return ${'order_status12_argument'}->getErrorMessage();
} else
${'order_status12_argument'} = NULL;if(${'order_status12_argument'} !== null) ${'order_status12_argument'}->setColumnType('char');
if(isset($args->express_id)) {
${'express_id13_argument'} = new Argument('express_id', $args->{'express_id'});
if(!${'express_id13_argument'}->isValid()) return ${'express_id13_argument'}->getErrorMessage();
} else
${'express_id13_argument'} = NULL;if(${'express_id13_argument'} !== null) ${'express_id13_argument'}->setColumnType('char');
if(isset($args->invoice_no)) {
${'invoice_no14_argument'} = new Argument('invoice_no', $args->{'invoice_no'});
if(!${'invoice_no14_argument'}->isValid()) return ${'invoice_no14_argument'}->getErrorMessage();
} else
${'invoice_no14_argument'} = NULL;if(${'invoice_no14_argument'} !== null) ${'invoice_no14_argument'}->setColumnType('varchar');
if(isset($args->mileage_save)) {
${'mileage_save15_argument'} = new Argument('mileage_save', $args->{'mileage_save'});
if(!${'mileage_save15_argument'}->isValid()) return ${'mileage_save15_argument'}->getErrorMessage();
} else
${'mileage_save15_argument'} = NULL;if(${'mileage_save15_argument'} !== null) ${'mileage_save15_argument'}->setColumnType('char');
if(isset($args->payment_method)) {
${'payment_method16_argument'} = new Argument('payment_method', $args->{'payment_method'});
if(!${'payment_method16_argument'}->isValid()) return ${'payment_method16_argument'}->getErrorMessage();
} else
${'payment_method16_argument'} = NULL;if(${'payment_method16_argument'} !== null) ${'payment_method16_argument'}->setColumnType('varchar');

${'order_srl17_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'in');
${'order_srl17_argument'}->checkNotNull();
${'order_srl17_argument'}->createConditionValue();
if(!${'order_srl17_argument'}->isValid()) return ${'order_srl17_argument'}->getErrorMessage();
if(${'order_srl17_argument'} !== null) ${'order_srl17_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`order_status`', ${'order_status12_argument'})
,new UpdateExpression('`express_id`', ${'express_id13_argument'})
,new UpdateExpression('`invoice_no`', ${'invoice_no14_argument'})
,new UpdateExpression('`mileage_save`', ${'mileage_save15_argument'})
,new UpdateExpression('`payment_method`', ${'payment_method16_argument'})
));
$query->setTables(array(
new Table('`hme_nstore_order`', '`nstore_order`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order_srl`',$order_srl17_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>