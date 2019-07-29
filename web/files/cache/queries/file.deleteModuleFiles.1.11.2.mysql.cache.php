<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleFiles");
$query->setAction("delete");
$query->setPriority("");

${'module_srl36_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl36_argument'}->checkFilter('number');
${'module_srl36_argument'}->checkNotNull();
${'module_srl36_argument'}->createConditionValue();
if(!${'module_srl36_argument'}->isValid()) return ${'module_srl36_argument'}->getErrorMessage();
if(${'module_srl36_argument'} !== null) ${'module_srl36_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl36_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>