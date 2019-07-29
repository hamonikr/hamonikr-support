<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl21_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl21_argument'}->checkFilter('number');
${'package_srl21_argument'}->checkNotNull();
if(!${'package_srl21_argument'}->isValid()) return ${'package_srl21_argument'}->getErrorMessage();
if(${'package_srl21_argument'} !== null) ${'package_srl21_argument'}->setColumnType('number');

${'version22_argument'} = new Argument('version', $args->{'version'});
${'version22_argument'}->checkNotNull();
if(!${'version22_argument'}->isValid()) return ${'version22_argument'}->getErrorMessage();
if(${'version22_argument'} !== null) ${'version22_argument'}->setColumnType('varchar');

${'current_version23_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version23_argument'}->checkNotNull();
if(!${'current_version23_argument'}->isValid()) return ${'current_version23_argument'}->getErrorMessage();
if(${'current_version23_argument'} !== null) ${'current_version23_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update24_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update24_argument'}->isValid()) return ${'need_update24_argument'}->getErrorMessage();
} else
${'need_update24_argument'} = NULL;if(${'need_update24_argument'} !== null) ${'need_update24_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl21_argument'})
,new InsertExpression('`version`', ${'version22_argument'})
,new InsertExpression('`current_version`', ${'current_version23_argument'})
,new InsertExpression('`need_update`', ${'need_update24_argument'})
));
$query->setTables(array(
new Table('`hme_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>