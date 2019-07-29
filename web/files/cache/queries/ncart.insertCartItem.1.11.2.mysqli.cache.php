<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCartItem");
$query->setAction("insert");
$query->setPriority("");

${'cart_srl5_argument'} = new Argument('cart_srl', $args->{'cart_srl'});
${'cart_srl5_argument'}->checkFilter('number');
${'cart_srl5_argument'}->checkNotNull();
if(!${'cart_srl5_argument'}->isValid()) return ${'cart_srl5_argument'}->getErrorMessage();
if(${'cart_srl5_argument'} !== null) ${'cart_srl5_argument'}->setColumnType('number');

${'module6_argument'} = new Argument('module', $args->{'module'});
${'module6_argument'}->checkNotNull();
if(!${'module6_argument'}->isValid()) return ${'module6_argument'}->getErrorMessage();
if(${'module6_argument'} !== null) ${'module6_argument'}->setColumnType('varchar');

${'item_srl7_argument'} = new Argument('item_srl', $args->{'item_srl'});
${'item_srl7_argument'}->checkNotNull();
if(!${'item_srl7_argument'}->isValid()) return ${'item_srl7_argument'}->getErrorMessage();
if(${'item_srl7_argument'} !== null) ${'item_srl7_argument'}->setColumnType('number');

${'item_name8_argument'} = new Argument('item_name', $args->{'item_name'});
${'item_name8_argument'}->checkNotNull();
if(!${'item_name8_argument'}->isValid()) return ${'item_name8_argument'}->getErrorMessage();
if(${'item_name8_argument'} !== null) ${'item_name8_argument'}->setColumnType('varchar');

${'item_code9_argument'} = new Argument('item_code', $args->{'item_code'});
${'item_code9_argument'}->checkNotNull();
if(!${'item_code9_argument'}->isValid()) return ${'item_code9_argument'}->getErrorMessage();
if(${'item_code9_argument'} !== null) ${'item_code9_argument'}->setColumnType('varchar');

${'document_srl10_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl10_argument'}->checkNotNull();
if(!${'document_srl10_argument'}->isValid()) return ${'document_srl10_argument'}->getErrorMessage();
if(${'document_srl10_argument'} !== null) ${'document_srl10_argument'}->setColumnType('number');
if(isset($args->file_srl)) {
${'file_srl11_argument'} = new Argument('file_srl', $args->{'file_srl'});
if(!${'file_srl11_argument'}->isValid()) return ${'file_srl11_argument'}->getErrorMessage();
} else
${'file_srl11_argument'} = NULL;if(${'file_srl11_argument'} !== null) ${'file_srl11_argument'}->setColumnType('number');
if(isset($args->thumb_file_srl)) {
${'thumb_file_srl12_argument'} = new Argument('thumb_file_srl', $args->{'thumb_file_srl'});
if(!${'thumb_file_srl12_argument'}->isValid()) return ${'thumb_file_srl12_argument'}->getErrorMessage();
} else
${'thumb_file_srl12_argument'} = NULL;if(${'thumb_file_srl12_argument'} !== null) ${'thumb_file_srl12_argument'}->setColumnType('number');

${'member_srl13_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl13_argument'}->checkNotNull();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');

${'module_srl14_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl14_argument'}->checkNotNull();
if(!${'module_srl14_argument'}->isValid()) return ${'module_srl14_argument'}->getErrorMessage();
if(${'module_srl14_argument'} !== null) ${'module_srl14_argument'}->setColumnType('number');

${'quantity15_argument'} = new Argument('quantity', $args->{'quantity'});
${'quantity15_argument'}->checkNotNull();
if(!${'quantity15_argument'}->isValid()) return ${'quantity15_argument'}->getErrorMessage();
if(${'quantity15_argument'} !== null) ${'quantity15_argument'}->setColumnType('number');

${'price16_argument'} = new Argument('price', $args->{'price'});
${'price16_argument'}->checkNotNull();
if(!${'price16_argument'}->isValid()) return ${'price16_argument'}->getErrorMessage();
if(${'price16_argument'} !== null) ${'price16_argument'}->setColumnType('number');

${'taxfree17_argument'} = new Argument('taxfree', $args->{'taxfree'});
${'taxfree17_argument'}->checkNotNull();
if(!${'taxfree17_argument'}->isValid()) return ${'taxfree17_argument'}->getErrorMessage();
if(${'taxfree17_argument'} !== null) ${'taxfree17_argument'}->setColumnType('char');
if(isset($args->discount_amount)) {
${'discount_amount18_argument'} = new Argument('discount_amount', $args->{'discount_amount'});
if(!${'discount_amount18_argument'}->isValid()) return ${'discount_amount18_argument'}->getErrorMessage();
} else
${'discount_amount18_argument'} = NULL;if(${'discount_amount18_argument'} !== null) ${'discount_amount18_argument'}->setColumnType('number');
if(isset($args->discount_info)) {
${'discount_info19_argument'} = new Argument('discount_info', $args->{'discount_info'});
if(!${'discount_info19_argument'}->isValid()) return ${'discount_info19_argument'}->getErrorMessage();
} else
${'discount_info19_argument'} = NULL;if(${'discount_info19_argument'} !== null) ${'discount_info19_argument'}->setColumnType('varchar');
if(isset($args->discounted_price)) {
${'discounted_price20_argument'} = new Argument('discounted_price', $args->{'discounted_price'});
if(!${'discounted_price20_argument'}->isValid()) return ${'discounted_price20_argument'}->getErrorMessage();
} else
${'discounted_price20_argument'} = NULL;if(${'discounted_price20_argument'} !== null) ${'discounted_price20_argument'}->setColumnType('number');
if(isset($args->express_id)) {
${'express_id21_argument'} = new Argument('express_id', $args->{'express_id'});
if(!${'express_id21_argument'}->isValid()) return ${'express_id21_argument'}->getErrorMessage();
} else
${'express_id21_argument'} = NULL;
${'option_srl22_argument'} = new Argument('option_srl', $args->{'option_srl'});
${'option_srl22_argument'}->ensureDefaultValue('0');
if(!${'option_srl22_argument'}->isValid()) return ${'option_srl22_argument'}->getErrorMessage();
if(${'option_srl22_argument'} !== null) ${'option_srl22_argument'}->setColumnType('number');

${'option_price23_argument'} = new Argument('option_price', $args->{'option_price'});
${'option_price23_argument'}->ensureDefaultValue('0');
if(!${'option_price23_argument'}->isValid()) return ${'option_price23_argument'}->getErrorMessage();
if(${'option_price23_argument'} !== null) ${'option_price23_argument'}->setColumnType('number');

${'option_title24_argument'} = new Argument('option_title', $args->{'option_title'});
${'option_title24_argument'}->ensureDefaultValue('');
if(!${'option_title24_argument'}->isValid()) return ${'option_title24_argument'}->getErrorMessage();
if(${'option_title24_argument'} !== null) ${'option_title24_argument'}->setColumnType('varchar');

${'purdate25_argument'} = new Argument('purdate', $args->{'purdate'});
${'purdate25_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'purdate25_argument'}->isValid()) return ${'purdate25_argument'}->getErrorMessage();
if(${'purdate25_argument'} !== null) ${'purdate25_argument'}->setColumnType('date');

${'regdate26_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate26_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate26_argument'}->isValid()) return ${'regdate26_argument'}->getErrorMessage();
if(${'regdate26_argument'} !== null) ${'regdate26_argument'}->setColumnType('date');
if(isset($args->non_key)) {
${'non_key27_argument'} = new Argument('non_key', $args->{'non_key'});
if(!${'non_key27_argument'}->isValid()) return ${'non_key27_argument'}->getErrorMessage();
} else
${'non_key27_argument'} = NULL;if(${'non_key27_argument'} !== null) ${'non_key27_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`cart_srl`', ${'cart_srl5_argument'})
,new InsertExpression('`module`', ${'module6_argument'})
,new InsertExpression('`item_srl`', ${'item_srl7_argument'})
,new InsertExpression('`item_name`', ${'item_name8_argument'})
,new InsertExpression('`item_code`', ${'item_code9_argument'})
,new InsertExpression('`document_srl`', ${'document_srl10_argument'})
,new InsertExpression('`file_srl`', ${'file_srl11_argument'})
,new InsertExpression('`thumb_file_srl`', ${'thumb_file_srl12_argument'})
,new InsertExpression('`member_srl`', ${'member_srl13_argument'})
,new InsertExpression('`module_srl`', ${'module_srl14_argument'})
,new InsertExpression('`quantity`', ${'quantity15_argument'})
,new InsertExpression('`price`', ${'price16_argument'})
,new InsertExpression('`taxfree`', ${'taxfree17_argument'})
,new InsertExpression('`discount_amount`', ${'discount_amount18_argument'})
,new InsertExpression('`discount_info`', ${'discount_info19_argument'})
,new InsertExpression('`discounted_price`', ${'discounted_price20_argument'})
,new InsertExpression('`express_id`', ${'express_id21_argument'})
,new InsertExpression('`option_srl`', ${'option_srl22_argument'})
,new InsertExpression('`option_price`', ${'option_price23_argument'})
,new InsertExpression('`option_title`', ${'option_title24_argument'})
,new InsertExpression('`purdate`', ${'purdate25_argument'})
,new InsertExpression('`regdate`', ${'regdate26_argument'})
,new InsertExpression('`non_key`', ${'non_key27_argument'})
));
$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>