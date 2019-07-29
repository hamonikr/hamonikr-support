<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTrigger");
$query->setAction("insert");
$query->setPriority("");

${'trigger_name26_argument'} = new Argument('trigger_name', $args->{'trigger_name'});
${'trigger_name26_argument'}->checkNotNull();
if(!${'trigger_name26_argument'}->isValid()) return ${'trigger_name26_argument'}->getErrorMessage();
if(${'trigger_name26_argument'} !== null) ${'trigger_name26_argument'}->setColumnType('varchar');

${'module27_argument'} = new Argument('module', $args->{'module'});
${'module27_argument'}->checkNotNull();
if(!${'module27_argument'}->isValid()) return ${'module27_argument'}->getErrorMessage();
if(${'module27_argument'} !== null) ${'module27_argument'}->setColumnType('varchar');

${'type28_argument'} = new Argument('type', $args->{'type'});
${'type28_argument'}->checkNotNull();
if(!${'type28_argument'}->isValid()) return ${'type28_argument'}->getErrorMessage();
if(${'type28_argument'} !== null) ${'type28_argument'}->setColumnType('varchar');

${'called_method29_argument'} = new Argument('called_method', $args->{'called_method'});
${'called_method29_argument'}->checkNotNull();
if(!${'called_method29_argument'}->isValid()) return ${'called_method29_argument'}->getErrorMessage();
if(${'called_method29_argument'} !== null) ${'called_method29_argument'}->setColumnType('varchar');

${'called_position30_argument'} = new Argument('called_position', $args->{'called_position'});
${'called_position30_argument'}->checkNotNull();
if(!${'called_position30_argument'}->isValid()) return ${'called_position30_argument'}->getErrorMessage();
if(${'called_position30_argument'} !== null) ${'called_position30_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`trigger_name`', ${'trigger_name26_argument'})
,new InsertExpression('`module`', ${'module27_argument'})
,new InsertExpression('`type`', ${'type28_argument'})
,new InsertExpression('`called_method`', ${'called_method29_argument'})
,new InsertExpression('`called_position`', ${'called_position30_argument'})
));
$query->setTables(array(
new Table('`hme_module_trigger`', '`module_trigger`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>