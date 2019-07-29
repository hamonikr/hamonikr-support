<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl126_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl126_argument'}->ensureDefaultValue('0');
${'site_srl126_argument'}->checkNotNull();
${'site_srl126_argument'}->createConditionValue();
if(!${'site_srl126_argument'}->isValid()) return ${'site_srl126_argument'}->getErrorMessage();
if(${'site_srl126_argument'} !== null) ${'site_srl126_argument'}->setColumnType('number');

${'mid127_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid127_argument'}->checkNotNull();
${'mid127_argument'}->createConditionValue();
if(!${'mid127_argument'}->isValid()) return ${'mid127_argument'}->getErrorMessage();
if(${'mid127_argument'} !== null) ${'mid127_argument'}->setColumnType('varchar');

${'module_srl128_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl128_argument'}->ensureDefaultValue('0');
${'module_srl128_argument'}->checkNotNull();
${'module_srl128_argument'}->createConditionValue();
if(!${'module_srl128_argument'}->isValid()) return ${'module_srl128_argument'}->getErrorMessage();
if(${'module_srl128_argument'} !== null) ${'module_srl128_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl126_argument,"equal")
,new ConditionWithArgument('`mid`',$mid127_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl128_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>