<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteComments");
$query->setAction("delete");
$query->setPriority("");

${'module_srl13_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl13_argument'}->checkFilter('number');
${'module_srl13_argument'}->checkNotNull();
${'module_srl13_argument'}->createConditionValue();
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl13_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>