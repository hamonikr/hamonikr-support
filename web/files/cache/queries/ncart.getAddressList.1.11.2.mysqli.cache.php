<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAddressList");
$query->setAction("select");
$query->setPriority("");

${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->checkNotNull();
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');
if(isset($args->opt)) {
${'opt4_argument'} = new ConditionArgument('opt', $args->opt, 'equal');
${'opt4_argument'}->createConditionValue();
if(!${'opt4_argument'}->isValid()) return ${'opt4_argument'}->getErrorMessage();
} else
${'opt4_argument'} = NULL;if(${'opt4_argument'} !== null) ${'opt4_argument'}->setColumnType('char');
if(isset($args->default)) {
${'default5_argument'} = new ConditionArgument('default', $args->default, 'equal');
${'default5_argument'}->createConditionValue();
if(!${'default5_argument'}->isValid()) return ${'default5_argument'}->getErrorMessage();
} else
${'default5_argument'} = NULL;if(${'default5_argument'} !== null) ${'default5_argument'}->setColumnType('char');

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

${'sort_order7_argument'} = new SortArgument('sort_order7', $args->sort_order);
${'sort_order7_argument'}->ensureDefaultValue('asc');
if(!${'sort_order7_argument'}->isValid()) return ${'sort_order7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_ncart_address`', '`ncart_address`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl3_argument,"equal")
,new ConditionWithArgument('`opt`',$opt4_argument,"equal", 'and')
,new ConditionWithArgument('`default`',$default5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, $sort_order7_argument)
));
$query->setLimit();
return $query; ?>