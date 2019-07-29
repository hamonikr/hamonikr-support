<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleFiles");
$query->setAction("select");
$query->setPriority("");

${'module_srl35_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl35_argument'}->checkFilter('number');
${'module_srl35_argument'}->checkNotNull();
${'module_srl35_argument'}->createConditionValue();
if(!${'module_srl35_argument'}->isValid()) return ${'module_srl35_argument'}->getErrorMessage();
if(${'module_srl35_argument'} !== null) ${'module_srl35_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl35_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>