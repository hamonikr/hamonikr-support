<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleConfig");
$query->setAction("delete");
$query->setPriority("");

${'module19_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module19_argument'}->checkNotNull();
${'module19_argument'}->createConditionValue();
if(!${'module19_argument'}->isValid()) return ${'module19_argument'}->getErrorMessage();
if(${'module19_argument'} !== null) ${'module19_argument'}->setColumnType('varchar');

${'site_srl20_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl20_argument'}->checkNotNull();
${'site_srl20_argument'}->createConditionValue();
if(!${'site_srl20_argument'}->isValid()) return ${'site_srl20_argument'}->getErrorMessage();
if(${'site_srl20_argument'} !== null) ${'site_srl20_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module19_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl20_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>