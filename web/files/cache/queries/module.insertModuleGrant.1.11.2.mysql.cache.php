<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleGrant");
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

${'group_srl3_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl3_argument'}->checkNotNull();
if(!${'group_srl3_argument'}->isValid()) return ${'group_srl3_argument'}->getErrorMessage();
if(${'group_srl3_argument'} !== null) ${'group_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl1_argument'})
,new InsertExpression('`name`', ${'name2_argument'})
,new InsertExpression('`group_srl`', ${'group_srl3_argument'})
));
$query->setTables(array(
new Table('`hme_module_grants`', '`module_grants`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>