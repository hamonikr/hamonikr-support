<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertOrder");
$query->setAction("insert");
$query->setPriority("");

${'order_srl1_argument'} = new Argument('order_srl', $args->{'order_srl'});
${'order_srl1_argument'}->checkFilter('number');
${'order_srl1_argument'}->checkNotNull();
if(!${'order_srl1_argument'}->isValid()) return ${'order_srl1_argument'}->getErrorMessage();
if(${'order_srl1_argument'} !== null) ${'order_srl1_argument'}->setColumnType('number');

${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl2_argument'}->checkNotNull();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');
if(isset($args->cartnos)) {
${'cartnos4_argument'} = new Argument('cartnos', $args->{'cartnos'});
if(!${'cartnos4_argument'}->isValid()) return ${'cartnos4_argument'}->getErrorMessage();
} else
${'cartnos4_argument'} = NULL;if(${'cartnos4_argument'} !== null) ${'cartnos4_argument'}->setColumnType('varchar');

${'payment_method5_argument'} = new Argument('payment_method', $args->{'payment_method'});
${'payment_method5_argument'}->checkNotNull();
if(!${'payment_method5_argument'}->isValid()) return ${'payment_method5_argument'}->getErrorMessage();
if(${'payment_method5_argument'} !== null) ${'payment_method5_argument'}->setColumnType('varchar');
if(isset($args->mileage)) {
${'mileage6_argument'} = new Argument('mileage', $args->{'mileage'});
if(!${'mileage6_argument'}->isValid()) return ${'mileage6_argument'}->getErrorMessage();
} else
${'mileage6_argument'} = NULL;if(${'mileage6_argument'} !== null) ${'mileage6_argument'}->setColumnType('number');
if(isset($args->use_mileage)) {
${'use_mileage7_argument'} = new Argument('use_mileage', $args->{'use_mileage'});
if(!${'use_mileage7_argument'}->isValid()) return ${'use_mileage7_argument'}->getErrorMessage();
} else
${'use_mileage7_argument'} = NULL;if(${'use_mileage7_argument'} !== null) ${'use_mileage7_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title8_argument'} = new Argument('title', $args->{'title'});
if(!${'title8_argument'}->isValid()) return ${'title8_argument'}->getErrorMessage();
} else
${'title8_argument'} = NULL;if(${'title8_argument'} !== null) ${'title8_argument'}->setColumnType('varchar');

${'item_count9_argument'} = new Argument('item_count', $args->{'item_count'});
${'item_count9_argument'}->checkNotNull();
if(!${'item_count9_argument'}->isValid()) return ${'item_count9_argument'}->getErrorMessage();
if(${'item_count9_argument'} !== null) ${'item_count9_argument'}->setColumnType('number');

${'total_price10_argument'} = new Argument('total_price', $args->{'total_price'});
${'total_price10_argument'}->checkNotNull();
if(!${'total_price10_argument'}->isValid()) return ${'total_price10_argument'}->getErrorMessage();
if(${'total_price10_argument'} !== null) ${'total_price10_argument'}->setColumnType('number');

${'sum_price11_argument'} = new Argument('sum_price', $args->{'sum_price'});
${'sum_price11_argument'}->checkNotNull();
if(!${'sum_price11_argument'}->isValid()) return ${'sum_price11_argument'}->getErrorMessage();
if(${'sum_price11_argument'} !== null) ${'sum_price11_argument'}->setColumnType('number');

${'delivery_fee12_argument'} = new Argument('delivery_fee', $args->{'delivery_fee'});
${'delivery_fee12_argument'}->checkNotNull();
if(!${'delivery_fee12_argument'}->isValid()) return ${'delivery_fee12_argument'}->getErrorMessage();
if(${'delivery_fee12_argument'} !== null) ${'delivery_fee12_argument'}->setColumnType('number');

${'total_discounted_price13_argument'} = new Argument('total_discounted_price', $args->{'total_discounted_price'});
${'total_discounted_price13_argument'}->checkNotNull();
if(!${'total_discounted_price13_argument'}->isValid()) return ${'total_discounted_price13_argument'}->getErrorMessage();
if(${'total_discounted_price13_argument'} !== null) ${'total_discounted_price13_argument'}->setColumnType('number');

${'total_discount_amount14_argument'} = new Argument('total_discount_amount', $args->{'total_discount_amount'});
${'total_discount_amount14_argument'}->checkNotNull();
if(!${'total_discount_amount14_argument'}->isValid()) return ${'total_discount_amount14_argument'}->getErrorMessage();
if(${'total_discount_amount14_argument'} !== null) ${'total_discount_amount14_argument'}->setColumnType('number');

${'taxation_amount15_argument'} = new Argument('taxation_amount', $args->{'taxation_amount'});
${'taxation_amount15_argument'}->checkNotNull();
if(!${'taxation_amount15_argument'}->isValid()) return ${'taxation_amount15_argument'}->getErrorMessage();
if(${'taxation_amount15_argument'} !== null) ${'taxation_amount15_argument'}->setColumnType('number');

${'supply_amount16_argument'} = new Argument('supply_amount', $args->{'supply_amount'});
${'supply_amount16_argument'}->checkNotNull();
if(!${'supply_amount16_argument'}->isValid()) return ${'supply_amount16_argument'}->getErrorMessage();
if(${'supply_amount16_argument'} !== null) ${'supply_amount16_argument'}->setColumnType('number');

${'taxfree_amount17_argument'} = new Argument('taxfree_amount', $args->{'taxfree_amount'});
${'taxfree_amount17_argument'}->checkNotNull();
if(!${'taxfree_amount17_argument'}->isValid()) return ${'taxfree_amount17_argument'}->getErrorMessage();
if(${'taxfree_amount17_argument'} !== null) ${'taxfree_amount17_argument'}->setColumnType('number');

${'vat18_argument'} = new Argument('vat', $args->{'vat'});
${'vat18_argument'}->checkNotNull();
if(!${'vat18_argument'}->isValid()) return ${'vat18_argument'}->getErrorMessage();
if(${'vat18_argument'} !== null) ${'vat18_argument'}->setColumnType('number');

${'delivfee_inadvance19_argument'} = new Argument('delivfee_inadvance', $args->{'delivfee_inadvance'});
${'delivfee_inadvance19_argument'}->ensureDefaultValue('Y');
if(!${'delivfee_inadvance19_argument'}->isValid()) return ${'delivfee_inadvance19_argument'}->getErrorMessage();
if(${'delivfee_inadvance19_argument'} !== null) ${'delivfee_inadvance19_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars20_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars20_argument'}->isValid()) return ${'extra_vars20_argument'}->getErrorMessage();
} else
${'extra_vars20_argument'} = NULL;if(${'extra_vars20_argument'} !== null) ${'extra_vars20_argument'}->setColumnType('text');

${'regdate21_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate21_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate21_argument'}->isValid()) return ${'regdate21_argument'}->getErrorMessage();
if(${'regdate21_argument'} !== null) ${'regdate21_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`order_srl`', ${'order_srl1_argument'})
,new InsertExpression('`module_srl`', ${'module_srl2_argument'})
,new InsertExpression('`member_srl`', ${'member_srl3_argument'})
,new InsertExpression('`cartnos`', ${'cartnos4_argument'})
,new InsertExpression('`payment_method`', ${'payment_method5_argument'})
,new InsertExpression('`mileage`', ${'mileage6_argument'})
,new InsertExpression('`use_mileage`', ${'use_mileage7_argument'})
,new InsertExpression('`title`', ${'title8_argument'})
,new InsertExpression('`item_count`', ${'item_count9_argument'})
,new InsertExpression('`total_price`', ${'total_price10_argument'})
,new InsertExpression('`sum_price`', ${'sum_price11_argument'})
,new InsertExpression('`delivery_fee`', ${'delivery_fee12_argument'})
,new InsertExpression('`total_discounted_price`', ${'total_discounted_price13_argument'})
,new InsertExpression('`total_discount_amount`', ${'total_discount_amount14_argument'})
,new InsertExpression('`taxation_amount`', ${'taxation_amount15_argument'})
,new InsertExpression('`supply_amount`', ${'supply_amount16_argument'})
,new InsertExpression('`taxfree_amount`', ${'taxfree_amount17_argument'})
,new InsertExpression('`vat`', ${'vat18_argument'})
,new InsertExpression('`delivfee_inadvance`', ${'delivfee_inadvance19_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars20_argument'})
,new InsertExpression('`regdate`', ${'regdate21_argument'})
));
$query->setTables(array(
new Table('`hme_ncart_order`', '`ncart_order`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>