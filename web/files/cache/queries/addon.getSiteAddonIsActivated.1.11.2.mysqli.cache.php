<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl65_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl65_argument'}->checkNotNull();
${'site_srl65_argument'}->createConditionValue();
if(!${'site_srl65_argument'}->isValid()) return ${'site_srl65_argument'}->getErrorMessage();
if(${'site_srl65_argument'} !== null) ${'site_srl65_argument'}->setColumnType('number');

${'addon66_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon66_argument'}->checkNotNull();
${'addon66_argument'}->createConditionValue();
if(!${'addon66_argument'}->isValid()) return ${'addon66_argument'}->getErrorMessage();
if(${'addon66_argument'} !== null) ${'addon66_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl65_argument,"equal")
,new ConditionWithArgument('`addon`',$addon66_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>