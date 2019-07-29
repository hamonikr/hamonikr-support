<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getInstalledPackages");
$query->setAction("select");
$query->setPriority("");

${'package_list2_argument'} = new ConditionArgument('package_list', $args->package_list, 'in');
${'package_list2_argument'}->checkNotNull();
${'package_list2_argument'}->createConditionValue();
if(!${'package_list2_argument'}->isValid()) return ${'package_list2_argument'}->getErrorMessage();
if(${'package_list2_argument'} !== null) ${'package_list2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`installed`.*')
,new SelectExpression('`path`')
));
$query->setTables(array(
new Table('`hme_ai_installed_packages`', '`installed`')
,new Table('`hme_autoinstall_packages`', '`package`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`installed`.`package_srl`',$package_list2_argument,"in")
,new ConditionWithoutArgument('`installed`.`package_srl`','`package`.`package_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>