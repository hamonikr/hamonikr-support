<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePackage");
$query->setAction("delete");
$query->setPriority("");

${'path19_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path19_argument'}->checkNotNull();
${'path19_argument'}->createConditionValue();
if(!${'path19_argument'}->isValid()) return ${'path19_argument'}->getErrorMessage();
if(${'path19_argument'} !== null) ${'path19_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`hme_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path19_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>