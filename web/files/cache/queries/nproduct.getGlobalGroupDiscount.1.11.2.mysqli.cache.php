<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroupDiscount");
$query->setAction("select");
$query->setPriority("");

${'module_srl17_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl17_argument'}->checkNotNull();
${'module_srl17_argument'}->createConditionValue();
if(!${'module_srl17_argument'}->isValid()) return ${'module_srl17_argument'}->getErrorMessage();
if(${'module_srl17_argument'} !== null) ${'module_srl17_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_global_group_discount`', '`nproduct_global_group_discount`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>