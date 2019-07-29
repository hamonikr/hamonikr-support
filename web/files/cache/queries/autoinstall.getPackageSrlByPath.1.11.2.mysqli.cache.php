<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackageSqlByPath");
$query->setAction("select");
$query->setPriority("");

${'path1_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path1_argument'}->checkNotNull();
${'path1_argument'}->createConditionValue();
if(!${'path1_argument'}->isValid()) return ${'path1_argument'}->getErrorMessage();
if(${'path1_argument'} !== null) ${'path1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`package_srl`')
));
$query->setTables(array(
new Table('`hme_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>