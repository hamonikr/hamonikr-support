<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl12_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl12_argument'}->checkFilter('number');
${'package_srl12_argument'}->checkNotNull();
if(!${'package_srl12_argument'}->isValid()) return ${'package_srl12_argument'}->getErrorMessage();
if(${'package_srl12_argument'} !== null) ${'package_srl12_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl13_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl13_argument'}->checkFilter('number');
if(!${'category_srl13_argument'}->isValid()) return ${'category_srl13_argument'}->getErrorMessage();
} else
${'category_srl13_argument'} = NULL;if(${'category_srl13_argument'} !== null) ${'category_srl13_argument'}->setColumnType('number');

${'path14_argument'} = new Argument('path', $args->{'path'});
${'path14_argument'}->checkNotNull();
if(!${'path14_argument'}->isValid()) return ${'path14_argument'}->getErrorMessage();
if(${'path14_argument'} !== null) ${'path14_argument'}->setColumnType('varchar');

${'have_instance15_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance15_argument'}->checkNotNull();
if(!${'have_instance15_argument'}->isValid()) return ${'have_instance15_argument'}->getErrorMessage();
if(${'have_instance15_argument'} !== null) ${'have_instance15_argument'}->setColumnType('char');

${'updatedate16_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate16_argument'}->checkNotNull();
if(!${'updatedate16_argument'}->isValid()) return ${'updatedate16_argument'}->getErrorMessage();
if(${'updatedate16_argument'} !== null) ${'updatedate16_argument'}->setColumnType('date');

${'latest_item_srl17_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl17_argument'}->checkNotNull();
if(!${'latest_item_srl17_argument'}->isValid()) return ${'latest_item_srl17_argument'}->getErrorMessage();
if(${'latest_item_srl17_argument'} !== null) ${'latest_item_srl17_argument'}->setColumnType('number');

${'version18_argument'} = new Argument('version', $args->{'version'});
${'version18_argument'}->checkNotNull();
if(!${'version18_argument'}->isValid()) return ${'version18_argument'}->getErrorMessage();
if(${'version18_argument'} !== null) ${'version18_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl12_argument'})
,new InsertExpression('`category_srl`', ${'category_srl13_argument'})
,new InsertExpression('`path`', ${'path14_argument'})
,new InsertExpression('`have_instance`', ${'have_instance15_argument'})
,new InsertExpression('`updatedate`', ${'updatedate16_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl17_argument'})
,new InsertExpression('`version`', ${'version18_argument'})
));
$query->setTables(array(
new Table('`hme_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>