<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid158_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid158_argument'}->createConditionValue();
if(!${'mid158_argument'}->isValid()) return ${'mid158_argument'}->getErrorMessage();
} else
${'mid158_argument'} = NULL;if(${'mid158_argument'} !== null) ${'mid158_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl159_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl159_argument'}->createConditionValue();
if(!${'module_srl159_argument'}->isValid()) return ${'module_srl159_argument'}->getErrorMessage();
} else
${'module_srl159_argument'} = NULL;if(${'module_srl159_argument'} !== null) ${'module_srl159_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl160_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl160_argument'}->createConditionValue();
if(!${'site_srl160_argument'}->isValid()) return ${'site_srl160_argument'}->getErrorMessage();
} else
${'site_srl160_argument'} = NULL;if(${'site_srl160_argument'} !== null) ${'site_srl160_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid158_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl159_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl160_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>