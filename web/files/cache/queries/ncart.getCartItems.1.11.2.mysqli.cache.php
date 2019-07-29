<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCartItems");
$query->setAction("select");
$query->setPriority("");

${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->checkNotNull();
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->cartnos)) {
${'cartnos2_argument'} = new ConditionArgument('cartnos', $args->cartnos, 'in');
${'cartnos2_argument'}->createConditionValue();
if(!${'cartnos2_argument'}->isValid()) return ${'cartnos2_argument'}->getErrorMessage();
} else
${'cartnos2_argument'} = NULL;if(${'cartnos2_argument'} !== null) ${'cartnos2_argument'}->setColumnType('number');

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_ncart`', '`ncart`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`order_status`','0',"equal")
,new ConditionWithArgument('`member_srl`',$member_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`cart_srl`',$cartnos2_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "desc")
));
$query->setLimit();
return $query; ?>