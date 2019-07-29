<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleConfig");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module)) {
${'module1_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module1_argument'}->createConditionValue();
if(!${'module1_argument'}->isValid()) return ${'module1_argument'}->getErrorMessage();
} else
${'module1_argument'} = NULL;if(${'module1_argument'} !== null) ${'module1_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl2_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl2_argument'}->createConditionValue();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
} else
${'site_srl2_argument'} = NULL;if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`hme_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module1_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>