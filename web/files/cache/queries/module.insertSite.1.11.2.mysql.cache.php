<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSite");
$query->setAction("insert");
$query->setPriority("");

${'site_srl2_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl2_argument'}->checkNotNull();
if(!${'site_srl2_argument'}->isValid()) return ${'site_srl2_argument'}->getErrorMessage();
if(${'site_srl2_argument'} !== null) ${'site_srl2_argument'}->setColumnType('number');

${'domain3_argument'} = new Argument('domain', $args->{'domain'});
${'domain3_argument'}->checkNotNull();
if(!${'domain3_argument'}->isValid()) return ${'domain3_argument'}->getErrorMessage();
if(${'domain3_argument'} !== null) ${'domain3_argument'}->setColumnType('varchar');

${'index_module_srl4_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
${'index_module_srl4_argument'}->checkFilter('number');
${'index_module_srl4_argument'}->ensureDefaultValue('0');
if(!${'index_module_srl4_argument'}->isValid()) return ${'index_module_srl4_argument'}->getErrorMessage();
if(${'index_module_srl4_argument'} !== null) ${'index_module_srl4_argument'}->setColumnType('number');
if(isset($args->default_language)) {
${'default_language5_argument'} = new Argument('default_language', $args->{'default_language'});
if(!${'default_language5_argument'}->isValid()) return ${'default_language5_argument'}->getErrorMessage();
} else
${'default_language5_argument'} = NULL;if(${'default_language5_argument'} !== null) ${'default_language5_argument'}->setColumnType('varchar');

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl2_argument'})
,new InsertExpression('`domain`', ${'domain3_argument'})
,new InsertExpression('`index_module_srl`', ${'index_module_srl4_argument'})
,new InsertExpression('`default_language`', ${'default_language5_argument'})
,new InsertExpression('`regdate`', ${'regdate6_argument'})
));
$query->setTables(array(
new Table('`hme_sites`', '`sites`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>