<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNeedUpdate");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`i`.*')
,new SelectExpression('`p`.`path`')
));
$query->setTables(array(
new Table('`hme_ai_installed_packages`', '`i`')
,new Table('`hme_autoinstall_packages`', '`p`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`i`.`package_srl`','`p`.`package_srl`',"equal")
,new ConditionWithoutArgument('`i`.`need_update`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>