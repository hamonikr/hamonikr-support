<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCartItems");
$query->setAction("select");
$query->setPriority("");

${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->checkNotNull();
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');
if(isset($args->cartnos)) {
${'cartnos5_argument'} = new ConditionArgument('cartnos', $args->cartnos, 'in');
${'cartnos5_argument'}->createConditionValue();
if(!${'cartnos5_argument'}->isValid()) return ${'cartnos5_argument'}->getErrorMessage();
} else
${'cartnos5_argument'} = NULL;if(${'cartnos5_argument'} !== null) ${'cartnos5_argument'}->setColumnType('number');

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`order_status`','0',"equal")
,new ConditionWithArgument('`member_srl`',$member_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`cart_srl`',$cartnos5_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit();
return $query; ?>