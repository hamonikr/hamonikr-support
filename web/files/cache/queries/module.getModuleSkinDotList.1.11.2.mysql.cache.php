<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin25_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin25_argument'}->ensureDefaultValue('.');
${'skin25_argument'}->createConditionValue();
if(!${'skin25_argument'}->isValid()) return ${'skin25_argument'}->getErrorMessage();
if(${'skin25_argument'} !== null) ${'skin25_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin25_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>