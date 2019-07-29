<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleMobileSkinVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_module_mobile_skins`', '`module_mobile_skins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>