<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModulePartConfig");
$query->setAction("delete");
$query->setPriority("");

${'module1_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module1_argument'}->checkNotNull();
${'module1_argument'}->createConditionValue();
if(!${'module1_argument'}->isValid()) return ${'module1_argument'}->getErrorMessage();
if(${'module1_argument'} !== null) ${'module1_argument'}->setColumnType('varchar');

${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->checkNotNull();
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module1_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>