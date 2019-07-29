<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleConfig");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module)) {
${'module8_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module8_argument'}->createConditionValue();
if(!${'module8_argument'}->isValid()) return ${'module8_argument'}->getErrorMessage();
} else
${'module8_argument'} = NULL;if(${'module8_argument'} !== null) ${'module8_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl9_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl9_argument'}->createConditionValue();
if(!${'site_srl9_argument'}->isValid()) return ${'site_srl9_argument'}->getErrorMessage();
} else
${'site_srl9_argument'} = NULL;if(${'site_srl9_argument'} !== null) ${'site_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`hme_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module8_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>