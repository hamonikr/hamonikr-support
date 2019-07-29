<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl42_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl42_argument'}->checkFilter('number');
${'module_srl42_argument'}->checkNotNull();
${'module_srl42_argument'}->createConditionValue();
if(!${'module_srl42_argument'}->isValid()) return ${'module_srl42_argument'}->getErrorMessage();
if(${'module_srl42_argument'} !== null) ${'module_srl42_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl42_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>