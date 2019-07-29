<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCartItem");
$query->setAction("insert");
$query->setPriority("");

${'cart_srl29_argument'} = new Argument('cart_srl', $args->{'cart_srl'});
${'cart_srl29_argument'}->checkFilter('number');
${'cart_srl29_argument'}->checkNotNull();
if(!${'cart_srl29_argument'}->isValid()) return ${'cart_srl29_argument'}->getErrorMessage();
if(${'cart_srl29_argument'} !== null) ${'cart_srl29_argument'}->setColumnType('number');

${'item_srl30_argument'} = new Argument('item_srl', $args->{'item_srl'});
${'item_srl30_argument'}->checkNotNull();
if(!${'item_srl30_argument'}->isValid()) return ${'item_srl30_argument'}->getErrorMessage();
if(${'item_srl30_argument'} !== null) ${'item_srl30_argument'}->setColumnType('number');

${'member_srl31_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl31_argument'}->checkNotNull();
if(!${'member_srl31_argument'}->isValid()) return ${'member_srl31_argument'}->getErrorMessage();
if(${'member_srl31_argument'} !== null) ${'member_srl31_argument'}->setColumnType('number');

${'module_srl32_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl32_argument'}->checkNotNull();
if(!${'module_srl32_argument'}->isValid()) return ${'module_srl32_argument'}->getErrorMessage();
if(${'module_srl32_argument'} !== null) ${'module_srl32_argument'}->setColumnType('number');

${'quantity33_argument'} = new Argument('quantity', $args->{'quantity'});
${'quantity33_argument'}->ensureDefaultValue('1');
if(!${'quantity33_argument'}->isValid()) return ${'quantity33_argument'}->getErrorMessage();
if(${'quantity33_argument'} !== null) ${'quantity33_argument'}->setColumnType('number');

${'price34_argument'} = new Argument('price', $args->{'price'});
${'price34_argument'}->checkNotNull();
if(!${'price34_argument'}->isValid()) return ${'price34_argument'}->getErrorMessage();
if(${'price34_argument'} !== null) ${'price34_argument'}->setColumnType('number');

${'taxfree35_argument'} = new Argument('taxfree', $args->{'taxfree'});
${'taxfree35_argument'}->checkNotNull();
if(!${'taxfree35_argument'}->isValid()) return ${'taxfree35_argument'}->getErrorMessage();
if(${'taxfree35_argument'} !== null) ${'taxfree35_argument'}->setColumnType('char');
if(isset($args->express_id)) {
${'express_id36_argument'} = new Argument('express_id', $args->{'express_id'});
if(!${'express_id36_argument'}->isValid()) return ${'express_id36_argument'}->getErrorMessage();
} else
${'express_id36_argument'} = NULL;if(${'express_id36_argument'} !== null) ${'express_id36_argument'}->setColumnType('char');

${'option_srl37_argument'} = new Argument('option_srl', $args->{'option_srl'});
${'option_srl37_argument'}->ensureDefaultValue('0');
if(!${'option_srl37_argument'}->isValid()) return ${'option_srl37_argument'}->getErrorMessage();
if(${'option_srl37_argument'} !== null) ${'option_srl37_argument'}->setColumnType('number');

${'option_price38_argument'} = new Argument('option_price', $args->{'option_price'});
${'option_price38_argument'}->ensureDefaultValue('0');
if(!${'option_price38_argument'}->isValid()) return ${'option_price38_argument'}->getErrorMessage();
if(${'option_price38_argument'} !== null) ${'option_price38_argument'}->setColumnType('number');

${'option_title39_argument'} = new Argument('option_title', $args->{'option_title'});
${'option_title39_argument'}->ensureDefaultValue('');
if(!${'option_title39_argument'}->isValid()) return ${'option_title39_argument'}->getErrorMessage();
if(${'option_title39_argument'} !== null) ${'option_title39_argument'}->setColumnType('varchar');

${'purdate40_argument'} = new Argument('purdate', $args->{'purdate'});
${'purdate40_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'purdate40_argument'}->isValid()) return ${'purdate40_argument'}->getErrorMessage();
if(${'purdate40_argument'} !== null) ${'purdate40_argument'}->setColumnType('date');

${'regdate41_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate41_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate41_argument'}->isValid()) return ${'regdate41_argument'}->getErrorMessage();
if(${'regdate41_argument'} !== null) ${'regdate41_argument'}->setColumnType('date');
if(isset($args->non_key)) {
${'non_key42_argument'} = new Argument('non_key', $args->{'non_key'});
if(!${'non_key42_argument'}->isValid()) return ${'non_key42_argument'}->getErrorMessage();
} else
${'non_key42_argument'} = NULL;if(${'non_key42_argument'} !== null) ${'non_key42_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`cart_srl`', ${'cart_srl29_argument'})
,new InsertExpression('`item_srl`', ${'item_srl30_argument'})
,new InsertExpression('`member_srl`', ${'member_srl31_argument'})
,new InsertExpression('`module_srl`', ${'module_srl32_argument'})
,new InsertExpression('`quantity`', ${'quantity33_argument'})
,new InsertExpression('`price`', ${'price34_argument'})
,new InsertExpression('`taxfree`', ${'taxfree35_argument'})
,new InsertExpression('`express_id`', ${'express_id36_argument'})
,new InsertExpression('`option_srl`', ${'option_srl37_argument'})
,new InsertExpression('`option_price`', ${'option_price38_argument'})
,new InsertExpression('`option_title`', ${'option_title39_argument'})
,new InsertExpression('`purdate`', ${'purdate40_argument'})
,new InsertExpression('`regdate`', ${'regdate41_argument'})
,new InsertExpression('`non_key`', ${'non_key42_argument'})
));
$query->setTables(array(
new Table('`hme_nstore_cart`', '`nstore_cart`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>