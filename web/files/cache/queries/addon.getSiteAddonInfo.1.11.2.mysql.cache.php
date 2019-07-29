<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonInfo");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'addon2_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon2_argument'}->checkNotNull();
${'addon2_argument'}->createConditionValue();
if(!${'addon2_argument'}->isValid()) return ${'addon2_argument'}->getErrorMessage();
if(${'addon2_argument'} !== null) ${'addon2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`addon`',$addon2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>