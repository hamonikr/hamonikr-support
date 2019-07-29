<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePackage");
$query->setAction("update");
$query->setPriority("");

${'path1_argument'} = new Argument('path', $args->{'path'});
${'path1_argument'}->checkNotNull();
if(!${'path1_argument'}->isValid()) return ${'path1_argument'}->getErrorMessage();
if(${'path1_argument'} !== null) ${'path1_argument'}->setColumnType('varchar');

${'have_instance2_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance2_argument'}->checkNotNull();
if(!${'have_instance2_argument'}->isValid()) return ${'have_instance2_argument'}->getErrorMessage();
if(${'have_instance2_argument'} !== null) ${'have_instance2_argument'}->setColumnType('char');

${'updatedate3_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate3_argument'}->checkNotNull();
if(!${'updatedate3_argument'}->isValid()) return ${'updatedate3_argument'}->getErrorMessage();
if(${'updatedate3_argument'} !== null) ${'updatedate3_argument'}->setColumnType('date');
if(isset($args->category_srl)) {
${'category_srl4_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl4_argument'}->checkFilter('number');
if(!${'category_srl4_argument'}->isValid()) return ${'category_srl4_argument'}->getErrorMessage();
} else
${'category_srl4_argument'} = NULL;if(${'category_srl4_argument'} !== null) ${'category_srl4_argument'}->setColumnType('number');

${'latest_item_srl5_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl5_argument'}->checkNotNull();
if(!${'latest_item_srl5_argument'}->isValid()) return ${'latest_item_srl5_argument'}->getErrorMessage();
if(${'latest_item_srl5_argument'} !== null) ${'latest_item_srl5_argument'}->setColumnType('number');

${'version6_argument'} = new Argument('version', $args->{'version'});
${'version6_argument'}->checkNotNull();
if(!${'version6_argument'}->isValid()) return ${'version6_argument'}->getErrorMessage();
if(${'version6_argument'} !== null) ${'version6_argument'}->setColumnType('varchar');

${'package_srl7_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl7_argument'}->checkNotNull();
${'package_srl7_argument'}->createConditionValue();
if(!${'package_srl7_argument'}->isValid()) return ${'package_srl7_argument'}->getErrorMessage();
if(${'package_srl7_argument'} !== null) ${'package_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`path`', ${'path1_argument'})
,new UpdateExpression('`have_instance`', ${'have_instance2_argument'})
,new UpdateExpression('`updatedate`', ${'updatedate3_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl4_argument'})
,new UpdateExpression('`latest_item_srl`', ${'latest_item_srl5_argument'})
,new UpdateExpression('`version`', ${'version6_argument'})
));
$query->setTables(array(
new Table('`hme_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl7_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>