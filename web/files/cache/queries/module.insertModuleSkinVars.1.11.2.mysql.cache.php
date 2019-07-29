<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleSkinVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl1_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'name2_argument'} = new Argument('name', $args->{'name'});
${'name2_argument'}->checkNotNull();
if(!${'name2_argument'}->isValid()) return ${'name2_argument'}->getErrorMessage();
if(${'name2_argument'} !== null) ${'name2_argument'}->setColumnType('varchar');

${'value3_argument'} = new Argument('value', $args->{'value'});
${'value3_argument'}->checkNotNull();
if(!${'value3_argument'}->isValid()) return ${'value3_argument'}->getErrorMessage();
if(${'value3_argument'} !== null) ${'value3_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl1_argument'})
,new InsertExpression('`name`', ${'name2_argument'})
,new InsertExpression('`value`', ${'value3_argument'})
));
$query->setTables(array(
new Table('`hme_module_skins`', '`module_skins`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>