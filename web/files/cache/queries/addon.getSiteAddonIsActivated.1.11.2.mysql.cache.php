<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl69_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl69_argument'}->checkNotNull();
${'site_srl69_argument'}->createConditionValue();
if(!${'site_srl69_argument'}->isValid()) return ${'site_srl69_argument'}->getErrorMessage();
if(${'site_srl69_argument'} !== null) ${'site_srl69_argument'}->setColumnType('number');

${'addon70_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon70_argument'}->checkNotNull();
${'addon70_argument'}->createConditionValue();
if(!${'addon70_argument'}->isValid()) return ${'addon70_argument'}->getErrorMessage();
if(${'addon70_argument'} !== null) ${'addon70_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl69_argument,"equal")
,new ConditionWithArgument('`addon`',$addon70_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>