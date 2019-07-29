<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleAdmin");
$query->setAction("select");
$query->setPriority("");

${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl3_argument'}->checkFilter('number');
${'module_srl3_argument'}->checkNotNull();
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');

${'member_srl4_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl4_argument'}->checkNotNull();
${'member_srl4_argument'}->createConditionValue();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_module_admins`', '`module_admins`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl3_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>