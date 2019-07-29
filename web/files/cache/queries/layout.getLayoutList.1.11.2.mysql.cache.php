<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutList");
$query->setAction("select");
$query->setPriority("");

${'site_srl5_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl5_argument'}->checkFilter('number');
${'site_srl5_argument'}->ensureDefaultValue('0');
${'site_srl5_argument'}->checkNotNull();
${'site_srl5_argument'}->createConditionValue();
if(!${'site_srl5_argument'}->isValid()) return ${'site_srl5_argument'}->getErrorMessage();
if(${'site_srl5_argument'} !== null) ${'site_srl5_argument'}->setColumnType('number');

${'layout_type6_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type6_argument'}->ensureDefaultValue('P');
${'layout_type6_argument'}->createConditionValue();
if(!${'layout_type6_argument'}->isValid()) return ${'layout_type6_argument'}->getErrorMessage();
if(${'layout_type6_argument'} !== null) ${'layout_type6_argument'}->setColumnType('char');
if(isset($args->layout)) {
${'layout7_argument'} = new ConditionArgument('layout', $args->layout, 'equal');
${'layout7_argument'}->createConditionValue();
if(!${'layout7_argument'}->isValid()) return ${'layout7_argument'}->getErrorMessage();
} else
${'layout7_argument'} = NULL;if(${'layout7_argument'} !== null) ${'layout7_argument'}->setColumnType('varchar');

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl5_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type6_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout7_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "desc")
));
$query->setLimit();
return $query; ?>