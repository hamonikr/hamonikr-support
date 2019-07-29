<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act18_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act18_argument'}->createConditionValue();
if(!${'act18_argument'}->isValid()) return ${'act18_argument'}->getErrorMessage();
} else
${'act18_argument'} = NULL;if(${'act18_argument'} !== null) ${'act18_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act18_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>