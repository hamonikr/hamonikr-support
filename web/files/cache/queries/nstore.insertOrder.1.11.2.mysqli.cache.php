<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertOrder");
$query->setAction("insert");
$query->setPriority("");

${'order_srl44_argument'} = new Argument('order_srl', $args->{'order_srl'});
${'order_srl44_argument'}->checkFilter('number');
${'order_srl44_argument'}->checkNotNull();
if(!${'order_srl44_argument'}->isValid()) return ${'order_srl44_argument'}->getErrorMessage();
if(${'order_srl44_argument'} !== null) ${'order_srl44_argument'}->setColumnType('number');

${'module_srl45_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl45_argument'}->checkNotNull();
if(!${'module_srl45_argument'}->isValid()) return ${'module_srl45_argument'}->getErrorMessage();
if(${'module_srl45_argument'} !== null) ${'module_srl45_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl46_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl46_argument'}->isValid()) return ${'member_srl46_argument'}->getErrorMessage();
} else
${'member_srl46_argument'} = NULL;if(${'member_srl46_argument'} !== null) ${'member_srl46_argument'}->setColumnType('number');
if(isset($args->purchaser_name)) {
${'purchaser_name47_argument'} = new Argument('purchaser_name', $args->{'purchaser_name'});
if(!${'purchaser_name47_argument'}->isValid()) return ${'purchaser_name47_argument'}->getErrorMessage();
} else
${'purchaser_name47_argument'} = NULL;if(${'purchaser_name47_argument'} !== null) ${'purchaser_name47_argument'}->setColumnType('varchar');

${'purchaser_cellphone48_argument'} = new Argument('purchaser_cellphone', $args->{'purchaser_cellphone'});
${'purchaser_cellphone48_argument'}->ensureDefaultValue('');
if(!${'purchaser_cellphone48_argument'}->isValid()) return ${'purchaser_cellphone48_argument'}->getErrorMessage();
if(${'purchaser_cellphone48_argument'} !== null) ${'purchaser_cellphone48_argument'}->setColumnType('varchar');

${'purchaser_telnum49_argument'} = new Argument('purchaser_telnum', $args->{'purchaser_telnum'});
${'purchaser_telnum49_argument'}->ensureDefaultValue('');
if(!${'purchaser_telnum49_argument'}->isValid()) return ${'purchaser_telnum49_argument'}->getErrorMessage();
if(${'purchaser_telnum49_argument'} !== null) ${'purchaser_telnum49_argument'}->setColumnType('varchar');
if(isset($args->purchaser_address)) {
${'purchaser_address50_argument'} = new Argument('purchaser_address', $args->{'purchaser_address'});
if(!${'purchaser_address50_argument'}->isValid()) return ${'purchaser_address50_argument'}->getErrorMessage();
} else
${'purchaser_address50_argument'} = NULL;if(${'purchaser_address50_argument'} !== null) ${'purchaser_address50_argument'}->setColumnType('varchar');

${'purchaser_postcode51_argument'} = new Argument('purchaser_postcode', $args->{'purchaser_postcode'});
${'purchaser_postcode51_argument'}->ensureDefaultValue('');
if(!${'purchaser_postcode51_argument'}->isValid()) return ${'purchaser_postcode51_argument'}->getErrorMessage();
if(${'purchaser_postcode51_argument'} !== null) ${'purchaser_postcode51_argument'}->setColumnType('varchar');
if(isset($args->purchaser_email)) {
${'purchaser_email52_argument'} = new Argument('purchaser_email', $args->{'purchaser_email'});
if(!${'purchaser_email52_argument'}->isValid()) return ${'purchaser_email52_argument'}->getErrorMessage();
} else
${'purchaser_email52_argument'} = NULL;if(${'purchaser_email52_argument'} !== null) ${'purchaser_email52_argument'}->setColumnType('varchar');

${'recipient_name53_argument'} = new Argument('recipient_name', $args->{'recipient_name'});
${'recipient_name53_argument'}->ensureDefaultValue('');
if(!${'recipient_name53_argument'}->isValid()) return ${'recipient_name53_argument'}->getErrorMessage();
if(${'recipient_name53_argument'} !== null) ${'recipient_name53_argument'}->setColumnType('varchar');

${'recipient_cellphone54_argument'} = new Argument('recipient_cellphone', $args->{'recipient_cellphone'});
${'recipient_cellphone54_argument'}->ensureDefaultValue('');
if(!${'recipient_cellphone54_argument'}->isValid()) return ${'recipient_cellphone54_argument'}->getErrorMessage();
if(${'recipient_cellphone54_argument'} !== null) ${'recipient_cellphone54_argument'}->setColumnType('varchar');

${'recipient_telnum55_argument'} = new Argument('recipient_telnum', $args->{'recipient_telnum'});
${'recipient_telnum55_argument'}->ensureDefaultValue('');
if(!${'recipient_telnum55_argument'}->isValid()) return ${'recipient_telnum55_argument'}->getErrorMessage();
if(${'recipient_telnum55_argument'} !== null) ${'recipient_telnum55_argument'}->setColumnType('varchar');

${'recipient_address56_argument'} = new Argument('recipient_address', $args->{'recipient_address'});
${'recipient_address56_argument'}->ensureDefaultValue('');
if(!${'recipient_address56_argument'}->isValid()) return ${'recipient_address56_argument'}->getErrorMessage();
if(${'recipient_address56_argument'} !== null) ${'recipient_address56_argument'}->setColumnType('varchar');

${'recipient_postcode57_argument'} = new Argument('recipient_postcode', $args->{'recipient_postcode'});
${'recipient_postcode57_argument'}->ensureDefaultValue('');
if(!${'recipient_postcode57_argument'}->isValid()) return ${'recipient_postcode57_argument'}->getErrorMessage();
if(${'recipient_postcode57_argument'} !== null) ${'recipient_postcode57_argument'}->setColumnType('varchar');

${'non_password58_argument'} = new Argument('non_password', $args->{'non_password'});
${'non_password58_argument'}->ensureDefaultValue('');
if(!${'non_password58_argument'}->isValid()) return ${'non_password58_argument'}->getErrorMessage();
if(${'non_password58_argument'} !== null) ${'non_password58_argument'}->setColumnType('varchar');
if(isset($args->cartnos)) {
${'cartnos59_argument'} = new Argument('cartnos', $args->{'cartnos'});
if(!${'cartnos59_argument'}->isValid()) return ${'cartnos59_argument'}->getErrorMessage();
} else
${'cartnos59_argument'} = NULL;if(${'cartnos59_argument'} !== null) ${'cartnos59_argument'}->setColumnType('varchar');

${'payment_method60_argument'} = new Argument('payment_method', $args->{'payment_method'});
${'payment_method60_argument'}->checkNotNull();
if(!${'payment_method60_argument'}->isValid()) return ${'payment_method60_argument'}->getErrorMessage();
if(${'payment_method60_argument'} !== null) ${'payment_method60_argument'}->setColumnType('varchar');
if(isset($args->mileage)) {
${'mileage61_argument'} = new Argument('mileage', $args->{'mileage'});
if(!${'mileage61_argument'}->isValid()) return ${'mileage61_argument'}->getErrorMessage();
} else
${'mileage61_argument'} = NULL;if(${'mileage61_argument'} !== null) ${'mileage61_argument'}->setColumnType('number');
if(isset($args->use_mileage)) {
${'use_mileage62_argument'} = new Argument('use_mileage', $args->{'use_mileage'});
if(!${'use_mileage62_argument'}->isValid()) return ${'use_mileage62_argument'}->getErrorMessage();
} else
${'use_mileage62_argument'} = NULL;if(${'use_mileage62_argument'} !== null) ${'use_mileage62_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title63_argument'} = new Argument('title', $args->{'title'});
if(!${'title63_argument'}->isValid()) return ${'title63_argument'}->getErrorMessage();
} else
${'title63_argument'} = NULL;if(${'title63_argument'} !== null) ${'title63_argument'}->setColumnType('varchar');

${'item_count64_argument'} = new Argument('item_count', $args->{'item_count'});
${'item_count64_argument'}->checkNotNull();
if(!${'item_count64_argument'}->isValid()) return ${'item_count64_argument'}->getErrorMessage();
if(${'item_count64_argument'} !== null) ${'item_count64_argument'}->setColumnType('number');

${'total_price65_argument'} = new Argument('total_price', $args->{'total_price'});
${'total_price65_argument'}->checkNotNull();
if(!${'total_price65_argument'}->isValid()) return ${'total_price65_argument'}->getErrorMessage();
if(${'total_price65_argument'} !== null) ${'total_price65_argument'}->setColumnType('number');

${'sum_price66_argument'} = new Argument('sum_price', $args->{'sum_price'});
${'sum_price66_argument'}->checkNotNull();
if(!${'sum_price66_argument'}->isValid()) return ${'sum_price66_argument'}->getErrorMessage();
if(${'sum_price66_argument'} !== null) ${'sum_price66_argument'}->setColumnType('number');

${'delivery_fee67_argument'} = new Argument('delivery_fee', $args->{'delivery_fee'});
${'delivery_fee67_argument'}->checkNotNull();
if(!${'delivery_fee67_argument'}->isValid()) return ${'delivery_fee67_argument'}->getErrorMessage();
if(${'delivery_fee67_argument'} !== null) ${'delivery_fee67_argument'}->setColumnType('number');

${'total_discounted_price68_argument'} = new Argument('total_discounted_price', $args->{'total_discounted_price'});
${'total_discounted_price68_argument'}->checkNotNull();
if(!${'total_discounted_price68_argument'}->isValid()) return ${'total_discounted_price68_argument'}->getErrorMessage();
if(${'total_discounted_price68_argument'} !== null) ${'total_discounted_price68_argument'}->setColumnType('number');

${'total_discount_amount69_argument'} = new Argument('total_discount_amount', $args->{'total_discount_amount'});
${'total_discount_amount69_argument'}->checkNotNull();
if(!${'total_discount_amount69_argument'}->isValid()) return ${'total_discount_amount69_argument'}->getErrorMessage();
if(${'total_discount_amount69_argument'} !== null) ${'total_discount_amount69_argument'}->setColumnType('number');

${'taxation_amount70_argument'} = new Argument('taxation_amount', $args->{'taxation_amount'});
${'taxation_amount70_argument'}->checkNotNull();
if(!${'taxation_amount70_argument'}->isValid()) return ${'taxation_amount70_argument'}->getErrorMessage();
if(${'taxation_amount70_argument'} !== null) ${'taxation_amount70_argument'}->setColumnType('number');

${'supply_amount71_argument'} = new Argument('supply_amount', $args->{'supply_amount'});
${'supply_amount71_argument'}->checkNotNull();
if(!${'supply_amount71_argument'}->isValid()) return ${'supply_amount71_argument'}->getErrorMessage();
if(${'supply_amount71_argument'} !== null) ${'supply_amount71_argument'}->setColumnType('number');

${'taxfree_amount72_argument'} = new Argument('taxfree_amount', $args->{'taxfree_amount'});
${'taxfree_amount72_argument'}->checkNotNull();
if(!${'taxfree_amount72_argument'}->isValid()) return ${'taxfree_amount72_argument'}->getErrorMessage();
if(${'taxfree_amount72_argument'} !== null) ${'taxfree_amount72_argument'}->setColumnType('number');

${'vat73_argument'} = new Argument('vat', $args->{'vat'});
${'vat73_argument'}->checkNotNull();
if(!${'vat73_argument'}->isValid()) return ${'vat73_argument'}->getErrorMessage();
if(${'vat73_argument'} !== null) ${'vat73_argument'}->setColumnType('number');

${'delivfee_inadvance74_argument'} = new Argument('delivfee_inadvance', $args->{'delivfee_inadvance'});
${'delivfee_inadvance74_argument'}->ensureDefaultValue('Y');
if(!${'delivfee_inadvance74_argument'}->isValid()) return ${'delivfee_inadvance74_argument'}->getErrorMessage();
if(${'delivfee_inadvance74_argument'} !== null) ${'delivfee_inadvance74_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars75_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars75_argument'}->isValid()) return ${'extra_vars75_argument'}->getErrorMessage();
} else
${'extra_vars75_argument'} = NULL;if(${'extra_vars75_argument'} !== null) ${'extra_vars75_argument'}->setColumnType('text');

${'regdate76_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate76_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate76_argument'}->isValid()) return ${'regdate76_argument'}->getErrorMessage();
if(${'regdate76_argument'} !== null) ${'regdate76_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`order_srl`', ${'order_srl44_argument'})
,new InsertExpression('`module_srl`', ${'module_srl45_argument'})
,new InsertExpression('`member_srl`', ${'member_srl46_argument'})
,new InsertExpression('`purchaser_name`', ${'purchaser_name47_argument'})
,new InsertExpression('`purchaser_cellphone`', ${'purchaser_cellphone48_argument'})
,new InsertExpression('`purchaser_telnum`', ${'purchaser_telnum49_argument'})
,new InsertExpression('`purchaser_address`', ${'purchaser_address50_argument'})
,new InsertExpression('`purchaser_postcode`', ${'purchaser_postcode51_argument'})
,new InsertExpression('`purchaser_email`', ${'purchaser_email52_argument'})
,new InsertExpression('`recipient_name`', ${'recipient_name53_argument'})
,new InsertExpression('`recipient_cellphone`', ${'recipient_cellphone54_argument'})
,new InsertExpression('`recipient_telnum`', ${'recipient_telnum55_argument'})
,new InsertExpression('`recipient_address`', ${'recipient_address56_argument'})
,new InsertExpression('`recipient_postcode`', ${'recipient_postcode57_argument'})
,new InsertExpression('`non_password`', ${'non_password58_argument'})
,new InsertExpression('`cartnos`', ${'cartnos59_argument'})
,new InsertExpression('`payment_method`', ${'payment_method60_argument'})
,new InsertExpression('`mileage`', ${'mileage61_argument'})
,new InsertExpression('`use_mileage`', ${'use_mileage62_argument'})
,new InsertExpression('`title`', ${'title63_argument'})
,new InsertExpression('`item_count`', ${'item_count64_argument'})
,new InsertExpression('`total_price`', ${'total_price65_argument'})
,new InsertExpression('`sum_price`', ${'sum_price66_argument'})
,new InsertExpression('`delivery_fee`', ${'delivery_fee67_argument'})
,new InsertExpression('`total_discounted_price`', ${'total_discounted_price68_argument'})
,new InsertExpression('`total_discount_amount`', ${'total_discount_amount69_argument'})
,new InsertExpression('`taxation_amount`', ${'taxation_amount70_argument'})
,new InsertExpression('`supply_amount`', ${'supply_amount71_argument'})
,new InsertExpression('`taxfree_amount`', ${'taxfree_amount72_argument'})
,new InsertExpression('`vat`', ${'vat73_argument'})
,new InsertExpression('`delivfee_inadvance`', ${'delivfee_inadvance74_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars75_argument'})
,new InsertExpression('`regdate`', ${'regdate76_argument'})
));
$query->setTables(array(
new Table('`hme_nstore_order`', '`nstore_order`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>