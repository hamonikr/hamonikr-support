<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->ensureDefaultValue('0');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'mid2_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid2_argument'}->checkNotNull();
${'mid2_argument'}->createConditionValue();
if(!${'mid2_argument'}->isValid()) return ${'mid2_argument'}->getErrorMessage();
if(${'mid2_argument'} !== null) ${'mid2_argument'}->setColumnType('varchar');

${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl3_argument'}->ensureDefaultValue('0');
${'module_srl3_argument'}->checkNotNull();
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`mid`',$mid2_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl3_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>