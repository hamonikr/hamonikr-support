<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutList");
$query->setAction("select");
$query->setPriority("");

${'site_srl11_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl11_argument'}->checkFilter('number');
${'site_srl11_argument'}->ensureDefaultValue('0');
${'site_srl11_argument'}->checkNotNull();
${'site_srl11_argument'}->createConditionValue();
if(!${'site_srl11_argument'}->isValid()) return ${'site_srl11_argument'}->getErrorMessage();
if(${'site_srl11_argument'} !== null) ${'site_srl11_argument'}->setColumnType('number');

${'layout_type12_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type12_argument'}->ensureDefaultValue('P');
${'layout_type12_argument'}->createConditionValue();
if(!${'layout_type12_argument'}->isValid()) return ${'layout_type12_argument'}->getErrorMessage();
if(${'layout_type12_argument'} !== null) ${'layout_type12_argument'}->setColumnType('char');
if(isset($args->layout)) {
${'layout13_argument'} = new ConditionArgument('layout', $args->layout, 'equal');
${'layout13_argument'}->createConditionValue();
if(!${'layout13_argument'}->isValid()) return ${'layout13_argument'}->getErrorMessage();
} else
${'layout13_argument'} = NULL;if(${'layout13_argument'} !== null) ${'layout13_argument'}->setColumnType('varchar');

${'sort_index14_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index14_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index14_argument'}->isValid()) return ${'sort_index14_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl11_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type12_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout13_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index14_argument'}, "desc")
));
$query->setLimit();
return $query; ?>