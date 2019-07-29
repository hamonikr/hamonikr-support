<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNotLinkedModuleBySiteSrl");
$query->setAction("select");
$query->setPriority("");

${'site_srl3_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl3_argument'}->ensureDefaultValue('0');
${'site_srl3_argument'}->checkNotNull();
${'site_srl3_argument'}->createConditionValue();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`menu_srl`','0',"equal")
,new ConditionWithArgument('`site_srl`',$site_srl3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>