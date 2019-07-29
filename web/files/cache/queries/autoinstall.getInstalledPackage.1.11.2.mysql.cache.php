<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getInstalledPackage");
$query->setAction("select");
$query->setPriority("");

${'package_srl1_argument'} = new ConditionArgument('package_srl', $args->package_srl, 'equal');
${'package_srl1_argument'}->checkFilter('number');
${'package_srl1_argument'}->checkNotNull();
${'package_srl1_argument'}->createConditionValue();
if(!${'package_srl1_argument'}->isValid()) return ${'package_srl1_argument'}->getErrorMessage();
if(${'package_srl1_argument'} !== null) ${'package_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`package_srl`',$package_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>