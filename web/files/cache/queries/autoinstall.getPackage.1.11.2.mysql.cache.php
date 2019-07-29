<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPackage");
$query->setAction("select");
$query->setPriority("");

${'package_srl11_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl11_argument'}->checkFilter('number');
${'package_srl11_argument'}->checkNotNull();
${'package_srl11_argument'}->createConditionValue();
if(!${'package_srl11_argument'}->isValid()) return ${'package_srl11_argument'}->getErrorMessage();
if(${'package_srl11_argument'} !== null) ${'package_srl11_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl11_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>