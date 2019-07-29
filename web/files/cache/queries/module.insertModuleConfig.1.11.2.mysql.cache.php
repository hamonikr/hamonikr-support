<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleConfig");
$query->setAction("insert");
$query->setPriority("");

${'module21_argument'} = new Argument('module', $args->{'module'});
${'module21_argument'}->checkNotNull();
if(!${'module21_argument'}->isValid()) return ${'module21_argument'}->getErrorMessage();
if(${'module21_argument'} !== null) ${'module21_argument'}->setColumnType('varchar');
if(isset($args->config)) {
${'config22_argument'} = new Argument('config', $args->{'config'});
if(!${'config22_argument'}->isValid()) return ${'config22_argument'}->getErrorMessage();
} else
${'config22_argument'} = NULL;if(${'config22_argument'} !== null) ${'config22_argument'}->setColumnType('text');

${'site_srl23_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl23_argument'}->checkNotNull();
if(!${'site_srl23_argument'}->isValid()) return ${'site_srl23_argument'}->getErrorMessage();
if(${'site_srl23_argument'} !== null) ${'site_srl23_argument'}->setColumnType('number');

${'regdate24_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate24_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate24_argument'}->isValid()) return ${'regdate24_argument'}->getErrorMessage();
if(${'regdate24_argument'} !== null) ${'regdate24_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module21_argument'})
,new InsertExpression('`config`', ${'config22_argument'})
,new InsertExpression('`site_srl`', ${'site_srl23_argument'})
,new InsertExpression('`regdate`', ${'regdate24_argument'})
));
$query->setTables(array(
new Table('`hme_module_config`', '`module_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>