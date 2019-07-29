<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module206_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module206_argument'}->checkNotNull();
${'module206_argument'}->createConditionValue();
if(!${'module206_argument'}->isValid()) return ${'module206_argument'}->getErrorMessage();
if(${'module206_argument'} !== null) ${'module206_argument'}->setColumnType('varchar');

${'module_srl207_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl207_argument'}->checkNotNull();
${'module_srl207_argument'}->createConditionValue();
if(!${'module_srl207_argument'}->isValid()) return ${'module_srl207_argument'}->getErrorMessage();
if(${'module_srl207_argument'} !== null) ${'module_srl207_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`hme_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module206_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl207_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>