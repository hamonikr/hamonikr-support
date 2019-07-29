<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl183_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl183_argument'}->checkFilter('number');
${'module_srl183_argument'}->checkNotNull();
${'module_srl183_argument'}->createConditionValue();
if(!${'module_srl183_argument'}->isValid()) return ${'module_srl183_argument'}->getErrorMessage();
if(${'module_srl183_argument'} !== null) ${'module_srl183_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl183_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>