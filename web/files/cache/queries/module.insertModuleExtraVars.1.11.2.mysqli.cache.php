<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl43_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl43_argument'}->checkFilter('number');
${'module_srl43_argument'}->checkNotNull();
if(!${'module_srl43_argument'}->isValid()) return ${'module_srl43_argument'}->getErrorMessage();
if(${'module_srl43_argument'} !== null) ${'module_srl43_argument'}->setColumnType('number');

${'name44_argument'} = new Argument('name', $args->{'name'});
${'name44_argument'}->checkNotNull();
if(!${'name44_argument'}->isValid()) return ${'name44_argument'}->getErrorMessage();
if(${'name44_argument'} !== null) ${'name44_argument'}->setColumnType('varchar');

${'value45_argument'} = new Argument('value', $args->{'value'});
${'value45_argument'}->checkNotNull();
if(!${'value45_argument'}->isValid()) return ${'value45_argument'}->getErrorMessage();
if(${'value45_argument'} !== null) ${'value45_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl43_argument'})
,new InsertExpression('`name`', ${'name44_argument'})
,new InsertExpression('`value`', ${'value45_argument'})
));
$query->setTables(array(
new Table('`hme_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>