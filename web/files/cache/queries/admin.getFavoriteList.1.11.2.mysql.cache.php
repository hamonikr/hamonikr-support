<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFavoriteList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
} else
${'site_srl1_argument'} = NULL;if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module2_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module2_argument'}->createConditionValue();
if(!${'module2_argument'}->isValid()) return ${'module2_argument'}->getErrorMessage();
} else
${'module2_argument'} = NULL;if(${'module2_argument'} !== null) ${'module2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`module`',$module2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>