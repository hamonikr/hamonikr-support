<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid6_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid6_argument'}->createConditionValue();
if(!${'mid6_argument'}->isValid()) return ${'mid6_argument'}->getErrorMessage();
} else
${'mid6_argument'} = NULL;if(${'mid6_argument'} !== null) ${'mid6_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl7_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl7_argument'}->createConditionValue();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
} else
${'module_srl7_argument'} = NULL;if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl8_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl8_argument'}->createConditionValue();
if(!${'site_srl8_argument'}->isValid()) return ${'site_srl8_argument'}->getErrorMessage();
} else
${'site_srl8_argument'} = NULL;if(${'site_srl8_argument'} !== null) ${'site_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid6_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl7_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl8_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>