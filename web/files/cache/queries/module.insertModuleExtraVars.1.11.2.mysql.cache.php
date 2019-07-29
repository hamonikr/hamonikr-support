<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl184_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl184_argument'}->checkFilter('number');
${'module_srl184_argument'}->checkNotNull();
if(!${'module_srl184_argument'}->isValid()) return ${'module_srl184_argument'}->getErrorMessage();
if(${'module_srl184_argument'} !== null) ${'module_srl184_argument'}->setColumnType('number');

${'name185_argument'} = new Argument('name', $args->{'name'});
${'name185_argument'}->checkNotNull();
if(!${'name185_argument'}->isValid()) return ${'name185_argument'}->getErrorMessage();
if(${'name185_argument'} !== null) ${'name185_argument'}->setColumnType('varchar');

${'value186_argument'} = new Argument('value', $args->{'value'});
${'value186_argument'}->checkNotNull();
if(!${'value186_argument'}->isValid()) return ${'value186_argument'}->getErrorMessage();
if(${'value186_argument'} !== null) ${'value186_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl184_argument'})
,new InsertExpression('`name`', ${'name185_argument'})
,new InsertExpression('`value`', ${'value186_argument'})
));
$query->setTables(array(
new Table('`hme_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>