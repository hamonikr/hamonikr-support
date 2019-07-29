<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl131_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl131_argument'}->checkFilter('number');
${'menu_srl131_argument'}->checkNotNull();
if(!${'menu_srl131_argument'}->isValid()) return ${'menu_srl131_argument'}->getErrorMessage();
if(${'menu_srl131_argument'} !== null) ${'menu_srl131_argument'}->setColumnType('number');

${'site_srl132_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl132_argument'}->checkFilter('number');
${'site_srl132_argument'}->ensureDefaultValue('0');
${'site_srl132_argument'}->checkNotNull();
if(!${'site_srl132_argument'}->isValid()) return ${'site_srl132_argument'}->getErrorMessage();
if(${'site_srl132_argument'} !== null) ${'site_srl132_argument'}->setColumnType('number');

${'title133_argument'} = new Argument('title', $args->{'title'});
${'title133_argument'}->checkNotNull();
if(!${'title133_argument'}->isValid()) return ${'title133_argument'}->getErrorMessage();
if(${'title133_argument'} !== null) ${'title133_argument'}->setColumnType('varchar');

${'listorder134_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder134_argument'}->checkNotNull();
if(!${'listorder134_argument'}->isValid()) return ${'listorder134_argument'}->getErrorMessage();
if(${'listorder134_argument'} !== null) ${'listorder134_argument'}->setColumnType('number');

${'regdate135_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate135_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate135_argument'}->isValid()) return ${'regdate135_argument'}->getErrorMessage();
if(${'regdate135_argument'} !== null) ${'regdate135_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl131_argument'})
,new InsertExpression('`site_srl`', ${'site_srl132_argument'})
,new InsertExpression('`title`', ${'title133_argument'})
,new InsertExpression('`listorder`', ${'listorder134_argument'})
,new InsertExpression('`regdate`', ${'regdate135_argument'})
));
$query->setTables(array(
new Table('`hme_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>