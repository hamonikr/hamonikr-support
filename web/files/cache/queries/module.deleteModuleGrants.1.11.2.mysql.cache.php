<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleGrants");
$query->setAction("delete");
$query->setPriority("");

${'module_srl9_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl9_argument'}->checkFilter('number');
${'module_srl9_argument'}->checkNotNull();
${'module_srl9_argument'}->createConditionValue();
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_module_grants`', '`module_grants`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl9_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>