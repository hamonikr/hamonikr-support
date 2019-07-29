<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleSkinVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl10_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl10_argument'}->checkFilter('number');
${'module_srl10_argument'}->checkNotNull();
${'module_srl10_argument'}->createConditionValue();
if(!${'module_srl10_argument'}->isValid()) return ${'module_srl10_argument'}->getErrorMessage();
if(${'module_srl10_argument'} !== null) ${'module_srl10_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_module_skins`', '`module_skins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl10_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>