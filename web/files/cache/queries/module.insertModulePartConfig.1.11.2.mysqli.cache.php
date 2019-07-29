<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModulePartConfig");
$query->setAction("insert");
$query->setPriority("");

${'module3_argument'} = new Argument('module', $args->{'module'});
${'module3_argument'}->checkNotNull();
if(!${'module3_argument'}->isValid()) return ${'module3_argument'}->getErrorMessage();
if(${'module3_argument'} !== null) ${'module3_argument'}->setColumnType('varchar');

${'module_srl4_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl4_argument'}->checkNotNull();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');
if(isset($args->config)) {
${'config5_argument'} = new Argument('config', $args->{'config'});
if(!${'config5_argument'}->isValid()) return ${'config5_argument'}->getErrorMessage();
} else
${'config5_argument'} = NULL;if(${'config5_argument'} !== null) ${'config5_argument'}->setColumnType('text');

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module3_argument'})
,new InsertExpression('`module_srl`', ${'module_srl4_argument'})
,new InsertExpression('`config`', ${'config5_argument'})
,new InsertExpression('`regdate`', ${'regdate6_argument'})
));
$query->setTables(array(
new Table('`hme_module_part_config`', '`module_part_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>