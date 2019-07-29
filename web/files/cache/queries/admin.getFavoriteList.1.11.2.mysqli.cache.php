<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl6_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl6_argument'}->createConditionValue();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
} else
${'site_srl6_argument'} = NULL;if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module7_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module7_argument'}->createConditionValue();
if(!${'module7_argument'}->isValid()) return ${'module7_argument'}->getErrorMessage();
} else
${'module7_argument'} = NULL;if(${'module7_argument'} !== null) ${'module7_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl6_argument,"equal")
,new ConditionWithArgument('`module`',$module7_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>