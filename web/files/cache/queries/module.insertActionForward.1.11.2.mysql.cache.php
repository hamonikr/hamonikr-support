<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act123_argument'} = new Argument('act', $args->{'act'});
${'act123_argument'}->checkNotNull();
if(!${'act123_argument'}->isValid()) return ${'act123_argument'}->getErrorMessage();
if(${'act123_argument'} !== null) ${'act123_argument'}->setColumnType('varchar');

${'module124_argument'} = new Argument('module', $args->{'module'});
${'module124_argument'}->checkNotNull();
if(!${'module124_argument'}->isValid()) return ${'module124_argument'}->getErrorMessage();
if(${'module124_argument'} !== null) ${'module124_argument'}->setColumnType('varchar');

${'type125_argument'} = new Argument('type', $args->{'type'});
${'type125_argument'}->checkNotNull();
if(!${'type125_argument'}->isValid()) return ${'type125_argument'}->getErrorMessage();
if(${'type125_argument'} !== null) ${'type125_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act123_argument'})
,new InsertExpression('`module`', ${'module124_argument'})
,new InsertExpression('`type`', ${'type125_argument'})
));
$query->setTables(array(
new Table('`hme_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>