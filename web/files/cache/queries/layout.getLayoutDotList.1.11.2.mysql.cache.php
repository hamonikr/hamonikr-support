<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl151_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl151_argument'}->checkFilter('number');
${'site_srl151_argument'}->ensureDefaultValue('0');
${'site_srl151_argument'}->checkNotNull();
${'site_srl151_argument'}->createConditionValue();
if(!${'site_srl151_argument'}->isValid()) return ${'site_srl151_argument'}->getErrorMessage();
if(${'site_srl151_argument'} !== null) ${'site_srl151_argument'}->setColumnType('number');

${'layout_type152_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type152_argument'}->ensureDefaultValue('P');
${'layout_type152_argument'}->createConditionValue();
if(!${'layout_type152_argument'}->isValid()) return ${'layout_type152_argument'}->getErrorMessage();
if(${'layout_type152_argument'} !== null) ${'layout_type152_argument'}->setColumnType('char');

${'layout153_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout153_argument'}->ensureDefaultValue('.');
${'layout153_argument'}->createConditionValue();
if(!${'layout153_argument'}->isValid()) return ${'layout153_argument'}->getErrorMessage();
if(${'layout153_argument'} !== null) ${'layout153_argument'}->setColumnType('varchar');

${'sort_index154_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index154_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index154_argument'}->isValid()) return ${'sort_index154_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl151_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type152_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout153_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index154_argument'}, "desc")
));
$query->setLimit();
return $query; ?>